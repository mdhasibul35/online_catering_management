

<?php
$id=$_GET['id'];
$conn=mysqli_connect('localhost','root','','sad');
if($conn)
{
  $sql="SELECT * FROM `register` WHERE id=$id";
  $result=mysqli_query($conn,$sql);
  $std=mysqli_fetch_assoc($result);

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

          
      
        
          <table class="table">
            <h2>My Basic Information</h2>
            <tr>
              <td>Name:</td>
              <td><?php echo $std['username']; ?></td>
            </tr>
            <tr>
              <td>Phone:</td>
              <td><?php echo $std['Cell_no']; ?></td>
            </tr>
            <tr>
              <td>Address:</td>
              <td><?php echo $std['address']; ?></td>
            </tr>            
          </table>

          




  </body>
</html>
