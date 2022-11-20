<?php include "credentials.php"; ?>

<?php session_start(); ?>

<?php
if (isset($_POST["submit"])) {
    //    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $email = mysqli_real_escape_string($connection, $email);
    $password = mysqli_real_escape_string($connection, $password);
    // $username = mysqli_real_escape_string($connection, $username);

    $query = "SELECT * FROM admin WHERE email = '{$email}'";
    $select_admin_query = mysqli_query($connection, $query);

    if (!$select_admin_query) {
        die("Query Failed" . mysqli_error($connection));
    }

    while ($row = mysqli_fetch_array($select_admin_query)) {
        $db_id = $row['id'];
        $db_email = $row['email'];
        $db_username = $row['username'];
        $db_password = $row['password'];
        // $db_role = $row['role']; 

    }

    if ($email !== $db_email && $password !== $db_password) {
        header("Location: loginTest.php");
    } else if ($email == $db_email && $password == $db_password) {
        $_SESSION['email'] = $db_email;
        $_SESSION['password'] = $db_password;
        $_SESSION['username'] = $db_username;

        header("Location: home.php");
    } else {
        header("Location: loginTest.php");
    }
}



?>
