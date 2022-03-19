<?php

namespace Brain\Games\BrainCalc;

function getDescription(): string
{
    return 'What is the result of the expression?';
}

function getRoundData(): array
{
    $firstNumber = rand(0, 50);
    $secondNumber = rand(0, 50);

    $operator = substr(str_shuffle('+-*'), 0, 1);
    $question = $firstNumber . ' ' . $operator . ' ' . $secondNumber;

    $correctAnswer = '';
    switch ($operator) {
        case ('+'):
            $correctAnswer = $firstNumber + $secondNumber;
            break;
        case ('-'):
            $correctAnswer = $firstNumber - $secondNumber;
            break;
        case ('*'):
            $correctAnswer = $firstNumber * $secondNumber;
            break;
    }

    return [$question, $correctAnswer];
}
