<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap Links -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../css/all.min.css" />
    <!-- Css -->
   

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <!-- Remix icons -->
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" type="text/css" href="../css/dashboard.css">
    
    <title>PlayTech Dashboard</title>

</head>
<body>
    <div class="main-container d-flex">
      <div class="sidebar" id="side_nav">
        <div class="header-box px-3 pt-3 pb-4 d-flex justify-content-between">
          <h1 class="fs-5">
            <span class="bg-white text-dark rounded shadow px-2">P</span>
            <span class="text-white">layTech</span>
          </h1>
          <button class="btn-close btn-close-white close-btn d-block d-md-none"></button>
          <!-- <button class="btn-close btn-close-white close-btn"></button> -->
        
        </div>

        <ul class="nav nav-pills flex-column mb-auto">
          <li class="mx-3 my-1 active">
            <a
              href="#"
              class="nav-link d-flex align-items-center gap-2"
              aria-current="page"
            >
              <i class="ri-home-5-line fs-5"></i>
              Home
            </a>
          </li>
          <li class="mx-3 my-1">
            <a
              href="#"
              class="nav-link text-white d-flex align-items-center gap-2"
              aria-current="page"
            >
              <i class="ri-dashboard-line fs-5"></i>
              Dashboard
            </a>
          </li>
          <li class="mx-3 my-1">
            <a
              href="#"
              class="nav-link text-white d-flex align-items-center gap-2"
              aria-current="page"
            >
              <i class="ri-bar-chart-2-line fs-5"></i>
              Statistique
            </a>
          </li>
          <li class="mx-3 my-1">
            <a
              href="#"
              class="nav-link text-white d-flex align-items-center gap-2"
              aria-current="page"
            >
              <i class="ri-layout-grid-fill fs-5"></i>
              Products
            </a>
          </li>
        </ul>

        <ul class="nav nav-pills flex-column mb-auto">
          <li class="mx-3 my-1">
            <a
              href="#"
              class="nav-link text-white d-flex align-items-center gap-2"
            >
              <i class="ri-login-box-line fs-5"></i>
              Log out
            </a>
          </li>
        </ul>
      </div>
      <div class="content">
        <!-- <nav class="navbar navbar-expend-lg navbar-light bg-light">
          <div class="container-fluid">
            <div class="d-flex justify-content-between">
              <a href="#" class="navbar-brand"> PlayTech </a>
              <button class="btn px-1 py-0 open-btn">
                <i class="ri-menu-2-line"></i>
              </button>
            </div>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSuppotedContent"
              aria-controls="navbarSuppotedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div
              class="collapse navbar-collapse justify-content-end"
              id="navbarSuppotedContent"
            >
              <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                  <a href="#" class="nav-link active" aria-current="page"
                    >Profile</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </nav> -->
       
      <div>
      <?php include("addProd.php")?>
      </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
      $(".sidebar ul li").on("click", function () {
        $(".sidebar ul li.active").removeClass("active");
        $(this).addClass("active");
      });

      $(".open-btn").on("click", function () {
        $(".sidebar").addClass("active");
      });

      $(".close-btn").on("click", function () {
        $(".sidebar").removeClass("active");
      });
    </script>
    <!-- JS SCRIPTS -->
    <!-- <script src="../ScriptJs/main.js"></script> -->
    <script src="../../js/bootstrap.bundle.min.js"></script>
    <script src="../../js/all.min.js"></script>

    <!-- <script>
      // MenuToggle
      let toggle = document.querySelector(".toggle");
      let navigation = document.querySelector(".navigation");
      let main = document.querySelector(".main");
      toggle.onclick = function () {
        navigation.classList.toggle("active");
      };

      // hover selected class
      let list = document.querySelectorAll(".navigation li");
      function activeLink() {
        list.forEach((item) => item.classList.remove("hovered"));
        this.classList.add("hovered");
      }

      //   list.foreach((item) => item.addEventListener("mouseover", activeLink));
    </script> -->
  </body>
</html>