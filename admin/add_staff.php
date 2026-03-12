<?php
session_start();
include("../config/db.php");

if(!isset($_SESSION['admin'])){
header("Location: login.php");
exit();
}

if(isset($_POST['add_staff'])){

$name = $_POST['name'];
$qualification = $_POST['qualification'];

$image = $_FILES['photo']['name'];
$tmp = $_FILES['photo']['tmp_name'];

move_uploaded_file($tmp,"../uploads/staff/".$image);

mysqli_query($conn,"INSERT INTO staff(name,qualification,image) VALUES('$name','$qualification','$image')");

header("Location: staff_list.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Staff</title>
<link rel="stylesheet" href="admin.css">
</head>

<body>

<!-- Sidebar -->

<div class="sidebar">

<h2>Admin Panel</h2>

<a href="dashboard.php">Dashboard</a>
<a href="staff_list.php">Manage Staff</a>
<a href="gallery.php">Manage Gallery</a>
<a href="logout.php">Logout</a>

</div>

<!-- Main Content -->

<div class="main">

<h1>Add Staff</h1>

<form method="POST" enctype="multipart/form-data">

<br>

<label>Name</label><br>
<input type="text" name="name" required>

<br><br>

<label>Qualification</label><br>
<input type="text" name="qualification" required>

<br><br>

<label>Photo</label><br>
<input type="file" name="photo" required>

<br><br>

<button name="add_staff">Add Staff</button>

</form>

<br>

<a href="staff_list.php">← Back to Staff List</a>

</div>

</body>
</html>