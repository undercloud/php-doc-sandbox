<?php

namespace DarkLordOfBackend;

class Echos
{
    public static function fdwrites($text)
    {
        global $argc;

        if (false === strpos($text, PHP_EOL)) {
            fwrite(STDOUT, $text);
            if ($argc < 2) {
                usleep(5000);
            }

            return;
        }

        foreach (explode(PHP_EOL, $text) as $line) {
            fwrite(STDOUT, $line . PHP_EOL);
            if ($argc < 2) {
                usleep(5000);
            }
        }
    }

    public static function fdwritec($text)
    {
        global $argc;

        foreach (str_split($text) as $char) {
            fwrite(STDOUT, $char);
            if ($argc < 2) {
                usleep(2500);
            }
        }
    }
}
