<?php
include("../config/db.php");

$id = $_POST['id'];
$name = $_POST['name'];
$qualification = $_POST['qualification'];

if($_FILES['image']['name'] != ""){

$image = time()."_".$_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];
$path = "../uploads/staff/".$image;

move_uploaded_file($tmp,$path);

$query = "UPDATE staff SET name='$name', qualification='$qualification', image='$image' WHERE id='$id'";

}else{

$query = "UPDATE staff SET name='$name', qualification='$qualification' WHERE id='$id'";

}

mysqli_query($conn,$query);

header("Location: staff_list.php");
exit();
?>