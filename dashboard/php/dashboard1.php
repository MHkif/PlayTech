<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- CSS -->
  <link rel="stylesheet" href="./../StyleCss/home.css" />
    <style>
        .wrapper{
            width: 700px;
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 120px;
        }
    </style>
   
</head>
<body>
   <!-- Navbar  -->
   <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
        <div class="container-fluid">
          <a href="#" class="navbar-brand">
            <img src="../../livrable n°3/assets/imgs/logo.png" alt="Logo image" width="60" class="d-inline-block" />
            <span class=""> PlayTech </span>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggleMobileMenu" aria-controls="toggleMobileMenu" aria-label="Toggle navigation">
            <i class="ri-apps-2-line"></i>
          </button>
          <div class="collapse navbar-collapse" id="toggleMobileMenu">
            <ul class="navbar-nav ms-auto text-center">
              <li>
                <a href="home.php" class="nav-link  active  mx-4">
                  Home</a>

              </li>
              <li>
                <a href="./gallery.php" class="nav-link mx-4">Gallery</a>
              </li>
             
              <li>
                <a href="./home.php#contact" class="nav-link  mx-4">Contact us</a>
              </li>

              <a href="./login.php"><button class="btn btn-primary" style=" background-color: #000; border:none;" >Logout</button></a>

            </ul>
          </div>
        </div>
      </nav>
    <div class="wrapper">
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 d-flex justify-content-between">
                        <h2 class="pull-left ">Liste des produits</h2>
                        <a href="create.php" class="btn btn-success bg-dark"><i class="bi bi-plus"></i> Ajouter</a>
                    </div>
                    <?php 
                   /* Inclure fich connect*/
                   require_once "connect.php";
                    
                    /* select query execution */
                    $sql = "SELECT * FROM produits";
                    $res=$data->query($sql);
                    
                        if($res->rowCount() > 0){
                           
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>title</th>";
                                        echo "<th>prix</th>";
                                        echo "<th>quantite</th>";
                                        echo "<th>id_cat</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                    $row=$res->fetchALL();
                                    foreach($row as $key){
                                    echo "<tr>";
                                        echo "<td>" . $key['id_prod'] . "</td>";
                                        echo "<td>" . $key['title'] . "</td>";
                                        echo "<td>" . $key['prix'] . "</td>";
                                        echo "<td>" . $key['quantite'] . "</td>";
                                        echo "<td>" . $key['id_cat'] . "</td>";
                                        echo "<td>";
                                            echo '<a href="update.php?id='. $key['id_prod'] .'" class="me-3" ><span class="bi bi-pencil"></span></a>';
                                            echo '<a href="delete.php?id='. $key['id_prod'] .'" ><span class="bi bi-trash"></span></a>';
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";                            
                        } else{
                            echo '<div class="alert alert-danger"><em>Pas d\'enregistrement</em></div>';
                        }
                   
                    
                    ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>