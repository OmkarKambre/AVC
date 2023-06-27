<?php
$servername = "localhost";
$username = "root";
$p = "";
$database = "final_year_project";

// Create connection
$connect = new mysqli($servername, $username, $p, $database);


	$name = $_POST['name'];
	$email = $_POST['email'];
	$pno = $_POST['pno'];
	$feedback = $_POST['feedback'];


$sql = mysqli_query($connect,"INSERT INTO feedback (name, email, pno, feedback) VALUES ('$name','$email','$pno','$feedback')");
if($sql==True){

	header("Location:main_hp.html");
}	
else{
	echo "Insertion Error";
    header("Location:feedback.html");
}

?>