<?php

function question()
{
    return 'Answer "yes" if given number is prime. Otherwise answer "no".';
}

function ask(): array
{
    $arr = [];

    //Генерируемое выражение
    $result = 'yes';
    $expression = random_int(1, 100);
    if (gmp_prob_prime($expression) === 0) {
        $result = 'no';
    }
    $arr[] = $expression;
    $arr[] = $result;
    return $arr;
}
