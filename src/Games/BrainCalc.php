<?php

namespace Brain\Games\BrainCalc;

function questionBrainCalc()
{
    $operator = substr(str_shuffle('+-*'), 0, 1);
    return rand(0, 50) . " " . $operator . " " . rand(0, 50);
}

function answerBrainCalc(string $question)
{
    return eval("return $question;");
}
