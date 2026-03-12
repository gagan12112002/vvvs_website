<?php
session_start();
include("../config/db.php");

$email = $_POST['email'];
$password = md5($_POST['password']);

$query = "SELECT * FROM admins WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result) > 0){

    $_SESSION['admin'] = $email;

    header("Location: dashboard.php");

}else{

    echo "Invalid Login";

}
?>