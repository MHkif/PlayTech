<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CSS -->
    <link rel="stylesheet" href="../StyleCss/home.css" />

    <!-- SCSS -->
    <link rel="stylesheet" href="./../StyleCss/contact.css" />

    <!-- Bootstrap Links -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/all.min.css" />

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <!-- Remix icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"rel="stylesheet"/>
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
          <a href="./home.html" class="nav-link  active  mx-4">Home</a>
        </li>
        <li>
          <a href="./gallery.php" class="nav-link mx-4">Gallery</a>
        </li>
        <li>
          <a href="./contact.php" class="nav-link  mx-4">Contact us</a>
        </li>
   
      </ul>
    </div>
  </div>
</nav>
<!--Contact -->
<div class="container mt-5 ">
    <h1 class="text-center">Contact us</h1>
    <form action="" class="row g-3">
      <div class="col-md-6">
        <label for="firstName" class="form-label">First Name</label>
         <input type="text"  class="form-control"name="" id=""required>
    </div>
    <div class="col-md-6">
        <label for="lastName" class="form-label">Last Name</label>
         <input type="text"  class="form-control"name="" id="" required>
    </div>
    <div class="col-md-12">
        <label for="lastName" class="form-label">Email</label>
         <input type="email" class="form-control"name="" id="" required>
    </div>
    <div class="col-md-12">
        <label for="comments" class="form-label"> comments,questions?</label>
   <textarea name=""class="form-control" id="comments" rows="3"required ></textarea>
    </div>
    <div class="col-md-12">
    <button type="submit" onclick="myFunction()"  class="btn btn-primary">submit</button>
    </div>
    </form>
</div>
<!-- reviews -->
<section>
  <div class="row d-flex justify-content-center">
    <div class="col-md-10 col-xl-8 text-center">
      <h3 class="mb-4">Testimonials</h3>
      <p class="mb-4 pb-2 mb-md-5 pb-md-0">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet
        numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum
        quisquam eum porro a pariatur veniam.
      </p>
    </div>
  </div>

  <div class="row text-center p-4">
    <div class="col-md-4 mb-5 mb-md-0">
      <div class="d-flex justify-content-center mb-4">
        <img src="./../assets/imgs/top 1.jpg"
          class="rounded-circle shadow-1-strong" width="150" height="150" />
      </div>
      <h5 class="mb-3">PewDiePie (Felix Kjellberg)</h5>
      <p class="px-xl-3">
        <i class="fas fa-quote-left pe-2"></i>Lorem ipsum dolor sit amet, consectetur
        adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab hic
        tenetur.
      </p>
      <ul class="list-unstyled d-flex justify-content-center mb-0">
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star-half-alt fa-sm text-warning"></i>
        </li>
      </ul>
    </div>
    <div class="col-md-4 mb-5 mb-md-0">
      <div class="d-flex justify-content-center mb-4">
        <img src="./../assets/imgs/top3.jpg"
          class="rounded-circle shadow-1-strong" width="150" height="150" />
      </div>
      <h5 class="mb-3"> Markiplier (Mark Fischbach)</h5>
      
      <p class="px-xl-3">
        <i class="fas fa-quote-left pe-2"></i>Lorem ipsum dolor sit amet, consectetur
        adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab hic
        tenetur.
      </p>
      <ul class="list-unstyled d-flex justify-content-center mb-0">
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
      </ul>
    </div>
    <div class="col-md-4 mb-0">
      <div class="d-flex justify-content-center mb-4">
        <img src="./../assets/imgs/top2.jpg"
          class="rounded-circle shadow-1-strong" width="150" height="150" />
      </div>
      <h5 class="mb-3"> Ninja (Tyler Blevins)</h5>
      
      <p class="px-xl-3">
        <i class="fas fa-quote-left pe-2"></i>Lorem ipsum dolor sit amet, consectetur
        adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab hic
        tenetur.
      </p>
      <ul class="list-unstyled d-flex justify-content-center mb-0">
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="far fa-star fa-sm text-warning"></i>
        </li>
      </ul>
    </div>
  </div>
</section>
    <!-- FOOTER -->
    <section class="footer justify-content-center"style="background: linear-gradient(  109.6deg,  rgb(43, 1, 91) 40.4%,  rgb(122, 2, 54) 100.2%)" id="FOOTER" >
   
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
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/all.min.js"></script>
    <script>
   function myFunction(){
    alert("we’ll answer your message later please visit your email")}
</script>
  </body>
</html>