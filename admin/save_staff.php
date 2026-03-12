<?php
include("../config/db.php");

$name = $_POST['name'];
$qualification = $_POST['qualification'];

$image = time()."_".$_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];

$path = "../uploads/staff/".$image;

move_uploaded_file($tmp,$path);

$result = mysqli_query($conn,"SELECT MAX(order_no) as max_order FROM staff");
$row = mysqli_fetch_assoc($result);
$order = $row['max_order'] + 1;

$query = "INSERT INTO staff(name,qualification,image,order_no)
VALUES('$name','$qualification','$image','$order')";

mysqli_query($conn,$query);

header("Location: staff_list.php");
exit();
?>