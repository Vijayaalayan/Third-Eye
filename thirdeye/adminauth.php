<?php  
 require('db_connect.php');

 include "db_connect.php";

if (isset($_POST['adminname']) and isset($_POST['adminpassword'])){
	
// Assigning POST values to variables.
$username = $_POST['adminname'];
$password = $_POST['adminpassword'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `admin` WHERE username='$username' and password='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){

    $_SESSION['adminname']=$username;
    
    header("location:http://localhost/thirdeye/dashboard.php");

//echo "Login Credentials verified";
// echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";

}else{
    header("location:Login.php?msg=invalid");
}
}
?>