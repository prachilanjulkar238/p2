<?php
include('includes/header.php');

?>
    <div class="container">
    <div class="row">
    <div class="col-md-12">

    <?php
    if(isset($_SESSION['status']))
    {
        echo "<h5 class='alert alert-success'>".$_SESSION['status']."</h5>";
        unset($_SESSION['status']);
    }
?>
<div class="card">
 <div class="card-header">
 <h4>
  PHP Firebase CRUD - Realtime Database
 <a href="formdata.php" class="btn btn-primary float-end"> Add info</a>
 
 </h4>
 
 </div>
 <div class="card-body">
 <h1> WELCOME!!!</h2>
 </div>
 </div>
 </div>
 </div>
 </div>
<?php		
		
include('includes/footer.php');
?>
    