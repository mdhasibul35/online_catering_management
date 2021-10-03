
<?php
$id=$_GET['id'];
$conn=mysqli_connect('localhost','root','','sad');
if($conn)

{
  $sql="DELETE  FROM `cater` WHERE id=$id";
  if (mysqli_query($conn,$sql)) {
  	header("Location: showorder.php");
  }

}
else{
  echo "not Deleted";
}
?>

