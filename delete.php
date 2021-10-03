
<?php
$id=$_GET['id'];
$conn=mysqli_connect('localhost','root','','sad');
if($conn)

{
  $sql="DELETE  FROM `register` WHERE id=$id";
  if (mysqli_query($conn,$sql)) {
  	header("Location: showcustomer.php");
  }

}
else{
  echo "not Deleted";
}
?>