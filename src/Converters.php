<?php

namespace App;

class Converters {
    public function stringConverter(String $string): string
    {
        $array = str_split($string);
        $modifiedString = '';

        for ($i = 0, $length = count($array); $i < $length; $i++) {
            $number = ord(strtolower($array[$i])) - 96;

            $modifiedString = $modifiedString . $number;
        }

        return $modifiedString;
    }

    public function rotConverter(String $string): string
    {
        return str_rot13($string);
    }
}