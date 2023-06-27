<?php
$servername = "localhost";
$username = "root";
$p = "";
$database = "final_year_project";

// Create connection
$connect = new mysqli($servername, $username, $p, $database);


	$f_name = $_POST['f_name'];
	$l_name = $_POST['l_name'];
	$p_no = $_POST['p_no'];
	$v_no = $_POST['v_no'];
	$rc_no = $_POST['rc_no'];
	$email = $_POST['email'];
	$password = $_POST['password'];

$sql = mysqli_query($connect,"INSERT INTO registration (f_name, l_name, p_no, v_no, rc_no, email, password) VALUES ('$f_name','$l_name','$p_no','$v_no','$rc_no','$email','$password')");
if($sql==True){
	header("Location: login_frontend.html");
}	
else{
	echo "Insertion Error";
}

?>