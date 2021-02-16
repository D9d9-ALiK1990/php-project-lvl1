<?php

function question(): string
{
    return 'Answer "yes" if given number is prime. Otherwise answer "no".';
}

function ask(): array
{
    $arr = [];

    //Генерируемое выражение
    $result = 'yes';
    $expression = random_int(2, 100);
    $i = $expression;
    while ($i > 2) {
        $i--;
        if ($expression % $i === 0) {
            $result = 'no';
            break;
        }
    }
    $arr[] = $expression;
    $arr[] = $result;
    return $arr;
}
