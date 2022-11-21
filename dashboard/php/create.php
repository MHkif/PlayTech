<?php
/* Inclure le fichier connect */
require_once "connect.php";
if (isset($_POST['sub'])) {
    $title = $_POST['title'];
    $prix = $_POST['prix'];
    $qte = $_POST['quantite'];
    $id_cat = $_POST['id_cat'];
    try {
        $sql = "INSERT INTO `produits`(`id_prod`, `title`, `prix`, `quantite`, `id_cat`) VALUES (null,'$title',$prix,$qte,$id_cat)";
        $res = $data->prepare($sql);
        $res->execute();
        header("location: dashboard1.php");
        exit();
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}
?>


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
                    <h2 class="mt-5">ajouter un produit</h2>
                    <p>Remplir leS CHAMPS </p>

                    <form action="" method="post">
                        <div class="form-group">
                            <label>title</label>
                            <input type="text" name="title" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label>prix</label>
                            <input type="number" name="prix" class="form-control ">

                        </div>
                        <div class="form-group">
                            <label>quantite</label>
                            <input type="number" name="quantite" class="form-control">

                        </div>
                        <div class="form-group">
                            <select name="id_cat" id="">
                                <?php
                                $sql1 = "SELECT * FROM `categories`";
                                $res1 = $data->prepare($sql1);
                                $res1->execute();
                                $row = $res1->fetchAll(); ?>
                                <option value="" selected disabled>choose cate</option>

                                <?php

                                foreach ($row as $key) { ?>


                                    <option value="<?php echo $key['id_cat'] ?>"><?php echo $key['categorie'] ?></option>

                                <?php } ?>

                            </select>
                        </div>

                        <!-- <div class="form-group">
                            <label>id categorie</label>
                            <input type="number" name="id_cat" class="form-control">
                        </div> -->
                        <input type="submit" class="btn btn-primary" name="sub" value="Enregistrer">
                        <a href="dashboard1.php" class="btn btn-secondary ml-2">Annuler</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</body>

</html>