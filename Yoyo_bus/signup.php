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

    
</head>
<body>

    <!-- start #header -->
        <header id="header">
            <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
                <p class="font-rale font-size-12 text-black-50 m-0">Satellite Bus Stand Mysore Road, Telecom Colony, Srinagar, Bapuji Nagar, Bengaluru, Karnataka 560098</p>
                <div class="font-rale font-size-14">
                    <a href="login1.php" class="px-3 border-right border-left text-dark">Login</a>
                    
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




            <div class="account-container register">
	
                <div class="content clearfix">
                    
                    <form action="signup_info.php" method="post">
                        <h1>Enter your Details</h1>			
                        
                        <div class="login-fields">
                            
                            <p>Create your account:</p>
                            
                            <div class="field">
                                <label for="firstname">First Name:</label>
                                <input type="text" id="firstname" name="firstname" value="" placeholder="First Name" class="login" required />
                            </div> <!-- /field -->
                            
                            <div class="field">
                                <label for="lastname">Last Name:</label>	
                                <input type="text" id="lastname" name="lastname" value="" placeholder="Last Name" class="login" required />
                            </div> <!-- /field -->
                            
                            
                            <div class="field">
                                <label for="username">Username</label>
                                <input type="text" id="username" name="username" value="" placeholder="Username" class="login" required />
                            </div> <!-- /field -->
                            
                            <div class="field">
                                <label for="password">Password:</label>
                                <input type="password" id="password" name="password" value="" placeholder="Password" class="login" required />
                            </div> <!-- /field -->
                            
                            <div class="field">
                                <label for="confirm_password">Confirm Password:</label>
                                <input type="password" id="confirm_password" name="confirm_password" value="" placeholder="Confirm Password" class="login" required />
                            </div> <!-- /field -->
                            
                            <div class="field">
                            <label for="Branch Location">Branch Location</label>
                            <select name="branchid" class="login" style="font-family: 'Open Sans'; font-size: 13px; color: #8e8d8d; background-color: #fdfdfd; width: 297px; display: block; height: 40px; margin: 0; box-shadow: inset 2px 2px 4px #f1f1f1;">
                            <?php 
                            include('db/dbcon.php'); 
                            
                            $result =  mysqli_query($con,"select * from branch")or die(mysqli_error()); 
                            while ($row=mysqli_fetch_array($result)){ ?>
                            <option value="<?php echo $row['branchid']; ?>"><?php echo $row['branch_location']; ?></option>
                            <?php } ?>
                            </select>
                            </div> <!-- /field -->
                            
                            <div class="field">
                                <label for="confirm_password">User Type:</label>
                                <select name="user_type" id="confirm_password" style="width:100px; border-radius:5px; height:37px; color:#8e8d8d; font-family:'Open Sans';" class="login">
                                    <option>Admin</option>
                                    <option>Dispatcher</option>
                                </select>
                            </div> <!-- /field -->
                            
                        </div> <!-- /login-fields -->
                        
                        <div class="login-actions">
                            <button type="submit" name="save" class="button btn btn-primary btn-large">Register</button>
                            <a href="profile.php"><button type="button" style="margin-right:20px;" class="button btn btn-primary btn-large">Cancel</button></a>
                        </div> 
                        <!-- .actions -->
                        
                    </form>
                    
                </div> <!-- /content -->
                
            </div> <!-- /account-container -->

























































            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
      
  
      <!-- Custom Javascript -->
      <script src="home.js"></script>


</body>
</html>