<?php

namespace DarkLordOfBackend;

use Reflection;
use ReflectionClass;
use ReflectionExtension;
use ReflectionFunction;
use ReflectionFunctionAbstract;

class Reflected
{
    public static function dumpize($var)
    {
        return "(" . gettype($var) . ") " . trim((string) $var);
    }

    public static function renderClassTree(array $classes, $isFlatMode = false)
    {
        if (!$classes) {
            return;
        }

        $tree = [];
        foreach ($classes as $reflection) {
            $nameSpace = $reflection->getNamespaceName() ?: '\\';
            $parent = $reflection->getParentClass() ? $reflection->getParentClass()->getName() : 'root';

            $tree[$nameSpace][$parent][] = $reflection;
        }

        if ($isFlatMode) {
            foreach ($classes as $class) {
                return self::renderNode($class, array(), "", true);
            }
        }

        $classView = '';
        foreach ($tree as $nameSpace => $hierarchy) {
            $classView .= Colorizer::blue($nameSpace);
            if (isset($hierarchy['root'])) {
                foreach ($hierarchy['root'] as $rootClass) {
                    $classView .= self::renderNode($rootClass, $hierarchy, "│ │ │ ");
                }
            }
        }

        return $classView;
    }

    public static function renderNode(
        ReflectionClass $ref,
        array $hierarchy = array(),
        $indent = "",
        $isFlatMode = false
    ): string {
        $prefix = '';

        if ($ref->isAbstract()) {
            $prefix .= "abstract";
        }

        if ($ref->isFinal()) {
            $prefix .= "final";
        }

        $prefix .= " class";
        if ($ref->isInterface()) {
            $prefix .= " interface";
        } elseif ($ref->isTrait()) {
            $prefix .= " trait";
        }

        $prefix = trim($prefix);

        $name = $ref->getShortName();

        $ifs = $ref->getInterfaceNames();
        $traits = $ref->getTraitNames();
        $extra = (
            (
                ($isFlatMode and ($parents = class_parents($ref->getName())))
                ? " extends " . implode(', ', $parents)
                : ""
            ) .
            ($ifs    ? " implements " . implode(', ', $ifs)    : "") .
            ($traits ? " uses "       . implode(', ', $traits) : "")
        );

        $classView = PHP_EOL . $indent . "├─ " . Colorizer::blue("{$prefix} {$name}{$extra}");
        if (isset($hierarchy[$ref->getName()])) {
            foreach ($hierarchy[$ref->getName()] as $child) {
                $classView .= self::renderNode($child, $hierarchy, $indent . "│ ", $isFlatMode);
            }
        }

        return $classView;
    }

    public static function getFunctionPrototype(ReflectionFunctionAbstract $reflection): string
    {
        $params = [];

        foreach ($reflection->getParameters() as $param) {
            $paramString = '';

            // Получаем тип параметра
            if ($param->hasType()) {
                $paramString .= $param->getType() . ' ';
            }

            if ($param->isVariadic()) {
                $paramString .= '...';
            }

            // Ссылка?
            if ($param->isPassedByReference()) {
                $paramString .= '&';
            }

            // Имя переменной
            $paramString .= '$' . $param->getName();

            // Значение по умолчанию
            if ($param->isDefaultValueAvailable()) {
                $default = $param->getDefaultValue();
                $paramString .= ' = ' . var_export($default, true);
            }

            $params[] = Colorizer::magenta($paramString);
        }

        $signature = Colorizer::cyan(
            (
                method_exists($reflection, 'getModifiers')
                ? implode(' ', Reflection::getModifierNames($reflection->getModifiers()))
                : ''
            ) .
            ' function ' .
            $reflection->getName()
        ) . '(' . implode(', ', $params) . ')';

        // Тип возвращаемого значения
        if ($reflection->hasReturnType()) {
            $signature .= ': ' . $reflection->getReturnType();
        }

        return $signature;
    }

    public static function getExtensionInfo($nameExtension, $onlySelected = false)
    {
        $reflectionExtension = new ReflectionExtension($nameExtension);

        $splitterMiddle = PHP_EOL . "│ │ ├─ ";
        $splitterEnd    = PHP_EOL . "└─┴─┴─ ";

        $summary = [];

        $summary['getName']      = $reflectionExtension->getName()      ? : null;
        $summary['getVersion']   = $reflectionExtension->getVersion()   ? : null;
        $summary['isPersistent'] = $reflectionExtension->isPersistent() ? 'true' : null;
        $summary['isTemporary']  = $reflectionExtension->isTemporary()  ? 'true' : null;

        $classNames = $reflectionExtension->getClasses();
        if ($classNames) {
            readNewClassList: foreach (array_keys($classNames) as $className) {
                if (
                    $parentClass = get_parent_class($className)
                    and
                    false === in_array($parentClass, array_keys($classNames))
                ) {
                    $classNames[$parentClass] = new ReflectionClass($parentClass);
                    goto readNewClassList;
                }
            }
        }

        $summary['getDependencies'] = '';
        foreach ($reflectionExtension->getDependencies() as $dependency) {
            $summary['getDependencies'] .= $splitterMiddle . $dependency;
        }

        if (!$onlySelected) {
            $summary['getConstants'] = '';
            foreach ($reflectionExtension->getConstants() as $key => $value) {
                $value = self::dumpize($value);
                $summary['getConstants'] .= $splitterMiddle . Colorizer::orange("{$key} = {$value}");
            }

            $summary['getINIEntries'] = '';
            foreach ($reflectionExtension->getINIEntries() as $iniKey => $iniValue) {
                $iniValue = self::dumpize($iniValue);
                $summary['getINIEntries'] .= (
                    $splitterMiddle .
                    Colorizer::red($iniKey . ' = ' . $iniValue)
                );
            }

            $summary['getClassNames'] = (
                $classNames
                ? $splitterMiddle . self::renderClassTree($classNames)
                : null
            );
        }

        $summary['getFunctions'] = '';
        foreach (
            $onlySelected
            ? array($onlySelected => new ReflectionFunction($onlySelected))
            : $reflectionExtension->getFunctions() as $functionReflection
        ) {
            $summary['getFunctions'] .= $splitterMiddle . self::getFunctionPrototype($functionReflection);
        }

        $summary = array_filter($summary);

        return (
            '├─ ' . Colorizer::green(Colorizer::bold('Extension: ')) . $nameExtension . PHP_EOL .
            implode(PHP_EOL, array_map(
                function ($key, $value) {
                    return "│ ├─ " . Colorizer::green(Colorizer::bold($key)) . ": {$value}";
                },
                array_keys($summary),
                $summary
            )) .
            $splitterEnd . Colorizer::green(Colorizer::bold('END')) .
            PHP_EOL
        );
    }
}
