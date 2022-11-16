<?php
if(isset($_POST['sumbit'])) {
$name = array("Edwine", "student", "peter", "samid");
$min = 5;
$max = 10;
$username = $_POST['username'];
$password = $_POST['password'];

if(srtlen($username) < $min){
    echo "incorrect email or password";
}else{
    echo "welcome ". $username;
}


}

?>
