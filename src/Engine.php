<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;

function run(string $gameName): void
{
    $name = welcome();

    for ($i = 0, $questionsCount = 3; $i < $questionsCount; $i++) {
        /** @var callable $getDescription */
        $getDescription = "\\Brain\\Games\\{$gameName}\\getDescription";
        line($getDescription());

        /** @var callable $getRoundData */
        $getRoundData = "\\Brain\\Games\\{$gameName}\\getRoundData";
        [$question, $correctAnswer] = $getRoundData();

        line("Question: {$question}");
        $answer = prompt('Your answer');

        if ((string)$correctAnswer === $answer) {
            line('Correct!');
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
