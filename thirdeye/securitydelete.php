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
$contact=$_REQUEST['contact'];
 $sql="INSERT INTO securitydeleterecords (securityname,age,shift,contact)
SELECT securityname,age,shift,contact FROM securitylist WHERE contact='$contact'";
$result1 = mysqli_query($connection,$sql) or die ( mysqli_error($connection));
$query = "DELETE FROM securitylist WHERE contact='$contact'"; 
$result = mysqli_query($connection,$query) or die ( mysqli_error($connection));
header("Location: securitieslist.php"); 
?>