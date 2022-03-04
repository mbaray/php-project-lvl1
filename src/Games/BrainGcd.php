<?php

namespace Brain\Games\BrainGcd;

function questionBrainGcd()
{
    return rand(0, 100) . " " . rand(0, 100);
}

function gcd(int $firstNumber, int $secondNumber)
{
    while (true) {
        if ($firstNumber === $secondNumber) {
            return $secondNumber;
        }
        $firstNumber > $secondNumber ? $firstNumber -= $secondNumber : $secondNumber -= $firstNumber;
    }
}

function answerBrainGcd(string $question)
{
    $numbers = explode(" ", $question);
    [$firstNumber, $secondNumber] = $numbers;
    return gcd((int)$firstNumber, (int)$secondNumber);
}
