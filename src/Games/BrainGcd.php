<?php

namespace Brain\Games\BrainGcd;

function getDescription(): string
{
    return 'Find the greatest common divisor of given numbers.';
}

function getRoundData(): array
{
    $firstNumber = rand(0, 100);
    $secondNumber = rand(0, 100);
    $question = $firstNumber . ' ' . $secondNumber;

    return [$question, gcd($firstNumber, $secondNumber)];
}

function gcd(int $firstNumber, int $secondNumber): int
{
    while (true) {
        if ($firstNumber === $secondNumber) {
            return $secondNumber;
        }

        if ($firstNumber > $secondNumber) {
            $firstNumber -= $secondNumber;
        } else {
            $secondNumber -= $firstNumber;
        }
    }
}
