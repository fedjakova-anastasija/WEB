<?php
header('Content-Type: text/html');

function checkNumberOfArguments()
{
    if (count($_GET) != 1) {
        throw new Exception("Incorrect number of arguments! \n");
    }
    if (!isset($_GET["numbers"])) {
        throw new Exception("Argument is wrong");
    }
    return true;
}

function bubbleSort(&$array)
{
    $countOfNumbers = count($array) - 1;
    for ($i = 0; $i < $countOfNumbers; ++$i) {
        for ($j = 0; $j < ($countOfNumbers - $i); ++$j) {
            if ($array[$j] > $array[$j + 1]) {
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
}

try {
    if (checkNumberOfArguments()) {
        if ($_GET["numbers"] == "") {
            throw new Exception("Argument is empty");
        }

        $numbers = explode(",", $_GET["numbers"]);
        foreach ($numbers as $key) {
            if (!is_numeric($key)) {
                return false;
            }
        }
        bubbleSort($numbers);
        $sortedNumbers = implode(",", $numbers);
        echo $sortedNumbers;
    }
} catch (Exception $e) {
    header("Status: 400");
    echo($e->getMessage());
}