<?php

function checkNumberOfArguments($argc)
{
    if ($argc != 2) {
        throw new Exception("Incorrect number of arguments! \n");
    }
    return true;
}

function printNewStringWithoutDuplicates(&$string)
{
    $arr = str_split($string);
    $arrWithoutDuplicates = array_unique($arr);
    return implode($arrWithoutDuplicates);
}
try {
    if (checkNumberOfArguments($argc)) {
        $inputString = $argv[1];
        echo printNewStringWithoutDuplicates($inputString);
    }
} catch (Exception $e) {
    echo($e->getMessage());
    echo "Usage php remove_duplicates.php <input string>";
}