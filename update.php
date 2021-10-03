<?php
$conn=mysqli_connect('localhost','root','','sad');
if($conn)
{
	$sql="SELECT * FROM register";
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
    <style type="text/css">
      header{
  width: 80%;
  margin: auto;
  overflow: hidden;
  margin: 3px;

}
.head
{
  float: left;
  color: #fff;
  font-family: cursive;

}

nav
{
  float: right;

}

li{
  display: inline;
  padding:1rem;
}

li a{
  color:#fff;
  text-decoration: none;
  font-weight: bold;

}

.active{
  color: gold;

}
    body{ background: url(images/13.jfif);
      no-repeat center center fixed;
  background-size: cover;
  font-family: sans-serif; }

  .inner{
    background: url(images/cake.jpg);
    color: black;
  }


    </style>

  </head>
  <body>
    <header>
    <div class="head">
    
            <h2>Catering</h2>
        </div>
    <nav>
      <ul>
        <li> <a href="one.php" class="active">Home</a></li>
        <li> <a href="aboutus.php">About us</a></li>
                <li> <a href="Packages.php">Packages</a></li>
                <li> <a href="offers.php">Offers</a></li>
                <li> <a href="adminlogin.php">Admin</a></li>
                <li> <a href="login.php">order</a></li>
      </ul>
      
    </nav>
  </header>
    <div class="container ">
    	<div class="row">
    		<div class="col-md-3">
    			<a href="showorder.php"><button class="btn-outline-dark ">Access customer orders</button></a>
    			
    		</div>
    		<div class="col-md-3 inner">
    			<div class="mb-3">
                    <form action="edit.php"method="POST">
        <label  class="form-label">Username</label>
       <input type="text" class="form-control"  placeholder="Username" name="username" value="<?php echo $std['username']?>">
    </div>
       <div class="mb-3">
      <label  class="form-label">Password</label>
     <input type="Password" class="form-control" placeholder="Password" name="password" value="<?php echo $std['password']?>">
    </div>
    
       <div class="mb-3">
      <label  class="form-label">Contact no</label>
     <input type="text" class="form-control"  placeholder="Cell no" name="cell_no" value="<?php echo $std['Cell_no']?>">
    </div>
      <div class="mb-3">
      <label  class="form-label">Address</label>
     <input type="text" class="form-control" placeholder="Address" name="address" value="<?php echo $std['address']?>">
    </div>
                    <div class="group">
          <input type="submit" class="button" value="Submit">
        </div>
   


</form>
</div>
</div>
</div>
</div>





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
