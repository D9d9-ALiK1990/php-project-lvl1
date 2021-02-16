<?php

function question(): string
{
    return 'Find the greatest common divisor of given numbers.';
}

function ask(): array
{
    $arr = [];
    $number1 = random_int(1, 100);
    $number2 = random_int(1, 100);
    $expression = $number1 . ' ' . $number2;
    if ($number1 < $number2) {
        $nod = $number1;
    } else {
        $nod = $number2;
    }
    $i = $number1 % $nod;
    $j = $number2 % $nod;
    while ($i + $j !== 0) {
        $nod--;
        $i = $number1 % $nod;
        $j = $number2 % $nod;
    }
    $result = $nod;
    //$result = gmp_gcd($number1, $number2);
    $arr[] = $expression;
    $arr[] = $result;
    return $arr;
}
