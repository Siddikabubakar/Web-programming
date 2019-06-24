<?php
include("../database/config.php");
$sql="SELECT * from patient ";
$result=mysqli_query($myconn,$sql);
echo '<table border="2px" width="100%">
		<tr><th> Patient Id</th>
		<th> Name</th>
		<th> Email</th> </tr>';
while($row=mysqli_fetch_array($result))
{
	$p_id=$row['p_id'];
	$name=$row['name'];
	$email=$row['email'];
	echo'<tr><td>'.$p_id.'</td>
			  <td>'.$name.'</td>
			  <td>'.$email.'</td> </tr>';
}

?>