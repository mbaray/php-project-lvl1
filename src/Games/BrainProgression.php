<?php

namespace Brain\Games\BraiProgression;

function taskGenerating()
{
    $difference = rand(0, 10);
    $arr = [];
    $arr[0] = rand(0, 100);
    for ($i = 1; $i < 10; $i++) {
        $arr[$i] = $arr[$i - 1] + $difference;
    }
    $pass = rand(0, 9);
    $correctAnswer = $arr[$pass];
    $arr[$pass] = '..';
    $question = implode(' ', $arr);

    return [$question, $correctAnswer];
}
