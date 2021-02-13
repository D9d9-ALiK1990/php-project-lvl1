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
        $result = 'no';

        //Генерируемое число
        $expression = random_int(1, 100);

        if ($expression % 2 === 0) {
            $result = 'yes';
        }

        line("Question $expression");
        $answer = prompt("Your answer");
        if ($answer !== $result) {
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
        line("Question $expression");
        $answer = prompt("Your answer");
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

        line("Question $expression");
        $answer = prompt("Your answer");
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

function progression()
{
    $name = greeting();

    //Количество правильных ответов
    $correct = 0;

    line('What number is missing in the progression?');
    while ($correct < 3) {
        //Генерируемое выражение
        $length = random_int(5, 10);
        $step = random_int(1, 10);
        $start = random_int(1, 25);

        //Задаем массив прогрессии
        $arr = [];
        $i = 0;
        while ($i < $length) {
            $arr[] = $start;
            $start = $start + $step;
            $i++;
        }
        $x = array_rand($arr);
        $result = $arr[$x];
        $arr[$x] = '..';
        $expression = '';
        foreach ($arr as $value) {
            $expression = $expression . ' ' . $value;
        }

        line("Question $expression");
        $answer = prompt("Your answer");
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

function prime()
{
    $name = greeting();

    //Количество правильных ответов
    $correct = 0;

    line('Answer "yes" if given number is prime. Otherwise answer "no".');
    while ($correct < 3) {
        //Генерируемое выражение
        $result = 'yes';
        $expression = random_int(1, 100);
        if (gmp_prob_prime($expression) === 0) {
            $result = 'no';
        }

        line("Question $expression");
        $answer = prompt("Your answer");
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
