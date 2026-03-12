<?php

include("../config/db.php");

$order = $_POST['order'];

$position = 1;

foreach($order as $id){

mysqli_query($conn,"UPDATE staff SET order_no='$position' WHERE id='$id'");

$position++;

}

?>