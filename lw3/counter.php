<?php
header('Content-Type: text/html');

function checkNumberOfArguments()
{
    if (count($_GET) != 1) {
        throw new Exception("Incorrect number of arguments! \n");
    }
    if (!isset($_GET["string"])) {
        throw new Exception("Argument is wrong");
    }
    return true;
}

function getChars($string)
{
    $caseInsensitiveString = mb_strtolower($string);
    $chars = str_split($caseInsensitiveString);
    $arrOfChars = [];
    foreach ($chars as $value) {
        echo '<p>';
        if (!array_key_exists($value, $arrOfChars)) {
            $arrOfChars[$value] = 1;
        } else
            ++$arrOfChars[$value];

    }
    return $arrOfChars;
}

function printChars($chars)
{
    foreach ($chars as $key => $value) {
        echo '<p>';
        if ($key == " ") {
            echo "' ' (пробел)";
        } else {
            echo $key;
        }
        echo " - " . $value;
    }
}

try {
    if (checkNumberOfArguments()) {
        $string = $_GET["string"];
        printChars(getChars($string));
    }
} catch (Exception $e) {
    header("Status: 400");
    echo($e->getMessage());
}