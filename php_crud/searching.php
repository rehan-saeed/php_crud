<?php 
include 'dbconfig.php';
if(isset($_POST['submit'])){
    $search = $_POST['search'];
    
   
    $sql = "select * from user where username  LIKE '%$search%'";
    $result = mysqli_query($conn,$sql);

}
?>



<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>


  
  <table class="table table-striped table-inverse table-responsive table-bordered">

  
  <thead class="thead-inverse">
          <tr>
              <th>id</th>
              <th>name</th>
              <th>email</th>
              <th>password</th>
              <th>confirm password</th>
              <th>Gender</th>
              <th>Action</th>
          </tr>
          </thead>


          <?php




  while($row = mysqli_fetch_assoc($result)){



    echo"<tr>";
  echo"<td>".$row['id']. "</td>";
  echo"<td>".$row['username']. "</td>";
  echo"<td>".$row['email']. "</td>";
  echo"<td>".$row['password']. "</td>";
  echo"<td>".$row['cnfpassword']. "</td>";
  echo"<td>".$row['gender']. "</td>";
  echo "<td>";
  echo "<a href='read.php?id=". $row['id'] ."' title='View Record' data-toggle='tooltip'><span class='btn btn-primary'>View</span></a>";
  echo "<a href='update.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span class='btn btn-warning'>Update</span></a>";
  echo "<a href='delete.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='btn btn-danger'>Delete</span></a>";
  echo "</td>";
  echo "</tr>";
  

  }





  if(!mysqli_num_rows($result))
  {
    echo '<script type="text/javascript">';
    echo ' alert("User Not Found")'; 
    echo '</script>';
  
  }
  
  
  


?>
</table>  



      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>