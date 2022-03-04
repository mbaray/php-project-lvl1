<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;
use function Brain\Games\BrainEven\questionBrainEven;
use function Brain\Games\BrainEven\answerBrainEven;
use function Brain\Games\BrainCalc\questionBrainCalc;
use function Brain\Games\BrainCalc\answerBrainCalc;
use function Brain\Games\BrainGcd\questionBrainGcd;
use function Brain\Games\BrainGcd\answerBrainGcd;
use function Brain\Games\BraiProgression\questionBrainProgression;
use function Brain\Games\BraiProgression\answerBrainProgression;
use function Brain\Games\BraiPrime\questionBraiPrime;
use function Brain\Games\BraiPrime\answerBrainBraiPrime;

function checkGame(string $task, string $name, string $gameName)
{
    line($task);

    $i = 0;
    $questionsCount = 3;

    while ($i < $questionsCount) {
        $question = gameQuestion($gameName);
        $correctAnswer = gameCorrectAnswer($gameName, $question);

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

function gameQuestion(string $gameName)
{
    switch ($gameName) {
        case ('brain-even'):
            return questionBrainEven();
        case ('brain-calc'):
            return questionBrainCalc();
        case ('brain-gcd'):
            return questionBrainGcd();
        case ('brain-progression'):
            return questionBrainProgression();
        case ('brain-prime'):
            return questionBraiPrime();
    }
}

function gameCorrectAnswer(string $gameName, string $question)
{
    switch ($gameName) {
        case ('brain-even'):
            return answerBrainEven($question);
        case ('brain-calc'):
            return answerBrainCalc($question);
        case ('brain-gcd'):
            return answerBrainGcd($question);
        case ('brain-progression'):
            return answerBrainProgression($question);
        case ('brain-prime'):
            return answerBrainBraiPrime($question);
    }
}
