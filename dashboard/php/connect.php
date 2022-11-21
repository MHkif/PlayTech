<?php
$host="localhost";
$user="root";
$password="";
$db="play_tech";
$msg=false;

try
{
	$data = new PDO('mysql:host=localhost;dbname=play_tech;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>