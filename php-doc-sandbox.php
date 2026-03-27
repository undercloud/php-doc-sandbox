<?php

namespace DarkLordOfBackend
{
    use ReflectionClass;

    require_once __DIR__ . '/DarkLordOfBackend/Echos.php';
    require_once __DIR__ . '/DarkLordOfBackend/Terminal.php';
    require_once __DIR__ . '/DarkLordOfBackend/Colorizer.php';
    require_once __DIR__ . '/DarkLordOfBackend/Reflected.php';

    while (true) {
        Terminal::clear();

        if ($argc < 2) {
            Echos::fdwritec('     ____  __  __ ___' . PHP_EOL);
            Echos::fdwritec('    / __ \/ / / / __ \ ' . PHP_EOL);
            Echos::fdwritec('   / /_/ / /_/ / /_/ /' . PHP_EOL);
            Echos::fdwritec('  / ____/ __  / ____/' . PHP_EOL);
            Echos::fdwritec(' /_/   /_/ /_/_/' . PHP_EOL);
            Echos::fdwritec(PHP_EOL);
            Echos::fdwritec(' PHP Doc Sandbox' . PHP_EOL);
            Echos::fdwritec(PHP_EOL);
            Echos::fdwritec(' \ Switch Mode:' . PHP_EOL);
            Echos::fdwritec(' ├─ 0) Exit' . PHP_EOL);
            Echos::fdwritec(' ├─ 1) Extensions' . PHP_EOL);
            Echos::fdwritec(' ├─ 2) Class' . PHP_EOL);
            Echos::fdwritec(' ├─ 3) Interface' . PHP_EOL);
            Echos::fdwritec(' ├─ 4) Exception' . PHP_EOL);
            Echos::fdwritec(' ├─ 5) Error' . PHP_EOL);
            Echos::fdwritec(' ├─ 6) Iterator' . PHP_EOL);
            Echos::fdwritec(' ├─ 7) Class (no Interface, no Exception)' . PHP_EOL);
            Echos::fdwritec(' └─ 8) Function' . PHP_EOL);
            Echos::fdwritec(PHP_EOL);
            Echos::fdwritec('>>> So What?: ');
        }

        $selectedMode = (isset($argv[1]) ? $argv[1] : rtrim(fgets(STDIN)));

        Terminal::clear();
        if ('0' == $selectedMode) {
            break;
        } elseif (1 == $selectedMode) {
            $extensions = get_loaded_extensions();
            if (isset($argv[2])) {
                $extensions = array_filter($extensions, function ($extensionName) use ($argv) {
                    return (false !== stripos($extensionName, $argv[2]));
                });

                $extensions = array_values($extensions);
            }

            if (0 === count($extensions)) {
                $selectedIndex = -1;
            } elseif (count($extensions) === 1) {
                $selectedIndex = 0;
            } else {
                Echos::fdwritec('Avail PHP Extensions:' . PHP_EOL . PHP_EOL);

                foreach ($extensions as $index => $extension) {
                    $extensionName = str_pad($index, 2, ' ', STR_PAD_LEFT) . ') ' . $extension . ' ';
                    $extensionName = str_pad($extensionName, 20);

                    Echos::fdwrites($extensionName);
                    if (($index + 1) % 3 === 0) {
                        Echos::fdwritec(PHP_EOL);
                    }
                }

                Echos::fdwritec(PHP_EOL . PHP_EOL);
                Echos::fdwritec('>>> Enter Extension Index: ');

                $selectedIndex = rtrim(fgets(STDIN));
            }

            Terminal::clear();
            if (isset($extensions[$selectedIndex])) {
                Echos::fdwrites(Reflected::getExtensionInfo($extensions[$selectedIndex]));
            } else {
                Echos::fdwritec('[ERROR] Extension Not Found!' . PHP_EOL);
            }
        } elseif (in_array($selectedMode, array(2,3,4,5,6,7))) {
            $isClass     = (2 == $selectedMode);
            $isInterface = (3 == $selectedMode);
            $isException = (4 == $selectedMode);
            $isError     = (5 == $selectedMode);
            $isIterator  = (6 == $selectedMode);
            $isPureClass = (7 == $selectedMode);

            if ($isException or $isError or $isIterator) {
                $classes = array_merge(
                    get_declared_classes(),
                    get_declared_interfaces()
                );

                $classes = array_filter($classes, function ($class) use ($isException, $isError, $isIterator) {
                    if ($isException) {
                        return false !== stripos($class, 'Exception');
                    } elseif ($isError) {
                        return false !== stripos($class, 'Error');
                    } elseif ($isIterator) {
                        return false !== stripos($class, 'Iterator');
                    }
                });

                $classes = array_values($classes);
            } elseif ($isClass or $isPureClass) {
                $classes = get_declared_classes();
                if ($isPureClass) {
                    $classes = array_filter($classes, function ($class) {
                        return (
                            false === stripos($class, 'Exception')
                            and
                            false === stripos($class, 'Error')
                            and
                            false === stripos($class, 'Iterator')
                        );
                    });

                    $classes = array_values($classes);
                }
            } elseif ($isInterface) {
                $classes = get_declared_interfaces();
            }

            $classes = array_diff(
                $classes,
                array(
                    'DarkLordOfBackend\Echos',
                    'DarkLordOfBackend\Terminal',
                    'DarkLordOfBackend\Colorizer',
                    'DarkLordOfBackend\Reflected'
                )
            );

            if (isset($argv[2])) {
                $classes = (
                    ($fullEqualClass = array_filter($classes, function ($className) use ($argv) {
                        return (strtolower($className) === strtolower($argv[2]));
                    }))
                    ? $fullEqualClass
                    : array_filter($classes, function ($className) use ($argv) {
                        return (false !== stripos($className, $argv[2]));
                    })
                );

                $classes = array_values($classes);
            }

            if (0 === count($classes)) {
                $classIndex = -1;
            } elseif (count($classes) === 1) {
                $classIndex = 0;
            } else {
                if ($isClass) {
                    Echos::fdwritec('Avail PHP Classes:' . PHP_EOL . PHP_EOL);
                } elseif ($isInterface) {
                    Echos::fdwritec('Avail PHP Interfaces:' . PHP_EOL . PHP_EOL);
                } elseif ($isException) {
                    Echos::fdwritec('Avail PHP Exceptions:' . PHP_EOL . PHP_EOL);
                } elseif ($isIterator) {
                    Echos::fdwritec('Avail PHP Iterators:' . PHP_EOL . PHP_EOL);
                } elseif ($isPureClass) {
                    Echos::fdwritec('Avail PHP Pure Classes:' . PHP_EOL . PHP_EOL);
                } elseif ($isError) {
                    Echos::fdwritec('Avail PHP Error Classes:' . PHP_EOL . PHP_EOL);
                }

                $terminalWidthSnapshot = Terminal::getWidth();
                foreach ($classes as $index => $class) {
                    $className = str_pad($index, 3, ' ', STR_PAD_LEFT) . ') ' . $class . ' ';
                    $className = str_pad($className, 37);

                    Echos::fdwrites($className);
                    if (
                        ($index + 1) %
                        (
                            ($isClass or $isPureClass)
                            ? Terminal::getSplitStrategy(40, $terminalWidthSnapshot)
                            : 1
                        ) === 0
                    ) {
                        Echos::fdwritec(PHP_EOL);
                    }
                }

                Echos::fdwritec(PHP_EOL . PHP_EOL);
                if ($isClass or $isPureClass) {
                    Echos::fdwritec('>>> Enter Class Index: ');
                } elseif ($isInterface) {
                    Echos::fdwritec('>>> Enter Interface Index: ');
                } elseif ($isException) {
                    Echos::fdwritec('>>> Enter Exception Index: ');
                } elseif ($isIterator) {
                    Echos::fdwritec('>>> Enter Iterator Index: ');
                } elseif ($isError) {
                    Echos::fdwritec('>>> Enter Error Class Index: ');
                }

                $classIndex = rtrim(fgets(STDIN));
            }

            Terminal::clear();
            if (false == isset($classes[$classIndex])) {
                if ($isClass or $isPureClass or $isError) {
                    Echos::fdwritec('[ERROR] Class Not Found!' . PHP_EOL);
                } elseif ($isInterface) {
                    Echos::fdwritec('[ERROR] Interface Not Found!' . PHP_EOL);
                } elseif ($isException) {
                    Echos::fdwritec('[ERROR] Exception Not Found!' . PHP_EOL);
                } elseif ($isIterator) {
                    Echos::fdwritec('[ERROR] Iterator Not Found!' . PHP_EOL);
                }
            } else {
                $className = $classes[$classIndex];
                $reflectionClass = new ReflectionClass($className);
                $classHead = Reflected::renderClassTree([$reflectionClass], true);

                $splitter_middle = PHP_EOL . "│ ├─ ";
                $splitter_end    = PHP_EOL . "└─┴─ ";

                foreach ($reflectionClass->getConstants() as $key => $value) {
                    $value = Reflected::dumpize($value);
                    $classHead .= $splitter_middle . Colorizer::red("const {$key} = {$value}");
                }

                $defaults = $reflectionClass->getDefaultProperties();

                foreach ($reflectionClass->getProperties() as $prop) {
                    $name = $prop->getName();
                    $type = $prop->isPublic() ? 'public' : ($prop->isProtected() ? 'protected' : 'private');

                    $value = array_key_exists($name, $defaults) ? $defaults[$name] : null;
                    $value = Reflected::dumpize($value);

                    $classHead .= $splitter_middle . Colorizer::orange(sprintf(
                        "%s $%s = %s",
                        $type,
                        $name,
                        $value
                    ));
                }

                foreach ($reflectionClass->getMethods() as $methodName => $methodReflection) {
                    $classHead .= $splitter_middle . Reflected::getFunctionPrototype($methodReflection);
                }

                $classHead .= $splitter_end . Colorizer::green(Colorizer::bold('END'));

                Echos::fdwrites($classHead);
            }
        } elseif (8 == $selectedMode) {
            if (!isset($argv[2])) {
                Echos::fdwritec('>>> Enter Function Name: ');
            }

            $needFunction = (isset($argv[2]) ? $argv[2] : rtrim(fgets(STDIN)));

            $isFounded = false;
            $extensions = get_loaded_extensions();
            foreach ($extensions as $extension) {
                $functions = get_extension_funcs($extension);
                if ($functions) {
                    foreach ($functions as $function) {
                        if (false !== stripos($function, $needFunction)) {
                            Echos::fdwrites(Reflected::getExtensionInfo($extension, $function));
                            $isFounded = true;

                            break;
                        }
                    }
                }
            }

            if (false === $isFounded) {
                Echos::fdwritec('[ERROR] Function Not Found!' . PHP_EOL);
            }
        } else {
            Echos::fdwritec('[ERROR] Wrong mode selected!' . PHP_EOL);
        }

        if ($argc > 1) {
            break;
        }

        Echos::fdwritec(PHP_EOL);
        Echos::fdwritec('Press Enter To Continue...');
        fgetc(STDIN);
    }
}
