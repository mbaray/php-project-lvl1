<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;
use function Brain\Games\BrainEven\questionBrainEven;
use function Brain\Games\BrainEven\answerBrainEven;
use function Brain\Games\BrainCalc\questionBrainCalc;
use function Brain\Games\BrainCalc\answerBrainCalc;

function gameQuestion($task)
{
    switch ($task) {
        case ('Answer "yes" if the number is even, otherwise answer "no".'):
            return questionBrainEven();
        case ('What is the result of the expression?'):
            return questionBrainCalc();
    }
}

function gameCorrectAnswer($task, $question)
{
    switch ($task) {
        case ('Answer "yes" if the number is even, otherwise answer "no".'):
            return answerBrainEven($question);
        case ('What is the result of the expression?'):
            return answerBrainCalc($question);
    }
}

function checkGame($task, $name)
{
    line($task);

    $i = 0;
    while ($i !== 3) {
        $question = gameQuestion($task);
        $correctAnswer = gameCorrectAnswer($task, $question);

        line("Question: {$question}");
        $answer = prompt('Your answer');

        if ($correctAnswer == $answer) {
            line('Correct!');
            $i++;
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.\nLet's try again, {$name}!");
            $i = 0;
        }
    }
    line("Congratulations, {$name}!");
}
