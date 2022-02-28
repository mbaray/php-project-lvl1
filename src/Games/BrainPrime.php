<?php

namespace Brain\Games\BraiPrime;

function questionBraiPrime()
{
    return rand(0, 100);
}

function is_prime(int $number)
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

function answerBrainBraiPrime($question)
{
    return is_prime((int)$question);
}
