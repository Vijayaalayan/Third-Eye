<?php  
 require('db_connect.php');

 include "db_connect.php";

if (isset($_POST['securityname']) and isset($_POST['securitypassword'])){
	
// Assigning POST values to variables.
$username = $_POST['securityname'];
$password = $_POST['securitypassword'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `security` WHERE username='$username' and password='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){

    $_SESSION['securityname']=$username;
    
    header("location:http://localhost/thirdeye/securitydashboard.php");

//echo "Login Credentials verified";
// echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";

}else{
    header("location:Login.php?msg=invalid");
}
}
?>