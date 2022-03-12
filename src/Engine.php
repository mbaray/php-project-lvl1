<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;

function checkGame(string $task, string $name, string $gameName)
{
    line($task);
    $function = "\\Brain\\Games\\{$gameName}\\taskGenerating";
    $question = '';
    $correctAnswer = '';
    if (function_exists($function)) {
        [$question, $correctAnswer] = $function();
    }

    $i = 0;
    $questionsCount = 3;

    while ($i < $questionsCount) {
        line("Question: {$question}");
        $answer = prompt('Your answer');

        if ($correctAnswer == $answer) {
            line('Correct!');
            $i++;
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.\nLet's try again, {$name}!");
            break;
        }
    }
    if ($i == $questionsCount) {
        line("Congratulations, {$name}!");
    }
}
