<?php

namespace App;

class StringGenerator {

    /** @var int */
    private int $stringLength;

    public function __construct(
        $stringLength
    )
    {
        $this->stringLength = $stringLength;
    }

    public function generateString(): string
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $string = '';

        for ($i = 0; $i < $this->stringLength; $i++) {
            $string .= $characters[mt_rand(0, strlen($characters) - 1)];
        }

        return $string;
    }
}