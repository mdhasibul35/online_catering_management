<?php
 
 $username=$_POST['username'];
 $password=$_POST['password'];
 $cell_no=$_POST['cell_no'];
 $address=$_POST['address'];

$conn=mysqli_connect('localhost','root','','sad');
if($conn)

{
	$sql1="SELECT * FROM register WHERE username='$username' AND cell_no='$cell_no' ";
	$result=mysqli_query($conn,$sql1);
	$rowcount=mysqli_num_rows($result);

	if($rowcount==1)
	{
        header("Location: existaccount.php");
		//echo "sorry ! account exist already";
	}
	else{
			$sql="INSERT INTO register VALUES(NULL,'$username','$password','$cell_no','$address')";

	if (mysqli_query($conn,$sql)) {
		header("Location: showsuccessoflogin.php");
	}


	}

}
else{
	echo "not connect";
}

?>