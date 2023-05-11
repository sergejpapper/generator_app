<?php

namespace App;

class ArrayGenerator {

    /** @var int */
    private int $stringLength;

    /** @var int */
    private int $arrayLength;

    public function __construct(
        $stringLength,
        $arrayLength
    )
    {
        $this->stringLength = $stringLength;
        $this->arrayLength = $arrayLength;
    }

    public function generateArray(): array
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $string = '';
        $array = [];

        for ($j = 0; $j < $this->arrayLength; $j++) {
            for ($i = 0; $i < $this->stringLength; $i++) {
                $string .= $characters[mt_rand(0, strlen($characters) - 1)];
            }

            $array[] = $string;
        }

        return $array;
    }
}