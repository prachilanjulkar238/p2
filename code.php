<?php
include("dbconnect.php");
session_start();
if(isset($_POST["register_submit"]))
{
$fullname=$_POST["fullname"];
$email=$_POST["email"];
$password=$_POST["password"];
$city=$_POST["city"];

$postData = [
'fname'=>$fullname,
'e'=>$email,
'pwd'=>$password,
'c'=>$city,
];
$ref_table = "register";
$postRef_resutlt = $database->getReference($ref_table )->push($postData);

      if($postRef_result)
      {
          $_SESSION['status'] = "Registerd!!!";
          header('Location: index.php');
      }
else
  {
    $_SESSION['status'] = "Failed";
    header('Location: index.php');
    }
}
?>