<?php

function checkNumberOfArguments()
{
    if (count($_GET) != 1) {
        header("Status: 400");
        throw new Exception("Incorrect number of arguments! \n");
    }
    if (!isset($_GET["word"])) {
        header("Status: 400");
        throw new Exception("Argument is wrong");
    }
    return true;
}

function findTranslate()
{
    $dictionary = [
        "Keyboard" => "Клавиатура",
        "Cat" => "Кошка",
        "Head" => "Голова"
    ];
    $translatedWord = $_GET["word"];

    $translate = array_search($translatedWord, $dictionary);
    if (!isset($dictionary[$translatedWord])) {
        header("Status: 404");
        throw new Exception("Word '" . $translatedWord . "' is not in the dictionary");
    }
    if (isset($dictionary[$translatedWord])) {
        echo $dictionary[$translatedWord];
    } else {
        echo $translate;
    }
}

try {
    if (checkNumberOfArguments()) {
        findTranslate();
    }
} catch (Exception $e) {
    echo($e->getMessage());
}