<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "play_tech";



$dsn = "mysql:host=" . $host . "; dbname=" . $db;
try {
  $data = new PDO($dsn, $user, $password);
} catch (Exception $e) {
  die('Erreur : ' . $e->getMessage());
}
