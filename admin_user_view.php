<?php
 
 $servername = "localhost";
    $username = "root";
    $p = "";
    $database = "final_year_project";

$connect = new mysqli($servername, $username, $p, $database);
 

 

$sql = " SELECT * FROM registration ";
$result = $connect->query($sql);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    
  </head>
  <body>
    
  <table class="table">
  <thead class="thead-dark">
    <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone Number</th>
                <th>Vehicle Number</th>
                <th>RC Number</th>
                <th>Email</th>
                <th>Password</th>
    </tr>
  </thead>
  <tbody>
  <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->    
                <td><?php echo $rows['f_name'];?></td>
                <td><?php echo $rows['l_name'];?></td>
                <td><?php echo $rows['p_no'];?></td>
                <td><?php echo $rows['v_no'];?></td>
                <td><?php echo $rows['rc_no'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['password'];?></td>
                

            </tr>
            <?php
                }
            ?>
  </tbody>
</table>

<?php
$connect->close();
?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin
