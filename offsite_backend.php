<?php
$servername = "localhost";
$username = "root";
$p = "";
$database = "final_year_project";

$connect = new mysqli($servername, $username, $p, $database);

$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$email = $_POST['email'];
$p_no = $_POST['p_no'];
$date = $_POST['date'];
$v_no = $_POST['v_no'];


$sql = mysqli_query($connect,"INSERT INTO offsite_og (f_name, l_name, email, p_no, date, v_no) VALUES ('$f_name','$l_name','$email','$p_no','$date','$v_no')");

if($sql == true) {
	echo "Data Inserted";
	header("Location: main_hp.html");

}	
else {
	echo "Insertion Error";
}
?>

