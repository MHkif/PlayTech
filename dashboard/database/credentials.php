<?php

$db_host = "localhost";
$db_user = "root";
$db_pass= "";
$db_name = "playtech";



$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if ($connection ->connect_error) {
    die("Connection failed: " . $connection->connect_error);
  }