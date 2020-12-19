<?php 

include('db/dbcon.php');

$get_id=$_GET['busid'];

mysqli_query($con,"delete from bus where busid = '$get_id' ")or die(mysqli_error());
echo "<script>alert('Successfully Delete'); window.location='bus.php'</script>";
?>