<?php include "../database/credentials.php"; ?>
<?php include "../database/auth.php"; ?>
<?php include "../database/functions.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="../StyleCss/login.css">
    <!-- Bootstrap Links -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- Remix icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
    <title> Play Tach</title>
</head>

<body>
    <div class="container ">
        <div class="row px-3">
            <div class="card  col-lg-10 col-xl-9 flex-row mx-auto px-0">
                <div class="img-left d-none d-md-flex"></div>
                <div class="card-body">
                    <h4 class="title text-center mt-4">
                        login into account
                    </h4>
                    <form class="form-box px-3"  action="#" method="POST">
                        <!-- email -->
                        <div class="form-input">
                            <span class="col-2"><i class="fa fa-envelope-o" aria-hidden="true"></i> </span>
                            <input class="col-10" type="email" name="email" placeholder="Email Address" required>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <!-- password -->
                        <div class="form-input mt-4 ">
                            <span class="col-2"><i class="ri-key-2-line"></i></span>
                            <input class="col-12 ml-0.5" type="password" name="password" placeholder="Password" required>
                        </div>
                        <!-- checkbox -->
                        <div class="row justify-content-center mb-4">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="checb">
                                <label class="custom-control-label" for="checb">Remember me</label>
                            </div>
                        </div>
                        <!-- login button -->
                        <div class="mb-3">

                            <button type="submit" name="submit" class="btn btn-block m-auto">LOGIN</button>
                        </div>
                        <!-- forget psw -->
                        <div>
                            <button onclick="myFunction()" class="forget-link"><a href="#" class="text-decoration-none">Forget password</a> </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function myFunction() {
            alert("check your email")
        }
    </script>
</body>

</html>