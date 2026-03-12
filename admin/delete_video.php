<?php

include("../config/db.php");

$id = intval($_GET['id']);

$result = mysqli_query($conn,"SELECT * FROM gallery_videos WHERE id='$id'");
$row = mysqli_fetch_assoc($result);

$video = $row['video'];

if(file_exists("../uploads/videos/".$video)){
    unlink("../uploads/videos/".$video);
}

mysqli_query($conn,"DELETE FROM gallery_videos WHERE id='$id'");

header("Location: gallery.php");
exit();

?>