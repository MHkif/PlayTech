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
    <!-- <link rel="stylesheet" type="text/css" href="../css/dashboard2.css"> -->
    
    <title>PlayTech Dashboard</title>
<style>
    /* ==== FONTS ==== */
@import url("https://fonts.googleapis.com/css2?family=Lexend:wght@300;600&family=Poppins:wght@500;600&family=Roboto:wght@100;300;500;700&family=Ubuntu:wght@300;500&display=swap");

* {
  margin: 0%;
  padding: 0%;
  box-sizing: border-box;
  font-family: "Poppins";
}

:root {
  --blue: #287bff;
  --white: #fff;
  --grey: #f5f5f5;
  --black1: #222;
  --black2: #999;
  --color-default :  #2d2d2d;
  --radial_gradient: radial-gradient(
    circle at 10% 20%,
    rgb(0, 0, 0) 0%,
    rgb(64, 64, 64) 90.2%
  );
}

body{
    min-height: 100vh;
}


.sidebar {
    min-height: 100vh;
  background:var(--color-default);
  width: 60px;
  /* width: 250px; */
  transition: all 1s ease;
  z-index:  20;
  padding: 6px 0;
  position: fixed;
  top:0;
  left:0;
}

.sidebar.open{
    width: 250px;
}

.title{
    display: none;
}
.sidebar.open .title{
    display: flex;
    transition: all 0.3s ease;
}

.sidebar.open .A {
  justify-content: space-between !important;

}

.sidebar.open .nav-link {
    justify-content: flex-start !important;   
}
.sidebar.open .item {
  display: block !important;

}

hr.h-color {
  background: #eee;
}

/* .sidebar li.active a {
  background: #eee !important;
  color: #222 !important;
} */

/* .sidebar li a:hover {
  color: #222 !important;
  background: rgb(188, 187, 187) !important;
} */

/* .sidebar li a {
  color: #fff;
} */

.sidebar li a {
  color: #fff !important;
  transition: all 0.5s ease !important;
  z-index: 12 !important;
  position: relative !important;
}

.sidebar li a::after {
  content: "" !important;
  position: absolute !important;
  width: 100% !important;
  height: 100% !important;
  background: #eee !important;
  transform: scaleX(0) !important;
  border-radius: 5px !important;
  transition: transform 0.3s ease-in-out !important;
  transform-origin: left !important;
  z-index: -2 !important;
}
.sidebar li a:hover::after {
  transform: scaleX(1) !important;
  color: red !important;
}

.home-section{
    position: relative !important;
    min-height : 100vh !important;
    top:0 !important;
    left: 60px !important;
    width: calc(100% - 60px) !important;
    transition: all 0.5s ease !important;
   z-index: 12 !important;
}

/* .side.open ~ .home-section{
left:250px !important;
width: calc(100% - 250px) !important;
} */
</style>
</head>
<body>
    
      <div class="sidebar">
        <div class="header-box px-3 pt-3 pb-4 d-flex justify-content-center A">
          <h1 class="title fs-5">
            <span class="bg-white text-dark rounded shadow px-2">P</span>
            <span class="text-white">layTech</span>
          </h1>
          <!-- <button class="btn-close btn-close-white close-btn d-block"></button> -->
          <!-- <button class="btn-close btn-close-white close-btn"></button> -->
          <a href="#" class="text-decoration-none text-white">
            <i class="ri-menu-2-line" id ="collapse-btn"></i
          ></a>
        
        </div>

        <ul class="nav nav-pills d-flex  flex-column mb-auto justify-content-start">
          <li class=" mx-1 my-1 active">
            <a
              href="#"
              class="nav-link  px-3 py-2 d-flex align-items-center justify-content-center  gap-4"
             aria-current="page"
            >
              <i class="ri-home-5-line fs-5"></i>
              <div class="item d-none">
              Home
              </div>
            </a>
          </li>
          <li class=" mx-1 my-1">
            <a
              href=""
              class="nav-link  px-3 py-2 d-flex align-items-center justify-content-center  gap-4"
              aria-current="page"
            >
              <i class="ri-dashboard-line fs-5"></i>
             <div class="item d-none">
             Dashboard
             </div>
            </a>
          </li>
          <li class=" mx-1 my-1">
            <a
              href="#"
              class="nav-link  px-3 py-2 d-flex align-items-center justify-content-center  gap-4"
               aria-current="page"
            >
              <i class="ri-bar-chart-2-line fs-5"></i>
              <div class="item d-none">
              Statistique
              </div>
            </a>
          </li>
          <li class=" mx-1 my-1">
            <a
              href="#"
              class="nav-link  px-3 py-2 d-flex align-items-center justify-content-center  gap-4"
                 aria-current="page"
            >
              <i class="ri-layout-grid-fill fs-5"></i>
              <div class="item d-none">
              Products
              </div>
            </a>
          </li>
        </ul>

        <ul class="nav nav-pills flex-column mb-auto">
        <li class=" mx-1 my-1">
            <a
              href="#"
              class="nav-link  px-3 py-2 d-flex  align-items-center justify-content-center  gap-4"
                >
              <i class="ri-login-box-line fs-5"></i>
              <div class="item d-none">
              Log out
              </div>
            </a>
          </li>
        </ul>
      </div>
      
      <section id="test" class="home-section">
        <?php include('home.php') ?>
      </section>
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
      window.onload = function (){
        const sidebar = document.querySelector('.sidebar');
        const closeBtn = document.querySelector('#collapse-btn');
        
        closeBtn.addEventListener("click", function(){
          sidebar.classList.toggle("open");
        //   home-section
        let test = document.querySelector('.home-section');
        test.style.left="250px";
        console.log("test");

          menuBtnChange();
        });

        function menuBtnChange(){
          if(sidebar.classList.contains("open")){
           closeBtn.classList.replace("ri-menu-2-line", "ri-menu-3-line"); 
          }else{
            closeBtn.classList.replace( "ri-menu-3-line", "ri-menu-2-line"); 
          }
        }
      }
    </script>

    <!-- <script>
        
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
    </script> -->
    <!-- JS SCRIPTS -->
    <!-- <script src="../ScriptJs/main.js"></script> -->
    <script src="../../js/bootstrap.bundle.min.js"></script>
    <script src="../../js/all.min.js"></script>

  </body>
</html>