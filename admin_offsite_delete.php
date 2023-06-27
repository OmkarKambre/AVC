<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "final_year_project";

$connect = new mysqli($servername, $username, $password, $database);

if(isset($_GET['v_no'])) {
  $v_no = $_GET['v_no'];

  // Escape the variable to prevent SQL injection
  $v_no = $connect->real_escape_string($v_no);

  $sql = "DELETE FROM offsite_og WHERE v_no='$v_no'";

  if ($connect->query($sql) === TRUE) {
    header("Location: admin_offsite_view.php");
  } else {
    echo "Error deleting record: " . $connect->error;
  }
}

$connect->close();
?>
