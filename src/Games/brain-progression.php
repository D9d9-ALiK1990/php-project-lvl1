<?php

function question(): string
{
    return 'What number is missing in the progression?';
}

function ask(): array
{
    $arr = [];

    //Генерируемое выражение
    $length = random_int(5, 10);
    $step = random_int(1, 10);
    $start = random_int(1, 25);
    $arrcur = [];
    $i = 0;
    while ($i < $length) {
        $arrcur[] = $start;
        $start = $start + $step;
        $i++;
    }
    $x = array_rand($arrcur);
    $result = $arrcur[$x];
    $arrcur[$x] = '..';
    $expression = '';
    foreach ($arrcur as $value) {
        $expression = $expression . $value . ' ';
    }
    $arr[] = $expression;
    $arr[] = $result;
    return $arr;
}
