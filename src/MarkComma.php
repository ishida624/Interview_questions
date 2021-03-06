<?php

namespace App;


class MarkComma
{
    public function MarkComma($int)
    {
        if (gettype($int) == 'integer') {
            $string = (string)$int;
            $i = -3;
            $s = 0;
            for ($stringLong = strlen($string); $stringLong > 3; $stringLong = $stringLong - 3) {
                $mark = $i + $s;
                $string = substr_replace($string, ',', $mark, 0);
                $i = $i - 3;
                $s--;
            }
            return $string;
        } elseif (gettype($int) == 'double') {
            $string = explode('.', (string)$int);
            $i = -3;
            $s = 0;
            for ($stringLong = strlen($string[0]); $stringLong > 3; $stringLong = $stringLong - 3) {
                $mark = $i + $s;
                $string[0] = substr_replace($string[0], ',', $mark, 0);
                $i = $i - 3;
                $s--;
            }
            return $string[0] . '.' . $string[1];
        } else {
            return 'type is wrong';
        }
    }
}

$markComma = new MarkComma;
$ans = $markComma->MarkComma(1260000000);
var_dump($ans);
