<?php

namespace Brain\Games\BrainEven;

function taskGenerating()
{
    $question = rand(0, 100);
    return [$question, ($question % 2 === 0) ? 'yes' : 'no'];
}
