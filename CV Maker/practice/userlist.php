<?php 
	$con=mysqli_connect("localhost","root","","cv");

	echo "<table border ='1' cellspacing='2' cellpadding='2'>";
	echo "<tr bgcolor='#CCCCCC'>";
	echo "<td><center>Full Name</center></td>";
	echo "<td><center>Sur Name</center></td>";
	echo "<td><center>Emil</center></td>";
	echo "<td><center>Gender</center></td>";
	echo "<td><center>Action</center></td>";
	echo "</tr>";

	$sql="Select * from user";
	$result=mysqli_query($con, $sql);
	while ($row=mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$row['fullName']."</td>";
		echo "<td>".$row['surName']."</td>";
		echo "<td>".$row['email']."</td>";
		echo "<td>".$row['gender']."</td>";
		 echo "<td><a href='update.php?id=".$row['id']."'>Edit</a> | <a href='delete.php?id=".$row['id']."' onClick=\'return confirm('Are you sure you want to delete?')\'>Delete</a></td>";   
		echo "</tr>";
	}
	echo "</table>";
	mysqli_close($con);
?>