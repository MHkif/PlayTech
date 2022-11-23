<?php session_start(); ?>

<?php include "../includes/admin_header.php"; ?>

<?php
$_SESSION['email'] = null;
$_SESSION['username'] = null;
$_SESSION['password'] = null;

header("location: index.php");
?>