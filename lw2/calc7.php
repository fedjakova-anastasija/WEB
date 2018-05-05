<?php
function chooseOperation($arg1, $arg2, $operation)
{
    switch ($operation) {
        case 'add':
            echo ($arg1 + $arg2);
            break;
        case 'sub':
            echo ($arg1 - $arg2);
            break;
        case 'mul':
            echo ($arg1 * $arg2);
            break;
        case 'div':
            echo ($arg1 / $arg2);
            break;
    }
}

chooseOperation($_GET['arg1'], $_GET['arg2'], $_GET['operation']);
