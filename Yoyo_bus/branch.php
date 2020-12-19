<?php include ('db/dbcon.php'); ?>
<?php include ('session.php'); ?>

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

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">


    <style>
    table{
        width:50%;
    }
	tbody{
		background-color: white;
	}

	th {
  	background-color:  #003859;
	  color: white;
	  
	}
	</style>

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
                <a class="navbar-brand" href="home.php">Yoyo_Bus</a>
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




        <?php
$user_query  = mysqli_query($con,"select * from admin where adminid = '$id_session'")or die(mysqli_error());
$user_row =mysqli_fetch_array($user_query);
$user_type  = $user_row['user_type'];
?> 
			

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2>
<?php
$result = mysqli_query($con,"SELECT * FROM branch order by branchid DESC");
$num_rows = mysqli_num_rows($result);
?>
						<i class="halflings-icon user"></i><span class="label label-success"><?php echo $num_rows; ?></span><span class="break"></span>
					<?php if ($user_type == 'Admin'){
					?>
						<a href="add_branch.php">
							<button style="margin-top:-7px;" class="btn btn-small btn-primary"><i class="halflings-icon plus white"></i> Branch</button>
						</a>
					<?php } ?>
						</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content ">

						<table class="table table-striped table-bordered bootstrap-datatable datatable ">
						  <thead>
							  <tr>
								  <th>Branch Location</th>
								  <th>Date Added</th>
					<?php if ($user_type == 'Admin'){
					?>
								  <th>Actions</th>
					<?php } ?>
							  </tr>
						  </thead>   
						  <tbody>
<?php
include ('db/dbcon.php');
$result= mysqli_query($con,"select * from branch order by branchid DESC") or die (mysqli_error());
while ($row= mysqli_fetch_array ($result) ){
$id=$row['branchid'];
?>
							<tr>
								<td><?php echo $row['branch_location']; ?></td>
								<td class="center">
									<span class="label label-success"><?php echo $row['date_added']; ?></span>
								</td>
					<?php if ($user_type == 'Admin'){
					?>
								<td class="center">
									<a class="btn btn-success" href="view_branch.php<?php echo '?branchid='.$id; ?>">
										View<!-- <i class="halflings-icon white zoom-in"></i> -->  
									</a>
									<a class="btn btn-info" href="edit_branch.php<?php echo '?branchid='.$id; ?>">
										Edit<!-- <i class="halflings-icon white edit"></i>   -->
									</a>
									<a class="btn btn-danger btn-setting" href="delete_branch.php<?php echo '?branchid='.$id; ?>">
										Delete<!-- <i class="halflings-icon white trash"></i>  -->
									</a>
								</td>
					<?php } ?>
							</tr>
<?php } ?>					  
						  </tbody> 
					  </table> 
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
			
<!--- Delete Modal -->			
	





















<!-- start #footer -->
<footer id="footer" class="bg-dark text-white py-5">
            <div class="container ">
              
                <div class="col-lg-6 col-12 ">
                  <h4 class="font-rubik font-size-20 ">Complains</h4>
                  <form class="form-row">
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Email *">
                    </div>
                    <div class="col">
                      <button type="submit" class="btn btn-primary mb-2">Send</button>
                    </div>
                  </form>
                </div>
                
            </div>
          </footer>
          <div class="copyright text-center bg-dark text-white py-2">
            <p class="font-rale font-size-14">&copy; Copyrights 2020. Desing By <a href="#" class="color-second">Yoyo_Bus</a></p>
          </div>
      <!-- !start #footer -->
  
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
      <!-- Owl Carousel Js file -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>
  
      <!--  isotope plugin cdn  -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha256-CBrpuqrMhXwcLLUd5tvQ4euBHCdh7wGlDfNz8vbu/iI=" crossorigin="anonymous"></script>
  
      <!-- Custom Javascript -->
      <script src="home.js"></script>


</body>
</html>
















