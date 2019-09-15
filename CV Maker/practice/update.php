<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method='POST' name="form1">
		<input type="text" name="fname">
		<input type="text" name="sname">
		<input type="email" name="email">
		<input type="text" name="gender">
		<input type="submit" name="submit" value="Update">

	</form>
</body>
</html>



<?php
if (!empty($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST') {

	$id=$_GET['id'];
	echo $_POST['fname'];
	$con=mysqli_connect("localhost","root","","cv");
	$sql="UPDATE user set fullName='".$_POST['fname']."', surName='".$_POST['sname']."', email='".$_POST['email']."', gender='".$_POST['gender']."' where id=".$id;
	mysqli_query($con, $sql);
	mysqli_close($con);
	header( 'location: userlist.php');
}
?>