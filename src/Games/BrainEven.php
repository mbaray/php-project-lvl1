<?php

namespace Brain\Games\BrainEven;

function getDescription(): string
{
    return 'Answer "yes" if the number is even, otherwise answer "no".';
}

function getRoundData(): array
{
    $question = rand(0, 100);
    return [$question, ($question % 2 === 0) ? 'yes' : 'no'];
}
