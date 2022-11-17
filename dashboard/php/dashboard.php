<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap Links -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/all.min.css" />

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
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon"> <i class="ri-gamepad-line"></i></span>
                        <span class="title"> PlayTech</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="ri-home-5-line"></i></span>
                        <span class="title"> Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="ri-discuss-line"></i> </span>
                        <span class="title"> Message</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"> <i class="ri-key-2-line"></i> </span>
                        <span class="title"> password</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"> <i class="ri-settings-4-line"></i> </span>
                        <span class="title"> Setting</span>
                    </a>
                </li>
                
                <li>
                    <a href="#">
                        <span class="icon"><i class="ri-questionnaire-line"></i> </span>
                        <span class="title"> Help</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"> <i class="ri-logout-box-r-line"></i> </span>
                        <span class="title"> Log Out</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Main Pages -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                  <i class="ri-apps-line"></i>
                </div>
               <div class="row">
               <div class="search ">
                    <label>
                        <input type="text" placeholder="Search Here">
                        <i class="ri-search-line"></i>
                    </label>
                </div>
                <!-- user data -->
                <!-- <div class="user">
                    <h2>Hi User</h2>
                </div> -->
               </div>
            </div>
        </div>
    </div>


  <!-- JS SCRIPTS -->
    <!-- <script src="../ScriptJs/main.js"></script> -->
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/all.min.js"></script>

    <script>
        // MenuToggle
        let toggle = document.querySelector('.toggle');
        let navigation = document.querySelector('.navigation');
        let main = document.querySelector(.main);
        toggle.onclick = function(){
            navigation.classList.toggle('active');
        }

        // hover selected class
        let list = document.querySelectorAll('.navigation li');
        function activeLink(){
            list.forEach(
                (item)=> 
                item.classList.remove('hovered');
                this.classList.add('hovered'));   
        }

        list.foreach((item)=>
        item.addEventListener('mouseover', activeLink));
        
    </script>
</body>
</html>