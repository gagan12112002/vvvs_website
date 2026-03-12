<?php
session_start();
include("../config/db.php");

if(!isset($_SESSION['admin'])){
header("Location: login.php");
exit();
}

$id = intval($_GET['id']);

$result = mysqli_query($conn,"SELECT * FROM staff WHERE id='$id'");
$row = mysqli_fetch_assoc($result);

$image = $row['image'];

unlink("../uploads/staff/".$image);

mysqli_query($conn,"DELETE FROM staff WHERE id='$id'");

header("Location: staff_list.php");
exit();
?>