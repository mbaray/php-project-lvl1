<?php

namespace Brain\Games\BrainGcd;

function gcd(int $firstNumber, int $secondNumber)
{
    while (true) {
        if ($firstNumber == $secondNumber) {
            return $secondNumber;
        }
        $firstNumber > $secondNumber ? $firstNumber -= $secondNumber : $secondNumber -= $firstNumber;
    }
}

function taskGenerating()
{
    $firstNumber = rand(0, 100);
    $secondNumber = rand(0, 100);
    $question = $firstNumber . ' ' . $secondNumber;

    return [$question, gcd($firstNumber, $secondNumber)];
}
