<?php
include 'config.php';
if(isset($_POST['save']))
{ 
	$fn = $_POST['fn'];
	$mn = $_POST['mn'];
	$ln = $_POST['ln'];
	$addate = $_POST['addate'];
	$pa1 = $_POST['pa1'];
	$pa2 = $_POST['pa2'];
	$ha = $_POST['ha'];
	$monum = $_POST['monum'];
	$gen = $_POST['gen'];
	$adnum = $_POST['adnum'];
	$bd = $_POST['bd'];
	$std_id = $_POST['std_id'];
	$cls = $_POST['cls'];
	$sec = $_POST['sec'];
	$rel = $_POST['rel'];
	$simage = $_POST['simage'];
	$pimage = $_POST['pimage'];

	$sql = "INSERT INTO stds_info (fn,mn,ln,addate,pa1,pa2,ha,monum,gen,adnum,bd, std_id,cls,sec,rel,simage,pimage)
	VALUES('$fn','$mn','$ln','$addate','$pa1','$pa2','$ha','$monum','$gen','$adnum','$bd','$std_id','$cls','$sec','$rel','$simage','$pimage',)"; 

	if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	} else {
		echo "Error: " . $sql . ":-" . mysqli_error($conn);
	}
	mysqli_close($conn);
}
?>