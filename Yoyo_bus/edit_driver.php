<?php include ('db/dbcon.php');
include ('session.php'); 
$ID=$_GET['driverid'];
 ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yoyo_Bus</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom CSS file -->
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="style.css">

    
</head>
<body>

    <!-- start #header -->
        <header id="header">
            <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
                <p class="font-rale font-size-12 text-black-50 m-0">Satellite Bus Stand Mysore Road, Telecom Colony, Srinagar, Bapuji Nagar, Bengaluru, Karnataka 560098</p>
                <div class="font-rale font-size-14">
				<ul class="nav pull-right">
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<?php
								include('db/dbcon.php');
								$user_query=mysqli_query($con,"select *  from admin where adminid='$id_session'")or die(mysqli_error());
								$row=mysqli_fetch_array($user_query); {
							?>
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon user white"></i> <?php echo $row['firstname']; ?>
								<span class="caret"></span>
							</a>
<?php } ?>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
<?php
$user_query  = mysqli_query($con,"select * from admin where adminid = '$id_session'")or die(mysqli_error());
$user_row =mysqli_fetch_array($user_query);
$user_type  = $user_row['user_type'];
?>  
					<?php if ($user_type == 'Admin'){
					?>
								<li><a href="profile.php"><i class="halflings-icon user"></i> User List</a></li>
					<?php } ?>
								<li><a href="logout.php"><i class="halflings-icon off"></i> Logout</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
                   
                    
                </div>
            </div>


            <!-- Primary Navigation -->
            <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
                <a class="navbar-brand" style="margin:20px auto;" href="home.php" >YoYo_Bus</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav m-auto font-rubik">
                      <li class="nav-item active ">
                        <a class="nav-link" href="driver.php">Driver Info</a>
                      </li>
                      <?php if ($user_type == 'Admin'){
                    ?>
                        <li class="nav-item active ">
                        <a class="nav-link" href="dispatcher.php">Dispatcher Info</a>
					<?php } ?>
                      <li class="nav-item active">
                        <a class="nav-link" href="bus.php">Bus Info </a>
                      </li>
                      <li class="nav-item active">
                          <a class="nav-link" href="branch.php">Branch Info</a>
                        </li>
						<li class="nav-item active">
                        <a class="nav-link" href="schedule.php">View Schedule</a>
                      </li>
                      
                        
                        
                    </ul>
                    
                  </div>
                
              </nav>
               <!-- !Primary Navigation -->

            </header>













<div class="account-container register">
	
	<div class="content clearfix">
		
		<form method="post" enctype="multipart/form-data">
			<h1>Edit Details</h1>			
			
			<div class="login-fields">
<?php
  $query=mysqli_query($con,"select * from driver where driverid='$ID'")or die(mysqli_error());
$row=mysqli_fetch_array($query);
  ?>
				
				<p>Edit driver account:</p>
				<div class="field">
				<a href=""><?php if($row['profile'] != ""): ?>
				<img src="slider/<?php echo $row['profile']; ?>" width="100px" height="100px" style="border:4px groove #CCCCCC; border-radius:5px;">
				<?php else: ?>
				<img src="./slider/default.png" width="100px" height="100px" style="border:4px groove #CCCCCC; border-radius:5px;">
				<?php endif; ?>
				</a>
					<input type="file" name="image" style="width:190px; float:right; margin-top:57px;">
				</div> <!-- /field -->
			<!-- .actions -->
				
				<div class="field">
					<label for="firstname">First Name:</label>
					<input type="text" id="firstname" name="firstname" value="<?php echo $row['firstname']; ?>" placeholder="First Name" class="login" required />
				</div> <!-- /field -->
				
				<div class="field">
					<label for="lastname">Last Name:</label>	
					<input type="text" id="lastname" name="lastname" value="<?php echo $row['lastname']; ?>" placeholder="Last Name" class="login" required />
				</div> <!-- /field -->
				
				<div class="field">
					<label for="contact_number">Contact Number</label>
					<input type="text" maxlength="15" id="contact_number" name="contact_number" value="<?php echo $row['contact_number']; ?>" placeholder="Contact Number" class="login" required />
				</div> <!-- /field -->
				
			</div> <!-- /login-fields -->
			
			<div class="login-actions">
				<button type="submit" name="update" class="button btn btn-primary btn-large">Update Info</button>
				<a href="driver.php"><button type="button" style="margin-right:20px;" class="button btn btn-primary btn-large">Cancel</button></a>
			</div> 
			<!-- .actions -->
			
		</form>
	
<?php
/*
$id =$_GET['driverid'];
if (isset($_POST['image'])) {

							$image = $_FILES["image"] ["name"];
							$image_name= addslashes($_FILES['image']['name']);
							$size = $_FILES["image"] ["size"];
							$error = $_FILES["image"] ["error"];
							


							if ($error > 0){
										die("Error uploading file! Code $error.");
									}else{
										if($size > 10000000) //conditions for the file
										{
										die("Format is not allowed or file size is too big!");
										}
										
									else
										{

move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
$profile=$_FILES["image"]["name"];

mysqli_query(" UPDATE driver SET profile='$profile' WHERE driverid = '$id' ")or die(mysqli_error());
echo "<script>alert('Successfully Update Driver Profile!'); window.location='driver.php'</script>";
										}
										}
							}*/
?>


<?php
$id =$_GET['driverid'];
if (isset($_POST['update'])) {
								$image = $_FILES["image"] ["name"];
							$image_name= addslashes($_FILES['image']['name']);
							$size = $_FILES["image"] ["size"];
							$error = $_FILES["image"] ["error"];
							


							if ($error > 0){
										
$firstname=$_POST['firstname'];	
$lastname=$_POST['lastname'];	
$contact_number=$_POST['contact_number'];	
$still_profile = $row['profile'];

mysqli_query($con," UPDATE driver SET firstname='$firstname', profile='$still_profile', lastname='$lastname', contact_number='$contact_number'
 WHERE driverid = '$id' ")or die(mysqli_error());
echo "<script>alert('Successfully Update Driver Info!'); window.location='driver.php'</script>";	
									}else{
										if($size > 10000000) //conditions for the file
										{
										die("Format is not allowed or file size is too big!");
										}
										

move_uploaded_file($_FILES["image"]["tmp_name"],"slider/" . $_FILES["image"]["name"]);			
$profile=$_FILES["image"]["name"];


$firstname=$_POST['firstname'];	
$lastname=$_POST['lastname'];	
$contact_number=$_POST['contact_number'];	

mysqli_query($con," UPDATE driver SET firstname='$firstname', profile='$profile', lastname='$lastname', contact_number='$contact_number'
 WHERE driverid = '$id' ")or die(mysqli_error());
echo "<script>alert('Successfully Update Driver Info!'); window.location='driver.php'</script>";
}
}
?>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
      
  
      <!-- Custom Javascript -->
      <script src="home.js"></script>


</body>
</html>
