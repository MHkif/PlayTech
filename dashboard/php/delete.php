<?php
/* Inclure le fichier connect */
require_once "connect.php";
 $id=$_GET['id'];
 $sql= "DELETE FROM `produits` WHERE `produits`.`id_prod`= '$id'";
 $req=$data->prepare($sql);
 $req->execute();
  header("Location: dashboard1.php")
?>