<?php require_once 'auth.php'; session_status(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <!-- CSS -->
    <link rel="stylesheet" href="../StyleCss/login.css" />
    <link rel="stylesheet" href="../StyleCss/FontPoppins.css" />

    <!-- Bootstrap Links -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/all.min.css" />

    <link rel="shortcut icon" href="../assets/imgs/logo.png" type="image/x-icon" />
    <!-- Remix icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
    <!-- Bootstrap Links -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <title> Play Tach</title>
</head>

<body>
    <?php if ($msg) echo
    '
   <div class="container ">
   <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
  <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>
  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg>
<div class="alert alert-danger d-flex align-items-center p-3 " role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
  <div>
  admin not found 
  </div>
</div></div>';
    ?>
    <div class="row px-2 mx-4">
        <div class="card  col-lg-10 col-xl-9 flex-row mx-auto px-0">
            <div class="img-left d-none d-md-flex"></div>
            <div class="col text-center d-flex flex-column  py-5 px-5">

                <h4 class="title">
                    <span class="titleP">P</span>layTech

                </h4>
                <form class="d-flex flex-column gap-3" action="#" method="POST">
                    <div class="d-flex align-items-center">
                        <!-- <label for="email" class="form-label d-flex align-items-center"><span class="col"><i class="fa fa-envelope-o fs-4" aria-hidden="true"></i> </span></label> -->
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    </div>
                    <div class="d-flex align-items-center">
                        <!-- <label for="pwd" class="form-label d-flex align-items-center"><span class="col"><i class="ri-key-2-line fs-4"></i></span></label> -->
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                    </div>

                    <div class=" form-check mb-3">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember"> Remember me
                        </label>
                    </div>
                    <button type="submit" name="submit" class="btn btn-dark ">Login</button>


                </form>

            </div>

        </div>
    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>