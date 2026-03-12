<?php
session_start();
include("../config/db.php");

if(!isset($_SESSION['admin'])){
header("Location: login.php");
exit();
}

$staff = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM staff"));
$images = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM gallery_images"));
$videos = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM gallery_videos"));
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Dashboard</title>
<link rel="stylesheet" href="admin.css">
</head>

<body>

<div class="sidebar">
<h2>VVVS</h2>

<a href="dashboard.php">Dashboard</a>
<a href="staff_list.php">Manage Staff</a>
<a href="gallery.php">Manage Gallery</a>
<a href="logout.php">Logout</a>

</div>

<div class="main">

<h1>Dashboard</h1>

<div class="cards">

<div class="card">
<h3>Total Staff</h3>
<p><?php echo $staff; ?></p>
</div>

<div class="card">
<h3>Gallery Images</h3>
<p><?php echo $images; ?></p>
</div>

<div class="card">
<h3>Gallery Videos</h3>
<p><?php echo $videos; ?></p>
</div>

</div>

</div>

</body>
</html>