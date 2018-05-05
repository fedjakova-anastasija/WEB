<?php
function checkNumberOfParams()
{
    if (sizeof(explode('&', $_SERVER['QUERY_STRING'])) != 3) {
        throw new Exception("There should be three parameters.");
    }
    return true;
}

function isNumber()
{
    $arg1 = $_GET['arg1'];
    $arg2 = $_GET['arg2'];
    if (is_numeric($arg1)) {
        if (!is_numeric($arg2)) {
            throw new Exception($arg2 . " is not a number.");
        }
    } else {
        throw new Exception($arg1 . " is not a number.");
    }
    return true;
}

function chooseOperation($arg1, $arg2, $operation)
{
    switch ($operation) {
        case 'add':
            echo $arg1 + $arg2;
            break;
        case 'sub':
            echo $arg1 - $arg2;
            break;
        case 'mul':
            echo $arg1 * $arg2;
            break;
        case 'div':
            if ($arg2 == 0) {
                throw new Exception("It is forbidden to divide by zero.");
            } else {
                echo $arg1 / $arg2;
            }
            break;
        default:
            throw new Exception("The operation is incorrect.");
    }
}

try {
    if (checkNumberOfParams()) {
        if (isset($_GET['arg1']) && isset($_GET['arg2']) && isset($_GET['operation'])) {
            if (isNumber()) {
                chooseOperation($_GET['arg1'], $_GET['arg2'], $_GET['operation']);
            }
        } else {
            throw new Exception("Wrong name of some of parameters.");
        }
    }
} catch (Exception $e) {
    echo($e->getMessage());
}
