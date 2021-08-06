<?php
include('includes/header.php');
?>
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-md-4">
    
    <?php
    if(isset($_SESSION['status']))
    {
        echo "<h5 class='alert alert-success'>".$_SESSION['status']."</h5>";
        unset($SESSION['status']);
    }
?>
<div class="card">
 <div class="card-header">
 <h4>
  ADD INFO
 <a href="index.php" class="btn btn-primary float-end"> BACK</a>
 </h4>
 </div>
 <div class="card-body">
 
 
                  
				  <form action="code.php" method="post">
				  <div class="form-group mb-3">
					  FullName - <input type="text" name="fullname" placeholder="Enter your fullname here" class="form-control">
				  </div>
		  
				  <div class="form-group mb-3">
					  Email ID - <input type="email" name="email" placeholder="Enter your mail here" class="form-control">
		  <div class="form-group mb-3">
					  Password - <input type="password" name="password" placeholder="********" class="form-control">
				  </div>
				  </div>
		  
				  
		  
				  <div class="form-group mb-3">
					  City - <input type="text" name="city" placeholder="Enter your city" class="form-control">
				  </div>
		  
				  <div class="form-group mb-3">
					  <input type="submit" name="register_submit" value="Register" class="form-control btn btn-danger"> 
				  </div>
		  
		  
		  
			  </form>
 </div>
 </div>
 </div>
 </div>
 </div>
		
<?php		
include('includes/footer.php');
?>
    