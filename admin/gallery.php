<?php
session_start();
include("../config/db.php");

if(!isset($_SESSION['admin'])){
header("Location: login.php");
exit();
}


/* ================= IMAGE UPLOAD ================= */

if(isset($_POST['upload_image'])){

$image = time()."_".$_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];
$path = "../uploads/gallery/".$image;

move_uploaded_file($tmp,$path);

mysqli_query($conn,"INSERT INTO gallery_images(image) VALUES('$image')");

header("Location: gallery.php");
exit();
}


/* ================= VIDEO UPLOAD ================= */

if(isset($_POST['upload_video'])){

$video = time()."_".$_FILES['video']['name'];
$tmp = $_FILES['video']['tmp_name'];
$path = "../uploads/videos/".$video;

move_uploaded_file($tmp,$path);

mysqli_query($conn,"INSERT INTO gallery_videos(video) VALUES('$video')");

header("Location: gallery.php");
exit();
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Gallery Manager</title>
<link rel="stylesheet" href="admin.css">
</head>

<body>

<!-- ===== Sidebar ===== -->

<div class="sidebar">

<h2>VVVS</h2>

<a href="dashboard.php">Dashboard</a>
<a href="staff_list.php">Manage Staff</a>
<a href="gallery.php">Manage Gallery</a>
<a href="logout.php">Logout</a>

</div>


<!-- ===== Main Content ===== -->

<div class="main">

<h1>Gallery Manager</h1>


<!-- ================= Upload Image ================= -->

<h3>Upload Image</h3>

<form method="POST" enctype="multipart/form-data">
<input type="file" name="image" required>
<button name="upload_image">Upload</button>
</form>

<br><br>


<!-- ================= Upload Video ================= -->

<h3>Upload Video</h3>

<form method="POST" enctype="multipart/form-data">
<input type="file" name="video" required>
<button name="upload_video">Upload</button>
</form>

<hr><br>


<!-- ================= Images Section ================= -->

<h2>Gallery Images</h2>

<div class="gallery-grid">

<?php
$result = mysqli_query($conn,"SELECT * FROM gallery_images ORDER BY id DESC");

while($row=mysqli_fetch_assoc($result)){
?>

<div class="gallery-card">

<img src="../uploads/gallery/<?php echo $row['image']; ?>">

<a href="delete_image.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Delete this image?')">
<button>Delete</button>
</a>

</div>

<?php } ?>

</div>


<br><br>


<!-- ================= Videos Section ================= -->

<h2>Gallery Videos</h2>

<div class="gallery-grid">

<?php
$result = mysqli_query($conn,"SELECT * FROM gallery_videos ORDER BY id DESC");

while($row=mysqli_fetch_assoc($result)){
?>

<div class="gallery-card">

<video controls>
<source src="../uploads/videos/<?php echo $row['video']; ?>" type="video/mp4">
</video>

<a href="delete_video.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Delete this video?')">
<button>Delete</button>
</a>

</div>

<?php } ?>

</div>

</div>

</body>
</html>