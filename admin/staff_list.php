<?php
session_start();
include("../config/db.php");

if(!isset($_SESSION['admin'])){
header("Location: login.php");
exit();
}

$result = mysqli_query($conn,"SELECT * FROM staff ORDER BY order_no ASC");
?>

<!DOCTYPE html>
<html>
<head>
<title>Staff List</title>
<link rel="stylesheet" href="admin.css">

<style>

/* Staff Grid */

#staff-list{
display:grid;
grid-template-columns:repeat(auto-fill,minmax(220px,1fr));
gap:20px;
list-style:none;
padding:0;
margin-top:20px;
}

/* Staff Card */

.staff-card{
background:#fff;
padding:15px;
border-radius:8px;
box-shadow:0 4px 10px rgba(0,0,0,0.08);
text-align:center;
cursor:move;
}

.staff-card img{
width:100%;
height:160px;
object-fit:cover;
border-radius:6px;
margin-bottom:10px;
}

.staff-name{
font-weight:bold;
margin-bottom:5px;
}

.staff-qual{
color:#555;
font-size:14px;
margin-bottom:10px;
}

.staff-actions button{
margin:3px;
}

</style>

</head>

<body>

<div class="sidebar">
<h2>Admin Panel</h2>
<a href="dashboard.php">Dashboard</a>
<a href="staff_list.php">Manage Staff</a>
<a href="gallery.php">Manage Gallery</a>
<a href="logout.php">Logout</a>
</div>

<div class="main">

<h1>Staff List</h1>

<a href="add_staff.php"><button>Add Staff</button></a>

<br><br>

<ul id="staff-list">

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<li class="staff-card" data-id="<?php echo $row['id']; ?>">

<img src="../uploads/staff/<?php echo $row['image']; ?>">

<div class="staff-name">
<?php echo $row['name']; ?>
</div>

<div class="staff-qual">
<?php echo $row['qualification']; ?>
</div>

<div class="staff-actions">

<a href="edit_staff.php?id=<?php echo $row['id']; ?>">
<button>Edit</button>
</a>

<a onclick="return confirm('Delete staff?')" href="delete_staff.php?id=<?php echo $row['id']; ?>">
<button>Delete</button>
</a>

</div>

</li>

<?php } ?>

</ul>

</div>


<!-- jQuery -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- jQuery UI -->

<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>

<script>

$("#staff-list").sortable({

update:function(){

var order = $(this).sortable("toArray",{attribute:"data-id"});

$.post("update_order.php",{order:order});

}

});

</script>

</body>
</html>