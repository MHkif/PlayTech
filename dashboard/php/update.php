<?php
require_once "connect.php";
$id = $_GET['id'];
$sql = "SELECT * FROM `produits` WHERE `id_prod`= $id";
$resultat = $data->prepare($sql);
$resultat->execute();
$row = $resultat->fetchAll();
if(isset($_POST['sub'])){
        $title = $_POST['title'];
        $prix = $_POST['prix'];
        $qte = $_POST['quantite'];
        $id_cat = $_POST['id_cat'];

$sql2 = "UPDATE `produits` SET `title`='$title',`prix`='$prix',`quantite`='$qte',`id_cat`='$id_cat'   WHERE `produits`.`id_prod` = $id";
$resultat2 = $data->prepare($sql2);
$resultat2->execute() ;
header("Location: ./dashboard1.php");
}?>




<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <title>Ajouter produit</title>
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="../css/bootstrap.min.css" />
        <link rel="stylesheet" href="../css/all.min.css" />
        <style>
                .wrapper {
                        width: 700px;
                        margin: 0 auto;
                }
        </style>
</head>

<body>
        <div class="wrapper">
                <div class="container-fluid">
                        <div class="row">
                                <div class="col-md-12">
                                        <h2 class="mt-5">modifier un produit</h2>

                                        <form action="" method="post">
                                                <div class="form-group">
                                                        <label>title</label>
                                                        <input type="text" name="title" class="form-control" value="<?php echo $row[0]['title'] ?>">
                                                </div>
                                                <div class="form-group">
                                                        <label>prix</label>
                                                        <input type="number" name="prix" class="form-control" value="<?php echo $row[0]['prix'] ?>">

                                                </div>
                                                <div class="form-group">
                                                        <label>quantite</label>
                                                        <input type="number" name="quantite" class="form-control" value="<?php echo $row[0]['quantite'] ?>">

                                                </div>
                                                <div class="form-group mt-2">
                                                        <select name="id_cat" id="">
                                                                <?php
                                                                $sql1 = "SELECT * FROM `categories`";
                                                                $res1 = $data->prepare($sql1);
                                                                $res1->execute();
                                                                $row1 = $res1->fetchAll(); ?>


                                                                <?php

                                                                foreach ($row1 as $key) {
                                                                        if ($key['id_cat'] == $row[0]['id_cat']) { ?>
                                                                                <option value="<?php echo $key['id_cat'] ?>" selected><?php echo $key['categorie'] ?></option>
                                                                        <?php
                                                                        } else { ?>
                                                                                <option value="<?php echo $key['id_cat'] ?>"><?php echo $key['categorie'] ?></option>
                                                                        <?php   } ?>



                                                                <?php } ?>

                                                        </select>
                                                </div>
                                                <input type="submit" class="btn btn-primary mt-2" name="sub" value="Enregistrer">
                                                <a href="dashboard1.php" class="btn btn-secondary mt-2 ml-2">Annuler</a>
                                        </form>

                                </div>
                        </div>
                </div>
        </div>
</body>

</html>