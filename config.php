<?php

$user = 'root';
$pass = '';

try {
    $db = new PDO('mysql:host=localhost;dbname=project', $user, $pass);

} catch (PDOException $ex) {
    die("Fail to connect to the database ".$ex->getMessage());
}


if (!isset($_SESSION)) {
	session_start();
}


?>