<?php include "../database/credentials.php"; ?>
<?php include "../database/auth.php"; ?>
<?php include "../database/functions.php"; ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- CSS -->
  <link rel="stylesheet" href="../StyleCss/home.css" />

  <!-- SCSS -->
  <link rel="stylesheet" href="../css/homeScss.css" />
  <!-- RESPONSIVE -->
  <!-- <link rel="stylesheet" href="../responsive/home.css" /> -->

  <!-- Bootstrap Links -->
  <link rel="stylesheet" href="../css/bootstrap.min.css" />
  <link rel="stylesheet" href="../css/all.min.css" />

  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  <!-- Remix icons -->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
  <title>Play Tech</title>
</head>

<body>

  <!--  -->

  <section class="hero shadow bg-black">
    <div class="main-width">
      <!-- Navbar  -->
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark px-2">
        <div class="container-fluid">
          <a href="#" class="navbar-brand">
            <img src="../assets/imgs/logo.png" alt="Logo image" width="60" class="d-inline-block" />
            <span class="">
              PlayTech 
              
              <small style="font-size: 10px;"> 
              <?php 
              if($_SESSION["username"] ){
                echo $_SESSION['username']; 
              }
                ?></small> </span>
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
                <a href="gallery.php" class="nav-link mx-4">Gallery</a>
              </li>
              <li>
                <a href="./dashboard.php" class="nav-link mx-4">Dashboard</a>
              </li>
              <li>
                <a href="./contact.php" class="nav-link  mx-4">Contact us</a>
              </li>

              <button class="btn btn-primary" value="Logout">
                <a href="logout.php" class="text-white text-decoration-none">Logout</a>
              </button>

            </ul>
          </div>
        </div>
      </nav>
    </div>
    <div class="content">
      <div class="main-text">
        <h6>#1 Trending</h6>
        <h1>PS5</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam
          laborum ea, deleniti, similique dolores nobis quibusdam voluptate
          debitis iure, exercitationem nisi vel quos! Rerum nemo eum eius
          cum quasi? Quod!
        </p>
        <a href="./gallery.html">Order Now <i class="ri-arrow-right-s-line"></i></a>
      </div>

      <div class="image">
        <img src="../assets/imgs/ps5.png" />
      </div>
    </div>
    </div>
  </section>
  <!-- Ctegories -->
  <div class="container-fluid p-5">
    <h2 class="my-4">Our Categories</h2>
    <div class="row gy-4 px-1 py-2">
      <div class="col">
        <div class="card border-0 text-center">
          <a href="" id="cate">
            <div class="card shadow rounded-4">
              <img src="../assets/imgs/gamming_acces.jpg" class="card-img p-4" alt="..." />
            </div>
            <div class="card-body">
              <h5 class="card-title">Accessories</h5>

            </div>
          </a>

        </div>
      </div>
      <div class="col">
        <div class="card border-0 text-center">
          <a href="" id="cate">
            <div class="card shadow rounded-4">
              <img src="../assets/imgs/ps5-ds.jpg" class="card-img p-4" alt="..." />
            </div>
            <div class="card-body text-center">
              <h5 class="card-title">Consoles</h5>

              <!-- <a href="#" class="btn btn-primary">Go</a> -->
            </div>
          </a>
        </div>
      </div>

      <div class="col">
        <div class="card border-0 text-center">
          <a href="" id="cate">
            <div class="card shadow rounded-4">
              <img src="../assets/imgs/lp.png" class="card-img p-4" alt="..." />
            </div>
            <div class="card-body">
              <h5 class="card-title">Laptops</h5>

              <!-- <a href="#" class="btn btn-primary">Go</a> -->
            </div>
          </a>
        </div>
      </div>

      <div class="col">
        <div class="card border-0 text-center">
          <a href="" id="cate">
            <div class="card shadow rounded-4">
              <img src="../assets/imgs/phones.png" class="card-img p-4" alt="..." />
            </div>

            <div class="card-body">
              <h5 class="card-title">Desktops</h5>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- Recommended -->
  <div class="container mb-5">
    <h2 class="mb-5">Recommended</h2>
    <div class="row">
      <div class="col-4">
        <div class="card p-3">
          <div class="row g-1">
            <div class="col-md-5">
              <img src="../../livrable n°3/assets/imgs/ps5-ds-removebg-preview.png" class="img-fluid rounded-start" alt="..." />
            </div>
            <div class="col-md-7">
              <div class="card-body">
                <h5 class="card-title">Saga Gensesis Controller</h5>
                <p class="card-text">149.99 MAD</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card p-3">
          <div class="row g-1">
            <div class="col-md-5">
              <img class="img-fluid rounded-start" src="../../livrable n°3/assets/imgs/ac-sl1500-removebg-preview.png" alt="..." />
            </div>
            <div class="col-md-7">
              <div class="card-body">
                <h5 class="card-title">HP OMEN 15 RTX 3070</h5>
                <p class="card-text">1949.99 MAD</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card p-3">
          <div class="row g-1">
            <div class="col-md-5">
              <img src="../../livrable n°3/assets/imgs/ps5-ds-removebg-preview.png" class="img-fluid rounded-start" alt="..." />
            </div>
            <div class="col-md-7">
              <div class="card-body">
                <h5 class="card-title">Saga Gensesis Controller</h5>
                <p class="card-text">149.99 MAD</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Post Card -->

  <section class="">
    <div class="container py-2">
      <div class="h1 text-center text-dark" id="pageHeaderTitle">
        Special Products
      </div>
      <!--  -->
      <article class="postcard light blue">
        <a class="postcard__img_link" href="#">
          <img class="postcard__img" src="../../livrable n°3/assets/imgs/ps5-ds-removebg-preview.png" alt="Image Title" />
        </a>
        <div class="postcard__text t-dark">
          <h1 class="postcard__title blue"><a href="#">PlayStaion 5</a></h1>

          <div class="postcard__bar"></div>
          <div class="postcard__preview-txt">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi,
            fugiat asperiores inventore beatae accusamus odit minima enim,
            commodi quia, doloribus eius! Ducimus nemo accusantium maiores
            velit corrupti tempora reiciendis molestiae repellat vero.

          </div>
          <ul class="postcard__tagbox ">

            <button type="button" class="btn btn-dark rounded-5">
              Buy now
            </button>
          </ul>
        </div>
      </article>
      <!--  -->
      <article class="postcard light red">
        <a class="postcard__img_link" href="#">
          <img class="postcard__img" src="../../livrable n°3/assets/imgs/ac-sl1500-removebg-preview.png" alt="Image Title" />
        </a>
        <div class="postcard__text t-dark">
          <h1 class="postcard__title red"><a href="#" class="text-decoration-none">Acer Laptop</a></h1>

          <div class="postcard__bar"></div>
          <div class="postcard__preview-txt">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi,
            fugiat asperiores inventore beatae accusamus odit minima enim,
            commodi quia, doloribus eius! Ducimus nemo accusantium maiores
            velit corrupti tempora reiciendis molestiae repellat vero.
          </div>

          <ul class="postcard__tagbox ">

            <button type="button" class="btn btn-dark rounded-5">
              Buy now
            </button>
          </ul>
        </div>
      </article>
      <!--  -->
      <article class="postcard light green">
        <a class="postcard__img_link" href="#">
          <img class="postcard__img" src="../../livrable n°3/assets/imgs/ps1-removebg-preview.png" alt="Image Title" />
        </a>
        <div class="postcard__text t-dark">
          <h1 class="postcard__title green"><a href="#" class="text-decoration-none">Classic PlayStaion 1</a></h1>

          <div class="postcard__bar"></div>
          <div class="postcard__preview-txt">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi,
            fugiat asperiores inventore beatae accusamus odit minima enim,
            commodi quia, doloribus eius! Ducimus nemo accusantium maiores
            velit corrupti tempora reiciendis molestiae repellat vero.
          </div>
          <ul class="postcard__tagbox ">

            <button type="button" class="btn btn-dark rounded-5">
              Buy now
            </button>
          </ul>
        </div>
      </article>

    </div>
  </section>
  <section
    class="footer justify-content-center  "
    style="background: linear-gradient(
    110.6deg,
    rgb(156, 116, 129) -18.3%,
    rgb(67, 54, 74) 16.4%,
    rgb(47, 48, 67) 68.2%,
    rgb(27, 23, 36) 99.1%
  ) !important;"
    id="FOOTER"

  >
    <hr />
    <div class="container d-none d-md-block">
      <div class="row justify-content-between pb-4">
        <div class="col-md-4">
          <div class="">
            <h4 class="mt-5 mb-3 fw-semibold text-white">Contact</h4>
            <p class="text-decoration-none" style="color: rgb(219, 219, 219)">
              <strong class="d-inline-block" style="color: #c0bfbf"
                >Address &nbsp; &nbsp;:</strong
              >
              &nbsp; Youcode Safi , Avenue Zraktouni Safi, Morocco
            </p>
            <p class="text-decoration-none" style="color: rgb(219, 219, 219)">
              <strong class="d-inline-block" style="color: #adadad"
                >Phone&nbsp; &nbsp;:</strong
              >
              &nbsp; 0670018116
            </p>
            <p class="text-decoration-none" style="color: rgb(219, 219, 219)">
              <strong class="d-inline-block" style="color: #c0bfbf"
                >Working hours&nbsp; &nbsp; :</strong
              >&nbsp; 10:00 - 18:00, Mon - Sat
            </p>
          </div>
        </div>
        <div class="col-md-3">
          <h5 class="mt-5 mb-3 fw-semibold text-white">Categories</h5>
          <ul class="card-footer list-unstyled">
            <li>
              <a
                class="text-decoration-none"
                style="color: rgb(219, 219, 219)"
                href="#"
              >
                <span>Accessories</span>
              </a>
            </li>
         
            <li>
              <a
                class="text-decoration-none"
                style="color: rgb(219, 219, 219)"
                href="#"
              >
                <span>Desktop</span>
              </a>
            </li>
            <li>
              <a
                class="text-decoration-none"
                style="color: rgb(219, 219, 219)"
                href="#"
              >
                <span>Laptop</span>
              </a>
            </li>
            <li>
              <a
                class="text-decoration-none"
                style="color: rgb(219, 219, 219)"
                href="#"
              >
                <span>Consoles</span>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5 class="mt-5 mb-3 fw-semibold text-white">Information</h5>
          <ul class="card-footer list-unstyled">
            <li>
              <a
                class="text-decoration-none"
                style="color: rgb(219, 219, 219)"
                href="#"
              >
                <span>Contact Us</span>
              </a>
            </li>
           
            <li>
              <a
                class="text-decoration-none"
                style="color: rgb(219, 219, 219)"
                href="#"
              >
                <span>Terms &amp; Conditions</span>
              </a>
            </li>
            <li>
              <a
                class="text-decoration-none"
                style="color: rgb(219, 219, 219)"
                href="#"
              >
                <span>Returns &amp; Exchanges</span>
              </a>
            </li>

            <li>
              <a
                class="text-decoration-none"
                style="color: rgb(219, 219, 219)"
                href="#"
              >
                <span>Privacy Policy</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container p-4 d-none d-md-block">
      <!-- Section: Images -->
      <section class="">
        <div class="row justify-content-center">
          <div class="col-10 col-md-2 mb-4 mb-md-0">
            <div
              class="bg-image hover-overlay ripple shadow-1-strong rounded"
              data-ripple-color="light"
            >
              <img
                src="./../assets/imgs/img1.jpg"
                class="w-100 h-100"
              />
              <a href="#!">
                <div
                  class="mask"
                  style="background-color: rgba(251, 251, 251, 0.016);"
                ></div>
              </a>
            </div>
          </div>
          <div class="col-10 col-md-2 mb-4 mb-md-0">
            <div
              class="bg-image hover-overlay ripple shadow-1-strong rounded"
              data-ripple-color="light"
            >
              <img
                src="./../assets/imgs/imgbg 2.jpg"
                class="w-100  h-100"
              />
            
            </div>
          </div>
          <div class="col-10 col-md-2 mb-4 mb-md-0">
            <div
              class="bg-image hover-overlay ripple shadow-1-strong rounded"
              data-ripple-color="light"
            >
              <img
                src="./../assets/imgs/imgbg 3.jpg"
                class="w-100  h-100"
              />
          
            </div>
          </div>
          <div class="col-10 col-md-2 mb-4 mb-md-0">
            <div
              class="bg-image hover-overlay ripple shadow-1-strong rounded"
              data-ripple-color="light"
            >
              <img
                src="./../assets/imgs/imgbg 4.jpg"
                class="w-100  h-100"
              />

            </div>
          </div>
        </div>
      </section>
   
    </div>
    <section class="mb-4 text-center ">
      <!-- Facebook -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-facebook-f" style="color: rgb(26, 25, 25);"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-twitter"style="color: rgb(26, 25, 25);"></i
      ></a>

      <!-- Google -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-google "style="color: rgb(26, 25, 25);"></i
      ></a>
    </section>
  
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
    </div>

  </section>

  <!-- JS SCRIPTS -->
  <!-- <script src="../ScriptJs/main.js"></script> -->

  <script src="../../livrable n°3/js/bootstrap.bundle.min.js"></script>
  <script src="../../livrable n°3/js/all.min.js"></script>

</body>

</html>