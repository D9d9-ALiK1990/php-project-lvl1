<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;

require __DIR__ . '/../vendor/autoload.php';

$games = ['even', 'calc'];

line('List of games:');
foreach ($games as $value){
    line("$value");
}
$game = prompt('Choose a game?');
if(!in_array($game, $games)) {
    line('incorrect game name!');
    exit;
}

//$fail = '/Games/brain-' . $game . 'php';

require __DIR__ . '/Games/brain-' . $game . '.php';

// Приветствие
line('Welcome to the Brain Game!');
$name = prompt('May I have your name?');
line("Hello, $name!");

//Количество правильных ответов
$correct = 0;

//Вопрос
line("$question");

while ($correct < 3) {

    //Получаем пару вопрос-ответ
    $arr = ask();
    $expression = $arr[0];
    $result = $arr[1];

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





