<?php
$username1=filter_input(INPUT_POST, 'username1');
$password1=filter_input(INPUT_POST, 'password1');

if(!empty($username)){
	if(!empty($password)){
		$host="localhost";
		$dbusername="root";
		$dbpassword="";
		$dbname="sad";

		$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
		if(mysqli_connect_error())
		{
			die('Connect Error('. mysqli_connect_errno().')'.mysqli_connect_error());

		}
		else{
			$sql="INSERT INTO register(username,password)values('$username','$password')";
			if($conn->query($sql)){
				echo "success";

			}
			else
			{
				echo "Error:".$sql."<br>".$conn->error;
			}
			$conn->close();

		}

	}
	else
	{
		echo "put password";
		die();
	}
}


?>