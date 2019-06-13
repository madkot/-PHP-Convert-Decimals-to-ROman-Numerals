<?php

// Original version from: https://stackoverflow.com/questions/6265596/how-to-convert-a-roman-numeral-to-integer-in-php


function roman($N)
{
    $c = 'IVXLCDM';
    for ($a = 5, $b = 0, $s = ''; $N; $b++, $a ^= 7)
    {
        for (
            $o = $N % $a, $N = $N / $a ^ 0;

            $o--;

            $s = $c[$o > 2 ? $b + $N - ($N &= -2) + $o = 1 : $b] . $s
        );
    }
    return $s;
}

echo roman(111); //will return CXI
