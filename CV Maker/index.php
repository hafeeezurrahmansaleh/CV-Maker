<?php
  $_SESSION['message'] ='';
  if (!empty($_POST['signup'])) {
    register_user();
  }
  if (!empty($_POST['signin'])) {
    $email=$_POST['lemail'];
    $password=$_POST['lpassword'];
    signin($email,$password);
  }
  function signin($email, $password){
   if(!empty($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST'){
      $con=mysqli_connect("localhost", "root", "", "cv");
      
      $sql="SELECT id FROM user WHERE email='".$email."' and password='".$password."'";
      $result=mysqli_query($con,$sql);
      $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

      //If username and password exist in our database then create a session.
      //Otherwise echo error.
      if(mysqli_num_rows($result) == 1)
      {
        session_start(); 
        $_SESSION['uid'] = $row['id']; // Initializing Session
        header("location: mycv.php"); // Redirecting To Other Page
      }
      else
      { 
      echo '<script language="javascript">';
      echo 'alert("Incorrect username or password")';
      echo '</script>'; 
      mysqli_close($con);
      }
    }

  }
  function register_user(){
    if(!empty($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST'){
      $con=mysqli_connect("localhost", "root", "", "cv");

      //$u_id=$_SESSION['userid'];
      $name = $_POST['name'];
      $sname = $_POST['sname'];
      $age = $_POST['age'];
      $gender = $_POST['gender'];
      $pass = $_POST['password'];
      $email = $_POST['email'];

     // $_SESSION['institute1'] = $institute1;
      

      //insert user data into database
      
      //check if mysql query is successful
      $sql = "INSERT INTO user (fullName, surName, email, gender, password) VALUES ('".$name."', '".$sname."', '".$email."', '".$gender."', '".$pass."')";
      if (mysqli_query($con, $sql)){
        $_SESSION['message'] = "Registration Successful!";
        //header("location: welcome.php");
      }
      else {
        $_SESSION['message'] = 'Informations could not be added to the database!'.mysqli_error($con);
      }
    mysqli_close($con);
    echo '<script language="javascript">';
    echo 'alert("message successfully sent'.$_SESSION['message'].'")';
    echo '</script>';
    signin($email,$pass);
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">


  <script type="text/javascript">
  	function validation() {
  // body...
  var name = document.forms["form1"]["name"].value;
  var password = document.forms["form1"]["password"].value;
  var repassword = document.forms["form1"]["repassword"].value;
  var age = document.forms["form1"]["age"].value;
  if (name.length<5) {
    alert("Name cannot be <5 characters");
    return false;
  }
  if(age<18){
    alert("Sorry you are under age!");
    return false;
  }
  if (document.getElementById("agreement").checked !== true) {
    alert("You must accept terms and conditions!");
    return false;
  }
  if (password != repassword || password == "" || repassword=="") {
    alert("password doesn't match");
    return false;
  }
  </script>
  </head>
  <body>
  <div class="form">
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up </h1>
          <form  method="post" id="form1" action="index.php" >
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Full Name<span class="req">*</span>
              </label>
              <input type="text" required  name="name" />
            </div>
        
            <div class="field-wrap">
              <label>
                SurName<span class="req">*</span>
              </label>
              <input type="text"required  name="sname" />
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Age<span class="req">*</span>
            </label>
            <input type="number"required  name="age" />
          </div>
      
          <div >
            <div class="label">
              Gender<span class="req">*</span>
            </div><br>
            <div >
	            <!--<input type="radio" name="gender" value="male" class="radio">Male </input>
	            <input type="radio" name="gender" value="female" class="radio">Female</input>-->
              <select name="gender" class="input" style="color: black;">
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
            </div>
          </div><br>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required  name="email" />
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req" >*</span>
            </label>
            <input type="password"required name="password" />
          </div>
          
          <div class="field-wrap">
            <label>
              Re-type Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="repassword" />
          </div>

		    <div >
         <div >
			<span style="color: white;">I agree with the terms & conditions</span><input type="checkbox" id="agreement" value="Agree" style="position:relative; left: 250px; top: -20px; height: 20px; width: 20px;" />
			</div>
          </div>

          <button type="submit" name="signup" value="submit" onclick="return validation();" class="button button-block">Get Started</button>
          
          </form>
        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form method="post" id="form2" action="index.php" >
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required  name="lemail" />
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="lpassword" />
          </div>
          <p class="forgot"><a href="">Forgot Password?</a></p>
          <button type="submit" name="signin" value="signin"  class="button button-block">Log In</button>
          </form>

        </div>

      </div><!-- tab-content -->
      
  </div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="js/index.js"></script>
<script> //for stopping resubmission form
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
</body>
</html>