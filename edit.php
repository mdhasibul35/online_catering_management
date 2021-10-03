<?php
 $id=$_GET['id'];
 $username=$_POST['username'];
 $password=$_POST['password'];
 $cell_no=$_POST['cell_no'];
 $address=$_POST['address'];

$conn=mysqli_connect('localhost','root','','sad');
if($conn)
{
	$sql="UPDATE register set username='$username',password='$password',cell_no='$cell_no',address='$address'";

	if (mysqli_query($conn,$sql)) {
		header("Location: showcustomer.php?id=".$id);
	}

}
else{
	echo "not connect";
}


?>