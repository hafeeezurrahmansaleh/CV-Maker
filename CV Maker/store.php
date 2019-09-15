<?php
  		$u_id=$_SESSION['uid'];
    
  function store_pinfo(){
    if(!empty($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST'){
      $con=mysqli_connect("localhost", "root", "", "cv");

          
          $fullname = $_POST['fullname'];
          $profession = $_POST['profession'];
          $contact = $_POST['contact'];
          $web = $_POST['web'];
          $email = $_POST['email'];
          $address = $_POST['address'];
          $about = $_POST['about'];
          $test = $_POST['test'];

          //path were our avatar image will be stored
          $avatar_path = 'images/'.$_FILES['avatar']['name'];
          
          //make sure the file type is image
          if (preg_match("!image!",$_FILES['avatar']['type'])) {
              
              //copy image to images/ folder 
              if (copy($_FILES['avatar']['tmp_name'], $avatar_path)){
                  
                  //set session variables to display on welcome page
                  $_SESSION['fullname'] = $fullname;
                  $_SESSION['avatar'] = $avatar_path;

                  //insert user data into database
                  $sql = "INSERT INTO personal_info (u_id, name, profession, contact, web, mail, address, about, avatar_path, test) VALUES ('".$u_id."', '".$fullname."', '".$profession."', '".$contact."', '".$web."', '".$email."', '".$address."', '".$about."', '".$avatar_path."', '".$test."')";
                  
                  //check if mysql query is successful
                  if (mysqli_query($con, $sql)){
                      $_SESSION['message'] = "Personal informations addes successfully!"
                      . "Added $username to the database!";
                      header("location: welcome.php");
                  }
              else {
                      $_SESSION['message'] = 'User could not be added to the database!'.mysqli_error($con);
                  }
                  mysqli_close($con);          
              }
              else {
                  $_SESSION['message'] = 'File upload failed!';
              }
          }
          else {
              $_SESSION['message'] = 'Please only upload GIF, JPG or PNG images!';
          }

      print($_SESSION['message']);
    } //if ($_SERVER["REQUEST_METHOD"] == "POST")
  }
  function store_education(){
    if(!empty($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST'){
      $con=mysqli_connect("localhost", "root", "", "cv");

      $u_id=$_SESSION['userid'];
      $institute1 = $_POST['institute1'];
      $duration1 = $_POST['duration1'];
      $description1 = $_POST['description1'];
      $institute2 = $_POST['institute2'];
      $duration2 = $_POST['duration2'];
      $description2 = $_POST['description2'];

      $_SESSION['institute1'] = $institute1;
      $_SESSION['institute2'] = $institute2;

      //insert user data into database
      
      //check if mysql query is successful
      for ($i=1; $i <=2 ; $i++) {
        if ($i==1) {
          $sql = "INSERT INTO education (u_id, institute, duration, description) VALUES ('".$u_id."', '".$institute1."', '".$duration1."', '".$description1."')";
        }
        else{
          $sql = "INSERT INTO education (u_id, institute, duration, description) VALUES ('".$u_id."', '".$institute2."', '".$duration2."', '".$description2."')";
        }
        if (mysqli_query($con, $sql)){
          $_SESSION['message'] = "Educational informations addes successfully!"
          . "Added $username to the database!";
          header("location: welcome.php");
        }
        else {
          $_SESSION['message'] = 'Informations could not be added to the database!'.mysqli_error($con);
          break;
        }
      }
      
    mysqli_close($con);
    echo '<script language="javascript">';
    echo 'alert("message successfully sent'.$_SESSION['message'].'")';
    echo '</script>';
    }
  }


function store_experience(){
    if(!empty($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST'){
      $con=mysqli_connect("localhost", "root", "", "cv");

      $u_id=$_SESSION['userid'];
      $designation1 = $_POST['designation1'];
      $workDuration1 = $_POST['workDuration1'];
      $workDetails1 = $_POST['workDetails1'];

      $designation2 = $_POST['designation2'];
      $workDuration2 = $_POST['workDuration2'];
      $workDetails2 = $_POST['workDetails2'];

      $designation3 = $_POST['designation3'];
      $workDuration3 = $_POST['workDuration3'];
      $workDetails3 = $_POST['workDetails3'];

      $_SESSION['designation1'] = $designation1;
      $_SESSION['designation2'] = $designation2;
      $_SESSION['designation3'] = $designation3;

      //insert user data into database
      
      //check if mysql query is successful
      for ($i=1; $i <=3 ; $i++) {
        if ($i==1) {
          $sql = "INSERT INTO experience (u_id, designation, duration, details) VALUES ('".$u_id."', '".$designation1."', '".$workDuration1."', '".$workDetails1."')";
        }
        else if ($i==2) {
          $sql = "INSERT INTO experience (u_id, designation, duration, details) VALUES ('".$u_id."', '".$designation2."', '".$workDuration2."', '".$workDetails2."')";
        }
        else{
          $sql = "INSERT INTO experience (u_id, designation, duration, details) VALUES ('".$u_id."', '".$designation3."', '".$workDuration3."', '".$workDetails3."')";
        }
        if (mysqli_query($con, $sql)){
          $_SESSION['message'] = "Experience informations addes successfully!"
          . "Added $username to the database!";
          header("location: welcome.php");
        }
        else {
          $_SESSION['message'] = 'Informations could not be added to the database!'.mysqli_error($con);
          break;
        }
      }
      
    mysqli_close($con);
    echo '<script language="javascript">';
    echo 'alert("message successfully sent'.$_SESSION['message'].'")';
    echo '</script>';
    }
  }


  function store_personal_skills(){
    if(!empty($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST'){
      $con=mysqli_connect("localhost", "root", "", "cv");

      $u_id=$_SESSION['userid'];
      $pskill1 = $_POST['pskill1'];
      $pskillPercentage1 = $_POST['pskillPercentage1'];

      $pskill2 = $_POST['pskill2'];
      $pskillPercentage2 = $_POST['pskillPercentage2'];

      $pskill3 = $_POST['pskill3'];
      $pskillPercentage3 = $_POST['pskillPercentage3'];

      $pskill4 = $_POST['pskill4'];
      $pskillPercentage4 = $_POST['pskillPercentage4'];
      $about=$_POST['about'];

      $_SESSION['pskill1'] = $pskill1;

      //insert user data into database
      
      //check if mysql query is successful
      for ($i=1; $i <=4 ; $i++) {
        if ($i==1) {
          $sql = "INSERT INTO personal_skills (u_id, skillName, percentage, about) VALUES ('".$u_id."', '".$pskill1."', '".$pskillPercentage1."', '".$about."')";
        }
        else if($i==2){
          $sql = "INSERT INTO personal_skills (u_id, skillName, percentage, about) VALUES ('".$u_id."', '".$pskill2."', '".$pskillPercentage2."', '".''."')";
        }
        else if($i==3){
          $sql = "INSERT INTO personal_skills (u_id, skillName, percentage, about) VALUES ('".$u_id."', '".$pskill3."', '".$pskillPercentage3."', '".''."')";
        }
        else {
          $sql = "INSERT INTO personal_skills (u_id, skillName, percentage, about) VALUES ('".$u_id."', '".$pskill4."', '".$pskillPercentage4."', '".''."')";
        }
        if (mysqli_query($con, $sql)){
          $_SESSION['message'] = "Personal skill informations addes successfully!";
          header("location: welcome.php");
        }
        else {
          $_SESSION['message'] = 'Informations could not be added to the database!'.mysqli_error($con);
          break;
        }
      } 
    mysqli_close($con);
    echo '<script language="javascript">';
    echo 'alert("message successfully sent'.$_SESSION['message'].'")';
    echo '</script>';
    }
  }

  function store_professional_skills(){
    if(!empty($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST'){
      $con=mysqli_connect("localhost", "root", "", "cv");

      $u_id=$_SESSION['userid'];
      $proskill1 = $_POST['proskill1'];
      $proskillPercentage1 = $_POST['proskillPercentage1'];

      $proskill2 = $_POST['proskill2'];
      $proskillPercentage2 = $_POST['proskillPercentage2'];

      $proskill3 = $_POST['proskill3'];
      $proskillPercentage3 = $_POST['proskillPercentage3'];

      $proskill4 = $_POST['proskill4'];
      $proskillPercentage4 = $_POST['proskillPercentage4'];

      //$_SESSION['proskill1'] = $proskill1;

      
      for ($i=1; $i <=4 ; $i++) {
        if ($i==1) {
          $sql = "INSERT INTO professional_skill (u_id, skillName, percentage) VALUES ('".$u_id."', '".$proskill1."', '".$proskillPercentage1."')";
        }
        else if($i==2){
          $sql = "INSERT INTO professional_skill (u_id, skillName, percentage) VALUES ('".$u_id."', '".$proskill2."', '".$proskillPercentage2."')";
        }
        else if($i==3){
          $sql = "INSERT INTO professional_skill (u_id, skillName, percentage) VALUES ('".$u_id."', '".$proskill3."', '".$proskillPercentage3."')";
        }
        else {
          $sql = "INSERT INTO professional_skill (u_id, skillName, percentage) VALUES ('".$u_id."', '".$proskill4."', '".$proskillPercentage4."')";
        }
        if (mysqli_query($con, $sql)){
          $_SESSION['message'] = "Professional skill informations addes successfully!";
          header("location: welcome.php");
        }
        else {
          $_SESSION['message'] = 'Informations could not be added to the database!'.mysqli_error($con);
          break;
        }
      } 
    mysqli_close($con);
    echo '<script language="javascript">';
    echo 'alert("message successfully sent'.$_SESSION['message'].'")';
    echo '</script>';
    }
  }

  function store_languages(){
    if(!empty($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST'){
      $con=mysqli_connect("localhost", "root", "", "cv");

      $u_id=$_SESSION['userid'];
      $language1 = $_POST['language1'];
      $langPercentage1 = $_POST['langPercentage1'];

      $language2 = $_POST['language2'];
      $langPercentage2 = $_POST['langPercentage2'];

      $language3 = $_POST['language3'];
      $langPercentage3 = $_POST['langPercentage3'];

      $language4 = $_POST['language4'];
      $langPercentage4 = $_POST['langPercentage4'];

      //$_SESSION['language1'] = $language1;


      for ($i=1; $i <=4 ; $i++) {
        if ($i==1) {
          $sql = "INSERT INTO language (u_id, language, percentage) VALUES ('".$u_id."', '".$language1."', '".$langPercentage1."')";
        }
        else if($i==2){
         $sql = "INSERT INTO language (u_id, language, percentage) VALUES ('".$u_id."', '".$language2."', '".$langPercentage2."')";
        }
        else if($i==3){
         $sql = "INSERT INTO language (u_id, language, percentage) VALUES ('".$u_id."', '".$language3."', '".$langPercentage3."')";
        }
        else {
          $sql = "INSERT INTO language (u_id, language, percentage) VALUES ('".$u_id."', '".$language4."', '".$langPercentage4."')";
        }
        if (mysqli_query($con, $sql)){
          $_SESSION['message'] = "Language informations addes successfully!";
          header("location: welcome.php");
        }
        else {
          $_SESSION['message'] = 'Informations could not be added to the database!'.mysqli_error($con);
          break;
        }
      } 
    mysqli_close($con);
    echo '<script language="javascript">';
    echo 'alert("message successfully sent'.$_SESSION['message'].'")';
    echo '</script>';
    }
  }
  function store_awards(){
    if(!empty($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST'){
      $con=mysqli_connect("localhost", "root", "", "cv");

      $u_id=$_SESSION['userid'];
      $award1 = $_POST['award1'];
      $award2 = $_POST['award2'];
      $award3 = $_POST['award3'];
      $award4 = $_POST['award4'];

      //$_SESSION['userid'] = $userid;

      //insert user data into database
      
      //check if mysql query is successful
      for ($i=1; $i <=4 ; $i++) {
        if ($i==1) {
          $sql = "INSERT INTO award (u_id, awardTitle) VALUES ('".$u_id."', '".$award1."')";
        }
        else if($i==2){
          $sql = "INSERT INTO award (u_id, awardTitle) VALUES ('".$u_id."', '".$award2."')";
        }
        else if($i==3){
         $sql = "INSERT INTO award (u_id, awardTitle) VALUES ('".$u_id."', '".$award3."')";
        }
        else {
          $sql = "INSERT INTO award (u_id, awardTitle) VALUES ('".$u_id."', '".$award4."')";
        }
        if (mysqli_query($con, $sql)){
          $_SESSION['message'] = "Award informations addes successfully!";
          header("location: welcome.php");
        }
        else {
          $_SESSION['message'] = 'Informations could not be added to the database!'.mysqli_error($con);
          break;
        }
      } 
    mysqli_close($con);
    echo '<script language="javascript">';
    echo 'alert("message successfully sent'.$_SESSION['message'].'")';
    echo '</script>';
    }
  }
?>