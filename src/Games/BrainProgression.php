<?php

namespace Brain\Games\BraiProgression;

function questionBrainProgression()
{
    $difference = rand(0, 10);
    $arr = [];
    $arr[0] = rand(0, 100);
    for ($i = 1; $i < 10; $i++) {
        $arr[$i] = $arr[$i - 1] + $difference;
    }
    $arr[rand(0, 10)] = '..';

    return implode(" ", $arr);
}

function answerBrainProgression(string $question)
{
    $arr = explode(" ", $question);
    $pass = array_search('..', $arr, false);
    $difference = $pass <= 1 ? (int)$arr[9] - (int)$arr[8] : (int)$arr[1] - (int)$arr[0];

    return $pass <= 1 ? (int)$arr[$pass + 2] - 2 * $difference : 2 * $difference + (int)$arr[$pass - 2];
}
