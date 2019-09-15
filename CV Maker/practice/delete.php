<?php
	$id=$_GET['id'];
	echo '<script language="javascript">';
    echo 'confirm("message successfully sent")';
    echo '</script>';
	$con=mysqli_connect("localhost","root","","cv");
	$sql="DELETE from user where id='".$id."'";
	mysqli_query($con, $sql);
	mysqli_close($con);
	header( 'location: userlist.php');
?>