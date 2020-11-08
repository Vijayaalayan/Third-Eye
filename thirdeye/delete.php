<?php
$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'thirdeye');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
echo"<script>alert('Are you sure??');</script>";
$contactno=$_REQUEST['contactno'];
 $sql="INSERT INTO ownersdeleterecords (ownersname,houseno,vehicleno,type,modelv,contactno)
SELECT ownersname,houseno,vehicleno,type,modelv,contactno FROM ownerstable WHERE contactno='$contactno'";
$result1 = mysqli_query($connection,$sql) or die ( mysqli_error($connection));
$query = "DELETE FROM ownerstable WHERE contactno='$contactno'"; 
$result = mysqli_query($connection,$query) or die ( mysqli_error($connection));
header("Location: ownerslist.php"); 
?>