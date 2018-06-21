<?php

$db = null;

function connect()
{
    global $db;

    $host = 'localhost';
    $dbname = 'loftschool';
    $user = 'root';
    $password = '';

    if ($db === null) {
        $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $db->exec("SET CHARACTER SET utf8");
    }

    return $db;
}