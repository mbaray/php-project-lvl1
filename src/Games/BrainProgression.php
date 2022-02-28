<?php

namespace Brain\Games\BraiProgression;

function questionBrainProgression()
{
    $difference = rand(0, 10);
    $arr[0] = rand(0, 100);
    for ($i = 1; $i < 10; $i++) {
        $arr[$i] = $arr[$i - 1] + $difference;
    }
    $arr[rand(0, 10)] = '..';

    return implode(" ", $arr);
}

function answerBrainProgression($question)
{
    $arr = explode(" ", $question);
    $pass = array_search('..', $arr);
    return $pass <= 1 ? $arr[$pass + 2] - 2 * ($arr[9] - $arr[8]) : 2 * ($arr[1] - $arr[0]) + $arr[$pass - 2];
}
