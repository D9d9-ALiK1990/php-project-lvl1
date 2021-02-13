<?php

function question()
{
    return 'Find the greatest common divisor of given numbers.';
}

function ask(): array
{
    $arr = [];

    $number1 = random_int(1, 100);
    $number2 = random_int(1, 100);
    $expression = $number1 . ' ' . $number2;
    $result = gmp_gcd($number1, $number2);
    $arr[] = $expression;
    $arr[] = $result;
    return $arr;
}
