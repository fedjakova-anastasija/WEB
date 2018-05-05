<?php

function checkNumberOfArguments($argc)
{
    if ($argc == 1) {
        throw new Exception("No parameters were specified!");
    }
    return true;
}

function printArguments(&$argv, $argc)
{
    $numberOfArguments = $argc - 1;
    echo "Number of arguments: {$numberOfArguments}" . "\n" . "Arguments: ";
    for ($i = 1; $i < $argc; ++$i) {
        echo $i != $argc - 1 ? $argv[$i] . ' ' : $argv[$i];
    }
}

try {
    if (checkNumberOfArguments($argc)) {
        printArguments($argv, $argc);
    }
} catch (Exception $e) {
    echo($e->getMessage());
}