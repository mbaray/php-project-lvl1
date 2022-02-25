<?php

namespace Brain\Games\BrainEven;

use function cli\line;
use function cli\prompt;

function questionBrainEven()
{
    line('Answer "yes" if the number is even, otherwise answer "no".');
}

function checkBrainEven(string $name)
{
    $i = 0;
    while ($i !== 3) {
        $randomNumber = rand(0, 100);
        line("Question: {$randomNumber}");
        $answer = prompt('Your answer');
        $correctAnswer = ($randomNumber % 2 === 0) ? 'yes' : 'no';

        if ($correctAnswer === $answer) {
            line('Correct!');
            $i++;
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.\nLet's try again, {$name}!");
            $i = 0;
        }
    }
    line("Congratulations, {$name}!");
}
