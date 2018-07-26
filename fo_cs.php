<?php
$x=$_REQUEST['t1'];
$y=$_REQUEST['t2'];
$name="abc@gmail.com";
$pas="hello";

if ($x==$name && $y==$pas) {
	header("location:jump.php");
}
else{
	header("location:index.php");
}

?>