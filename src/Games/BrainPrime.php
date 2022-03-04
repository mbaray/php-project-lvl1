<?php

namespace Brain\Games\BraiPrime;

function questionBraiPrime()
{
    return rand(0, 100);
}

function isPrime(int $number)
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

function answerBrainBraiPrime(string $question)
{
    return isPrime((int)$question);
}
