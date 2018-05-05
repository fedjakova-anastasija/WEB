<?php
function last($str)
{
    $stringLength = strlen($str);
    if ($stringLength == 0) {
        throw new Exception("The string is empty");
    } else {
        return substr($str, $stringLength - 1);
    }
}

function withoutLast($str)
{
    $stringLength = strlen($str);
    if ($stringLength == 0) {
        throw new Exception("The string is empty");
    } else {
        return substr($str, 0, $stringLength - 1);
    }
}

function reverse($str)
{
    $array = preg_split('//', $str, -1, PREG_SPLIT_NO_EMPTY);
    for ($i = 0, $j = count($array) - 1; $i <= $j; ++$i, --$j) {
        $temp = $array[$i];
        $array[$i] = $array[$j];
        $array[$j] = $temp;
    }
    return implode("", $array);
}

function checkIdentifier($str)
{
    if (strlen($str) == 0) {
        return "No. Identifier is empty";
    }
    for ($i = 1; $i < strlen($str); ++$i) {
        if (!IntlChar::isalnum($str[$i])) {
            return "No. There is not letter or digit";
        }
    }
    return "Yes";
}