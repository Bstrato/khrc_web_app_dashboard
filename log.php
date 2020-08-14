<?php
session_start();
include 'sqliconn.php';
$obj = new Database();


$error=''; //Variable to Store error message;
if(isset($_POST['signin_btn'])){
 if(empty($_POST['username']) || empty($_POST['password'])){
 $error = "Username or Password is Invalid";
 }
 else
 {
 //Define $user and $pass
 $username=$_POST['username'];
 $password=$_POST['password'];
 
 //sql query to fetch information of registerd user and finds user match.
 $query = $obj->query_fetch("SELECT * FROM login WHERE pw='$password' AND name='$username'");
 
 $rows = mysqli_num_rows($query);
 if($rows == 1){
 header("Location: dashboard.php"); // Redirecting to other page
 }
 else
 {
 $error = "Username of Password is Invalid";
 }
 mysqli_close(); // Closing connection
 }
}
 
?>