<?php
$username=$_POST['username'];
$password=$_POST['password'];

$conn=mysqli_connect('localhost','root','','sad');
$sql="SELECT * from admin where username='$username' AND password='$password'";
$result=mysqli_query($conn,$sql);
$rowcount=mysqli_num_rows($result);
if ($rowcount==1) {

  header('Location: admininterface.php');
}
else
{
  header('Location: one.php');
}