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
$address = $_POST['address'];
$city = $_POST['city'];
$zip = $_POST['zip'];
$date = $_POST['date'];
$vc_no = $_POST['vc_no'];

$sql = mysqli_query($connect,"INSERT INTO onsite_og (f_name, l_name, email, p_no, address, city, zip, date, vc_no) VALUES ('$f_name','$l_name','$email','$p_no','$address','$city','$zip','$date','$vc_no')");

if($sql == true) {
	echo "Data Inserted";
	header("Location: main_hp.html");

}	
else {
	echo "Insertion Error";
}
?>
