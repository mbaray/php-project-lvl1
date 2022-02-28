<?php

namespace Brain\Games\BrainGcd;

function questionBrainGcd()
{
    return rand(0, 100) . " " . rand(0, 100);
}

function gcd(int $firstNumber, int $secondNumber)
{
    while (true) {
        if ($firstNumber == $secondNumber) {
            return $secondNumber;
        }
        $firstNumber > $secondNumber ? $firstNumber -= $secondNumber : $secondNumber -= $firstNumber;
    }
}

function answerBrainGcd(string $question)
{
    $numbers = explode(" ", $question);
    return gcd((int)$numbers[0], (int)$numbers[1]);
}
