<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;

function checkGame(string $gameName)
{
    $name = welcome();

    $question = '';
    $correctAnswer = '';
    $i = 0;
    $questionsCount = 3;

    while ($i < $questionsCount) {

        /** @var callable $functionTask */
        $functionTask = "\\Brain\\Games\\{$gameName}\\task";
        line($functionTask());

        /** @var callable $function */
        $function = "\\Brain\\Games\\{$gameName}\\taskGenerating";
        [$question, $correctAnswer] = $function();

        line("Question: {$question}");
        $answer = prompt('Your answer');

        if ((string)$correctAnswer === $answer) {
            line('Correct!');
            $i++;
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.\nLet's try again, {$name}!");
            return;
        }
    }
    line("Congratulations, {$name}!");
}

function welcome(): string
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    return $name;
}
