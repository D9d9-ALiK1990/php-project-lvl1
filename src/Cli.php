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
