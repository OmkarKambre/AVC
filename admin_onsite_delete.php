<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "final_year_project";

$connect = new mysqli($servername, $username, $password, $database);

if(isset($_GET['vc_no'])) {
  $vc_no = $_GET['vc_no'];

  // Escape the variable to prevent SQL injection
  $vc_no = $connect->real_escape_string($vc_no);

  $sql = "DELETE FROM onsite_og WHERE vc_no='$vc_no'";

  if ($connect->query($sql) === TRUE) {
    header("Location: admin_onsite_view.php");
  } else {
    echo "Error deleting record: " . $connect->error;
  }
}

$connect->close();
?>
