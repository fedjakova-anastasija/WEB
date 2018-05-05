<?php
header('Content-Type: text/html');
require_once "include/string.inc.php";
try {
    if (!isset($_GET["identifier"])) {
        throw new Exception("Argument is not exist");
    }
    echo checkIdentifier($_GET["identifier"]);
} catch (Exception $e) {
    echo $e->getMessage();
}