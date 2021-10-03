<?php
 
 $username=$_POST['username'];
 $cell_no=$_POST['cell_no'];
 $address=$_POST['address'];
 $amount=$_POST['amount'];
$conn=mysqli_connect('localhost','root','','sad');
if($conn)

{

	$sql="INSERT INTO cater VALUES(NULL,'$username','$cell_no','$address','$amount')";
	

	if (mysqli_query($conn,$sql)) {
		
		header("Location: caterconfirm.php");
	}
}
else{
	echo "not connect";
}

?>