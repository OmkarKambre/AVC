<?php
 
 $servername = "localhost";
    $username = "root";
    $p = "";
    $database = "final_year_project";

$connect = new mysqli($servername, $username, $p, $database);
 

 

$sql = " SELECT * FROM offsite_og ";
$result = $connect->query($sql);
$connect->close();
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
    <div class="container"><h1><center>ON-SITE SERVICES</center></h1></div>
    
    <hr style="border: 1px solid red;">

  <table class="table">
  <thead class="thead-dark">
    <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Date</th>
                <th>Vehicle Number</th>
                <th>Action</th>
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
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['p_no'];?></td>
                <td><?php echo $rows['date'];?></td>
                <td><?php echo $rows['v_no'];?></td>
                <td>
                <a href="admin_offsite_delete.php?v_no=<?php echo $rows['v_no']; ?>">
              <button type="submit" style="background-color:red">Delete</button>
            </a>
                </td>
            </tr>
            <?php
                }
            ?>
  </tbody>
</table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>