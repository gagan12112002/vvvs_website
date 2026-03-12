<?php
session_start();
include("../config/db.php");

if(!isset($_SESSION['admin'])){
header("Location: login.php");
exit();
}

$id = $_GET['id'];

$result = mysqli_query($conn,"SELECT * FROM staff WHERE id='$id'");
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Staff</title>
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

<h1>Edit Staff</h1>

<form action="update_staff.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">

<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

<label>Name</label><br>
<input type="text" name="name" value="<?php echo $row['name']; ?>" required>

<br><br>

<label>Qualification</label><br>
<input type="text" name="qualification" value="<?php echo $row['qualification']; ?>" required>

<br><br>

<label>Current Photo</label><br>
<img src="../uploads/staff/<?php echo $row['image']; ?>" class="staff">

<br><br>

<label>Change Photo</label><br>
<input type="file" name="image">

<br><br>

<button type="submit">Update Staff</button>

</form>

<br>

<a href="staff_list.php">← Back to Staff List</a>

</div>

</body>
</html>