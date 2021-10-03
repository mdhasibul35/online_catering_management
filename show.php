<?php
$conn=mysqli_connect('localhost','root','','sad');
if($conn)
{



  $sql="SELECT * FROM register";
  $result=mysqli_query($conn,$sql);

}
else{
  echo "not connect";
}
?>


<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a href="#" class="btn btn-info">Create New Account</a>
          
        </div>
        <div class="col-md-9">
          <table class="table">
            <thead>
              <th>Name</th>
              <th>Password</th>
              <th>Cell no</th>
              <th>Address</th>
              <th>Action</th>
            </thead>
            <tbody>
              <?php

              while ($row=mysqli_fetch_assoc($result)) { ?>
                <tr>
                <td> <?php echo $row['username'];?></td>
                <td> <?php echo $row['password'];?></td>
                <td><?php echo $row['address']; ?></td>

                <td><?php echo $row['Cell_no']; ?></td>
              <td>
                <a href="viewprofile.php?id=<?php echo $row['id']; ?>" class="btn btn-info">View</a>
             <a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
           <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Do you really want to delete?')">Delete</a>
              </td>
            </tr>
              <?php } ?>
            </tbody>
            


          </table>






    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>
