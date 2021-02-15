<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;
use function cli\out;
use function cli\out_padded;

function play(string $game)
{
    require __DIR__ . '/Games/brain-' . $game . '.php';

// Приветствие
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, $name!");

//Количество правильных ответов
    $correct = 0;

//Вопрос
    $question = question();
    line("$question");

    while ($correct < 3) {
        //Получаем пару вопрос-ответ
        $arr = ask();
        $expression = $arr[0];
        $result = $arr[1];
        if (is_array($expression)) {
            out("Question:");
            foreach ($expression as $value) {
                out(" $value");
            }
            line('');
        }
        else {
            line("Question: $expression");
        }
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
