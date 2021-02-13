<?php

function question()
{
    return 'What is the result of the expression?';
}

function ask(): array
{
    $arr = [];

    $number1 = random_int(1, 100);
    $number2 = random_int(1, 100);
    $arifOperations = ['+', '-', '*'];
    $operation = array_rand($arifOperations);
    $operation = $arifOperations[$operation];
    switch ($operation) {
        case "+":
            $expression = $number1 . '+' . $number2;
            $result = $number1 + $number2;
            break;
        case "-":
            $expression = $number1 . '-' . $number2;
            $result = $number1 - $number2;
            break;
        case "*":
            $expression = $number1 . '*' . $number2;
            $result = $number1 * $number2;
            break;
    }
    $arr[] = $expression;
    $arr[] = $result;
    return $arr;
}
