<link rel="stylesheet" href="form.css">
<?php 
/* welcome.php */

//$_SESSION variables become available on this page
//include 'index.php';
session_start(); 
$uid=$_SESSION['uid'];
?>
<div class="body content">
<div class="welcome">
<div class="alert alert-success"><?= $_SESSION['message'] ?></div>
    <img src="<?= $_SESSION['avatar'] ?>"><br />
    Welcome <span class="user"><?= $_SESSION['username'] ?></span>
    <?php
    $mysqli = new mysqli("localhost", "root", "mypass123", "accounts_complete");
    $sql = "SELECT username, avatar FROM users";
    //$result = mysqli_result object
    $result = $mysqli->query( $sql ); 
    ?>
    <div id='registered'>
    <span>All registered users:</span>
    <?php
    //returns associative array of fetched row
    /*while( $row = $result->fetch_assoc() ){ 
        echo "<div class='userlist'><span>".$row['username']."</span><br />";
        echo "<img src='".$row['avatar']."'></div>";
    }*/
    $con=mysqli_connect("localhost", "root", "", "cv");
    $sql = "SELECT * FROM user where id='".$uid."'";
    $result = $mysqli->query($sql);

    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result) == 1)
      {
        echo "Hi".$row['id'];
        echo "Hi".$row['fullName'];
        echo "Hi".$row['email'];
        echo "Hi".$row['gender'];
      }
    mysqli_close($con);
    
?>  
</div>
</div>
</div>