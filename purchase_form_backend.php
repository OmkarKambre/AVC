<?php
$servername = "localhost";
$username = "root";
$p = "";
$database = "final_year_project";

$connect = new mysqli($servername, $username, $p, $database);

$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$email = $_POST['email'];
$v_no = $_POST['v_no'];
$i_up = $_POST['i_up'];

$sql = mysqli_query($connect,"INSERT INTO purchase_amc (f_name, l_name, email, v_no, i_up) VALUES ('$f_name','$l_name','$email','$v_no','$i_up')");

if($sql == true) {
	echo "Data Inserted";
	header("Location: after_purchase.html");

}	
else {
	echo "Insertion Error";
}
?>