<?php   
    session_start();   
    $servername = "localhost";
    $username = "root";
    $p = "";
    $database = "final_year_project";

    $connect = new mysqli($servername, $username, $p, $database);

    $email = $_POST['email'];
    $password = $_POST['password'];
      
        $sql = "SELECT * FROM registration WHERE email = '$email' and password = '$password'";  
        $result = $connect->query($sql);
        if ($result->num_rows > 0) {
  
        while($row = $result->fetch_assoc()) {
        $_SESSION['email'] = $row['email'];
    $_SESSION['password'] = $row['password'];
    header("Location: main_hp.html");
          
  }
} else {
  echo "User Not Found";
}
?>  