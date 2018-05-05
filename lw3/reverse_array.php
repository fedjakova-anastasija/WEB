<?php
header('Content-Type: text/html');

function checkNumberOfArguments()
{
    if (count($_GET) != 1) {
        throw new Exception("Incorrect number of arguments! \n");
    }
    if (!isset($_GET["arr"])) {
        throw new Exception("Argument is wrong");
    }
    return true;
}

function reverseArray(&$array)
{
    for ($i = 0, $j = count($array) - 1; $i <= $j; ++$i, --$j) {
        $temp = $array[$i];
        $array[$i] = $array[$j];
        $array[$j] = $temp;
    }
}

try {
    if (checkNumberOfArguments()) {
        if ($_GET["arr"] == "") {
            throw new Exception("Argument is empty");
        }
        $array = explode(",", $_GET["arr"]);
        reverseArray($array);
        print_r($array);
    }
} catch (Exception $e) {
    header("Status: 400");
    echo($e->getMessage());
}