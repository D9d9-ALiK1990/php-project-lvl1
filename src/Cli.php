<?php

namespace Brain\Games\Cli;

use function cli\line;
use function cli\prompt;

function greeting()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}

function parityCheck()
{
    $name = greeting();

    //Количество правильных ответов
    $correct = 0;

    line('Answer "yes" if the number is even, otherwise answer "no".');
    while ($correct < 3) {
        //Четность числа
        $parity = 'no';

        //Генерируемое число
        $number = random_int(1, 100);

        if ($number % 2 === 0) {
            $parity = 'yes';
        }

        $answer = prompt("Question $number");
        line("Your answer: %s", $answer);
        if ($answer !== $parity) {
            line("'$answer' is wrong answer ;(. Correct answer was '$parity'.");
            line("Let's try again, $name!");
            exit;
        } else {
            line("Correct!");
            $correct++;
        }
    }

    line("Congratulations, $name!");
}

function calc()
{
    $name = greeting();

    //Количество правильных ответов
    $correct = 0;

    line('What is the result of the expression?');
    while ($correct < 3) {

        //Генерируемое выражение
        $number1 = random_int(1, 100);
        $number2 = random_int(1, 100);
        $arr = ['+', '-', '*'];
        $x = array_rand($arr);
        $operation = $arr[$x];
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

        $answer = prompt("Question $expression");
        line("Your answer: %s", $answer);
        if ($answer != $result) {
            line("'$answer' is wrong answer ;(. Correct answer was '$result'.");
            line("Let's try again, $name!");
            exit;
        } else {
            line("Correct!");
            $correct++;
        }
    }

    line("Congratulations, $name!");
}

function gcd()
{
    $name = greeting();

    //Количество правильных ответов
    $correct = 0;

    line('Find the greatest common divisor of given numbers.');
    while ($correct < 3) {

        //Генерируемое выражение
        $number1 = random_int(1, 100);
        $number2 = random_int(1, 100);
        $expression = $number1 . ' ' . $number2;
        $result = gmp_gcd($number1, $number2);

        $answer = prompt("Question $expression");
        line("Your answer: %s", $answer);
        if ($answer != $result) {
            line("'$answer' is wrong answer ;(. Correct answer was '$result'.");
            line("Let's try again, $name!");
            exit;
        } else {
            line("Correct!");
            $correct++;
        }
    }

    line("Congratulations, $name!");
}
