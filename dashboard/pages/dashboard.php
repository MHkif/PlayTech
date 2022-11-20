<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS -->
  <link rel="stylesheet" href="../StyleCss/gallery.css" />
  <!-- Bootstrap Links -->
  <link rel="stylesheet" href="../css/bootstrap.min.css" />
  <link rel="stylesheet" href="../css/all.min.css" />
  <!-- Css -->


  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  <!-- Remix icons -->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="../css/dashboard.css">

  <title>PlayTech Dashboard</title>

</head>

<body>


  <nav class="navbar navbar-expand-lg bg-light text-dark">
    <div class="container-fluid">
      <a href="#" class="navbar-brand">
        <img src="../assets/imgs/logo.png" alt="Logo image" width="60" class="d-inline-block" />
        <span class=""> Dashboard </span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-3 ">

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Products
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="addProd.php">New Product</a></li>
              <li><a class="dropdown-item" href="updateProd.php">Update Product</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-dark" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td colspan="2">Larry the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>
  </div>

  <script src="../js/bootstrap.bundle.min.js"></script>
  <script src="../js/all.min.js"></script>


</body>

</html>