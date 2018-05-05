<?php
header("Content-type: text/plain");

function checkParams()
{
    if (sizeof(explode('&', $_SERVER['QUERY_STRING'])) != 3) {
        throw new Exception("There should be 3 parameters.");
    }
    return true;
}


try {
    if (checkParams()) {
        echo "Query string = " . "\n" . ($_SERVER['QUERY_STRING']);
    }
} catch (Exception $e) {
    echo($e->getMessage());
}
