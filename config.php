<?php

try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=routes;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }


if (!isset($_SESSION)) {
	session_start();
}


?>