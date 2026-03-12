<?php

include("../config/db.php");

$id = intval($_GET['id']);

$result = mysqli_query($conn,"SELECT * FROM gallery_images WHERE id='$id'");
$row = mysqli_fetch_assoc($result);

$image = $row['image'];

if(file_exists("../uploads/gallery/".$image)){
    unlink("../uploads/gallery/".$image);
}

mysqli_query($conn,"DELETE FROM gallery_images WHERE id='$id'");

header("Location: gallery.php");
exit();

?>