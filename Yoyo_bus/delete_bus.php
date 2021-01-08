<?php 

include('db/dbcon.php');

$get_id=$_GET['busid'];

mysqli_query($con,"CALL bus_delete ('$get_id') ")or die(mysqli_error());
echo "<script>alert('Successfully Delete'); window.location='bus.php'</script>";
?>