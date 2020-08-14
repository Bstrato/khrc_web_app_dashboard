<?php 

include 'sqliconn.php';
$obj = new Database();

  if (isset($_POST['username'])) {
  	$sql1 = $obj->query_fetch("SELECT * FROM login WHERE name='$username'");
  	if (mysqli_num_rows($sql1) > 0) {
  	  echo "taken";	
  	}else{
  	  echo 'not_taken';
  	}
  	exit();
  }
  if (isset($_POST['password'])) {
  	$sql2 = $obj->query_fetch("SELECT * FROM login WHERE pw='$password'");
  	if (mysqli_num_rows($sql2) > 0) {
  	  echo "password in exist";	
  	}else{
  	  echo 'continue';
  	}
  	exit();
  }
  if (isset($_POST['register'])) {
  	$username = $_POST['username'];
  	$password = $_POST['password'];
  	$sql3 = $obj->query_fetch("SELECT * FROM login WHERE name='$username'");

  	if (mysqli_num_rows($sql3) > 0) {
  	  echo "exists";	
  	  exit();
  	}else{
  	  $query = $obj->query_fetch("INSERT INTO login (name, password) 
  	       	VALUES ('$username', '".md5($password)."'");
  	  $results =$query;
  	  echo 'Saved!';
  	  exit();
  	}
  }

?>