<?php

namespace DarkLordOfBackend;

class Terminal
{
    public static function getWidth()
    {
        if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
            $output = shell_exec('mode con');
            if (preg_match('/Columns:\s+(\d+)/', $output, $matches)) {
                return (int) $matches[1];
            }
        } else {
            $size = explode(' ', (string) shell_exec('stty size 2>/dev/null'));
            if (isset($size[1])) {
                return (int) $size[1];
            }
        }

        return 80;
    }

    public static function getSplitStrategy($divide, $width = null)
    {
        if (!$width) {
            $width = self::getWidth();
        }

        return (int) ($width / $divide);
    }

    public static function clear()
    {
        if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
            echo "\033c";
            system('cls');

            return;
        }

        system('clear');
    }
}
