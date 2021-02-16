<?php

function question(): string
{
    return 'Answer "yes" if the number is even, otherwise answer "no".';
}

function ask(): array
{
    $arr = [];
    $parity = 'no';
    $number = random_int(1, 100);
    $arr[] = $number;
    if ($number % 2 === 0) {
        $parity = 'yes';
    }
    $arr[] = $parity;
    return $arr;
}
