<table align="center" width="800" border="1">
<tr>
<th>name</th>
<th>gender</th>
<th>contact</th>
<th>workshop</th>
<th>email</th>
<th>dob</th>
<th>college</th>
<th>address</th>
</tr>
<?php
include  "connection.php";
$sql="select * from t";
$res=mysqli_query($con,$sql);
while ($arr=mysqli_fetch_array($res)) 
{
?>
<tr>
<th><?php echo $arr['name'];?></th>
<th><?php echo $arr['gender'];?></th>
<th><?php echo $arr['contact'];?></th>
<th><?php echo $arr['workshop'];?></th>   
<th><?php echo $arr['email'];?></th>
<th><?php echo $arr['dob'];?></th>
<th><?php echo $arr['college'];?></th>
<th><?php echo $arr['address'];?></th>

<th><a href="delete.php?uid=<?php echo $arr['id']; ?>">delete</a></th>
</tr>
<?php }
?>
</table>
                       
