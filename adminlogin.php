<!DOCTYPE html>
<html>
<head>
	<title>
		Login: My offers
	</title>

	<link rel="stylesheet" type="text/css" href="one.css">
	<link rel="stylesheet" href="footer.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    	<style type="text/css">
    		
    		body{
	margin:0;
	padding:0;
	background: url(images/apple.jpeg);
	background-size: cover;
	background-position: center;
	font-family: sans-serif;
}

.loginbox {
    width: 320px;
    height: 420px;
    background: black;
    color: #ff5151;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    padding: 70px 30px;
}

.avatar {
    border-color: darkred;
    width: 100px;
    height: 100px;
    border-radius: 40%;
    position: static;
    margin-left: 34%;
}

h1{
	margin: 0;
	padding: 0 0 20px;
	text-align: center;
	font-size: 22px;
}

.loginbox p{
	margin: 0;
	padding: o;
	font-weight: bold;
}

.loginbox input{
	width: 100%;
	margin-bottom: 20px;
}


loginbox input[type="text"], input[type="password"]{
	border: none;
	border-bottom: 1 px solid #fff;
	background: transparent;
	outline: : none;
	height: 40px;
	color: #fff;
	font-size: 16px;
}

loginbox input[type="submit"]{
	border: none;
	outline: none;
	height: 40px;
	background: #fbfb2525;
	color: #fff;
	font-size: 18px;
	border-radius:  20px;
	border-radius: 20px;
}

loginbox input[type="submit"]:hover{
	cursor: pointer;
	background: #ffc107;
	color: #000;
}

.loginbox a{
	text-decoration: none;
	font-size: 12px;
	line-height: 20px;
	color; darkgrey;
}

loginbox a:hover{
	color: #ffc107;
}

    	</style>

</head>
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
<body>
	<div class="loginbox">
		<img src="images/icon.png" class="avatar"> 

		<h1><big>Login</big></h1>
		<form action="admindb.php" method="POST">
			<p>Username</p>
			<input type="text" name="username" placeholder="Enter Username">
			<p>password</p>	
			<input type="password" name="password" placeholder="Enter password">
			<input type="submit" name="sadness" value="login">



		</form>

		

	</div>  
</body>
</html>