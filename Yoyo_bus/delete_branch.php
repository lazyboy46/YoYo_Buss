<?php 

include('db/dbcon.php');

$get_id=$_GET['branchid'];

mysqli_query($con,"delete from branch where branchid = '$get_id' ")or die(mysqli_error());
echo "<script>alert('Successfully Delete'); window.location='branch.php'</script>";
?>