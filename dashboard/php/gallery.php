<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.cdnfonts.com/css/neuropol-x" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="../StyleCss/gallery.css" />
    <!-- RESPONSIVE -->

    
    <!-- Bootstrap Links -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/all.min.css" />

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <!-- Remix icons -->
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />

    <!-- <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    /> -->
    <title>Play Tech</title>
  </head>
  <body>
     <!-- Navbar  -->
 <nav class="navbar fixed-top navbar-expand-lg navbar-dark ">
  <div class="container-fluid">
    <a href="#" class="navbar-brand">
      <img src="../assets/imgs/logo.png"alt="Logo image"width="60"class="d-inline-block"/>
      <span class=""> PlayTech </span>
    </a>
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#toggleMobileMenu"
      aria-controls="toggleMobileMenu"
      aria-label="Toggle navigation"
    >
    <i class="ri-apps-2-line"></i>
    </button>
    <div class="collapse navbar-collapse" id="toggleMobileMenu">
      <ul class="navbar-nav ms-auto text-center">
        <li>
          <a href="./home.php" class="nav-link  mx-4">Home</a>
        </li>
        <li>
          <a href="./gallery.php" class="nav-link active mx-4">Gallery</a>
        </li>
        <li>
          <a href="./contact.php" class="nav-link  mx-4">Contact us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Categories
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Accessories</a>
            <a class="dropdown-item" href="#">Consoles</a>
            <a class="dropdown-item" href="#">Laptops</a>
            <a class="dropdown-item" href="#">Desktops</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <!-- curseur reactif -->
     <div id="carouselExampleCaptions" class="carousel  slide "data-bs-ride="false" >
    
       <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../assets/imgs/bg2slid (1).jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>
              Shop Now
            </h5>
            <p class="d-none d-md-block">
              Some representative placeholder content for the first slide.
            </p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../assets/imgs/ imgbg (1).jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>
              Shop Now
            </h5>
            <p class="d-none d-none d-md-block">
              Some representative placeholder content for the first slide.
            </p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../assets/imgs/ imgbg (2).jpg" class="d-block w-100" alt="...">
           <div class="carousel-caption d-none d-md-block">
            <h5>
              Shop Now
            </h5>
            <p class="d-none d-none d-md-block">
              Some representative placeholder content for the first slide.
            </p>
          </div>
        </div>
      </div>
  
    </div>
      <button class="carousel-control-prev d-none d-md-block"type="button" data-bs-target="#carouselExampleCaptions"data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next d-none d-md-block"
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div> 
    
    <div class="container ">
      <!-- ACCESSORIES -->
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3 justify-content-center justify-content-around p-3">
        <!-- Products -->
        <div class="col" >
          <div class="card shadow-sm border-0" id="card"  >
            <div id="imgp"><img
              src="../assets/accessories/1.png"
              class="card-img-top w-100 h-50"
              alt="..."
              id="img"
            /></div>
            
            <div class="card-body">
             
              <div class="d-flex justify-content-between align-items-center">
                <p class="card-text">Razer Powerup Bundle</p> 
                <small class="text-muted">119.00 MAD</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col" >
          <div class="card shadow-sm border-0" id="card"  >
            <div id="imgp1">
              <img
              src="../assets/accessories/4.png"
              class="card-img-top w-100 h-50"
              alt="..."
              id="img"
            /></div>
            
            <div class="card-body">
             
              <div class="d-flex justify-content-between align-items-center">
                <p class="card-text">Razer Powerup Bundle</p> 
                <small class="text-muted">119.00 MAD</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col" >
          <div class="card shadow-sm border-0" id="card"  >
            <div id="imgp2">
              <img
              src="../assets/accessories/8.png"
              class="card-img-top w-100 h-50"
              alt="..."
              id="img"
            /></div>
            
            <div class="card-body">
             
              <div class="d-flex justify-content-between align-items-center">
                <p class="card-text">Razer Powerup Bundle</p> 
                <small class="text-muted">119.00 MAD</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col" >
          <div class="card shadow-sm border-0" id="card"  >
            <div id="imgp3">
              <img
              src="../assets/accessories/9.png"
              class="card-img-top w-100 h-50"
              alt="..."
              id="img"
            /></div>
            
            <div class="card-body">
             
              <div class="d-flex justify-content-between align-items-center">
                <p class="card-text">Razer Powerup Bundle</p> 
                <small class="text-muted">119.00 MAD</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col" >
          <div class="card shadow-sm border-0" id="card"  >
            <div id="imgp4">
              <img
              src="../assets/laptop/atlas-gaming-asus-rog-strix-g17-a-removebg-preview.png"
              class="card-img-top w-100 h-50"
              alt="..."
              id="img"
            /></div>
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <p class="card-text">Razer Powerup Bundle</p> 
                <small class="text-muted">119.00 MAD</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col" >
          <div class="card shadow-sm border-0" id="card"  >
            <div id="imgp5">
              <img
              src="../assets/laptop/atlas-gaming-msi-gp76-leopard-a-removebg-preview.png"
              class="card-img-top w-100 h-471px"
              alt="..."
              id="img"
            /></div>
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <p class="card-text">Razer Powerup Bundle</p> 
                <small class="text-muted">119.00 MAD</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col" >
          <div class="card shadow-sm border-0" id="card"  >
            <div id="imgp6">
              <img
              src="../assets/laptop/atlas-gaming-msi-pc-portable-gamer-gf66-katana-a-800x800-removebg-preview.png"
              class="card-img-top w-100 h-471px"
              alt="..."
              id="img"
            /></div>
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <p class="card-text">Razer Powerup Bundle</p> 
                <small class="text-muted">119.00 MAD</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col" >
          <div class="card shadow-sm border-0" id="card"  >
            <div id="imgp7">
              <img
              src="../assets/disktop/1 (1).png"
              class="card-img-top w-100 h-50"
              alt="..."
              id="img"
            /></div>
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <p class="card-text">Razer Powerup Bundle</p> 
                <small class="text-muted">119.00 MAD</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col" >
          <div class="card shadow-sm border-0" id="card"  >
            <div id="imgp8">
              <img
              src="../assets/disktop/3.png"
              class="card-img-top w-100 h-50"
              alt="..."
              id="img"
            /></div>
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <p class="card-text">Razer Powerup Bundle</p> 
                <small class="text-muted">119.00 MAD</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col" >
          <div class="card shadow-sm border-0" id="card"  >
            <div id="imgp"><img
              src="../assets/accessories/1.png"
              class="card-img-top w-100 h-50"
              alt="..."
              id="img"
            /></div>
            
            <div class="card-body">
             
              <div class="d-flex justify-content-between align-items-center">
                <p class="card-text">Razer Powerup Bundle</p> 
                <small class="text-muted">119.00 MAD</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col" >
          <div class="card shadow-sm border-0" id="card"  >
            <div id="imgp1">
              <img
              src="../assets/accessories/4.png"
              class="card-img-top w-100 h-50"
              alt="..."
              id="img"
            /></div>
            
            <div class="card-body">
             
              <div class="d-flex justify-content-between align-items-center">
                <p class="card-text">Razer Powerup Bundle</p> 
                <small class="text-muted">119.00 MAD</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col" >
          <div class="card shadow-sm border-0" id="card"  >
            <div id="imgp2">
              <img
              src="../assets/accessories/8.png"
              class="card-img-top w-100 h-50"
              alt="..."
              id="img"
            /></div>
            
            <div class="card-body">
             
              <div class="d-flex justify-content-between align-items-center">
                <p class="card-text">Razer Powerup Bundle</p> 
                <small class="text-muted">119.00 MAD</small>
              </div>
            </div>
          </div>
        </div>
        </div>
      <div class="row  justify-content-between p-3 my-5">
        <div class="col-12 col-md-8 ">
         <video style=" width:100%;border-radius: 10px; box-shadow:  1px 1px 2px rgb(14, 13, 14), 0 0 25px rgba(4, 32, 142, 0.886), 0 0 50px rgba(18, 4, 83, 0.575) ; "   width="50%" height="auto" autoplay muted controls >
        <source src="https://media.direct.playstation.com/is/content/sierialto/dualsense-edge-ps5-controller-features-trailer">
        </video> 
      </div> 
      <div class="col-4 d-none d-md-block  ">
        <h1 class="mx-5 my-5" >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid</h1>
      </div>

      </div> 
      </div>
    </div>
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
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/all.min.js"></script>
  </body>
</html>
