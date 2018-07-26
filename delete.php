<?php
include"connection.php";
$id=$_REQUEST['uid'];
$sql="delete from t where id='$id'";
mysqli_query($con,$sql);
header("location:jump.php")
?>