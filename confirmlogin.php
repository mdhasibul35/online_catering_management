<?php
$username=$_POST['username'];
$password=$_POST['password'];

$conn=mysqli_connect('localhost','root','','sad');

mysql_connect("localhost","root","");
mysql_select_db("sad");

$result=mysql_query("SELECT * FROM register WHERE username='$username'and password='$password'")
or die("failed".mysql_error());
$row=mysql_fetch_array($result);

if($row['username']==$username && $row['password']==$password){
	echo "yes";
}
else{
   echo "sorry";
}

?>

//if(isset($_POST['register'])){
	///$username=mysqli_real_escape_string($conn,$_POST['username']);
	//$password=mysqli_real_escape_string($conn,$_POST['password']);
	//if($username!="" && $password!=""){
	//	$sql="SELECT id FROM register WHERE username='$username'and password='$password'";
	//	$result=mysqli_query($conn,$sql);
	//	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

	//	$count=mysqli_num_rows($result);
	//	if($count==1)
	//	{
	//		echo "jjjj";
	//		header("location: show.php");
	//	}
	//}
//}