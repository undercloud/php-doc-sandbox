<?php

namespace DarkLordOfBackend;

class Colorizer
{
    public static function bold($str)
    {
        return "\033[1m" . $str . "\033[0m";
    }

    public static function cyan($str)
    {
        return "\033[96m" . $str . "\033[0m";
    }

    public static function magenta($str)
    {
        return "\033[95m" . $str . "\033[0m";
    }

    public static function green($str)
    {
        return "\e[92m" . $str . "\e[0m";
    }

    public static function blue($str)
    {
        return "\e[94m" . $str . "\e[0m";
    }

    public static function orange($str)
    {
        return "\e[93m" . $str . "\e[0m";
    }

    public static function red($str)
    {
        return "\033[91m" . $str . "\033[0m";
    }
}
