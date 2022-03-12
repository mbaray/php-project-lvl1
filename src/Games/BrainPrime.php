<?php

namespace Brain\Games\BraiPrime;

function task(): string
{
    return 'Answer "yes" if given number is prime. Otherwise answer "no".';
}

function isPrime(int $number): string
{
    if ($number <= 1) {
        return 'no';
    }

    for ($i = 2; $i <= floor($number / 2); $i++) {
        if ($number % $i === 0) {
            return 'no';
        }
    }
    return 'yes';
}

function taskGenerating(): array
{
    $question = rand(0, 100);
    return [$question, isPrime($question)];
}
