<?php

namespace Brain\Games\BrainEven;

function questionBrainEven()
{
    return rand(0, 100);
}

function answerBrainEven($question)
{
    return ($question % 2 === 0) ? 'yes' : 'no';
}
