<?php
header('Content-Type: text/html');

require_once "include/string.inc.php";
try {
    if (!isset($_GET["string"])) {
        throw new Exception("Argument is not exist");
    }
    echo reverse(($_GET["string"]));
} catch (Exception $e) {
    echo $e->getMessage();
}