<?php

namespace Brain\Games\BrainGcd;

function questionBrainGcd()
{
    return rand(0, 100) . " " . rand(0, 100);
}

function gcd($n, $m)
{
    while (true) {
        if ($n == $m) {
            return $m;
        }
        $n > $m ? $n -= $m : $m -= $n;
    }
}

function answerBrainGcd($question)
{
    $numbers = explode(" ", $question);
    return gcd($numbers[0], $numbers[1]);
}
