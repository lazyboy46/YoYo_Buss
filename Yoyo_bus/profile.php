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
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom CSS file -->
    <link rel="stylesheet" href="login.css">

	<style>

	


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
                    <a href="logout.php" class="px-3 border-right border-left text-dark">Logout</a>
                    
                </div>
            </div>

            <!-- Primary Navigation -->
            <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
                <a class="navbar-brand" style="margin:20px auto;" href="home.php" >YoYo_Bus</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                
              </nav>
               <!-- !Primary Navigation -->

            </header>










			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2>
<?php
$result = mysqli_query($con,"SELECT * FROM admin");
$num_rows = mysqli_num_rows($result);
?>
						<i class="halflings-icon user"></i><span class="label label-success"><?php echo $num_rows; ?></span><span class="break"></span>
						<a href="signup.php">
							<button style="margin-top:-7px;" class="btn btn-small btn-primary"><i class="halflings-icon plus white"></i> User</button>
						</a>
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
								  <th >Firstname</th>
								  <th>Lastname</th>
								  <th>Username</th>
								  <th>Branch</th>
								  <th>Type</th>
								  <th>Date Added</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
<?php
include ('db/dbcon.php');
$result= mysqli_query($con,"select * from admin 
LEFT JOIN branch on admin.branchid = branch.branchid
 order by admin.adminid ASC") or die (mysqli_error());
while ($row= mysqli_fetch_array ($result) ){
$id=$row['adminid'];
$branchid=$row['branchid'];
?>
							<tr>
								<td><?php echo $row['firstname']; ?></td>
								<td class="center"><?php echo $row['lastname']; ?></td>
								<td class="center"><?php echo $row['username']; ?></td>
								<td class="center"><?php echo $row['branch_location']; ?></td>
								<td class="center"><?php echo $row['user_type']; ?></td>
								<td class="center">
									<span class="label label-success"><?php echo $row['date_added']; ?></span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="view_admin.php<?php echo '?adminid='.$id; ?>">
										View<!-- <i class="halflings-icon white zoom-in"></i>   -->
									</a>
									<a class="btn btn-info" href="edit_admin.php<?php echo '?adminid='.$id; ?>">
										Edit<!-- <i class="halflings-icon white edit"></i> -->  
									</a>
									<a class="btn btn-danger btn-setting" href="delete_admin.php<?php echo '?adminid='.$id; ?>">
										Delete<!-- <i class="halflings-icon white trash"></i>  -->
									</a>
								</td>
							</tr>
<?php } ?>					  
						  </tbody> 
					  </table> 
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
			
<!--- Delete Modal -->			
	
    




    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
      
  
      <!-- Custom Javascript -->
      <script src="home.js"></script>


</body>
</html>