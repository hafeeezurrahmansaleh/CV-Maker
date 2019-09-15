<?php 
  if(empty($_SESSION)) // if the session not yet started 
      session_start(); 
    if( !isset($_SESSION['uid']) ){
      session_destroy();
      header('location: index.php');
  }
  $uid=$_SESSION['uid'];
  $_SESSION['message'] = '';
  
  include 'store.php';

  if (!empty($_POST['form1'])) {
    store_pinfo();
  }
  if (!empty($_POST['form2'])) {
    store_education();
  }
  if (!empty($_POST['form3'])) {
    store_experience();
  }
  if (!empty($_POST['form4'])) {
    store_personal_skills();
  }
  if (!empty($_POST['form5'])) {
    store_professional_skills();
  }
  if (!empty($_POST['form6'])) {
    store_languages();
  }
  if (!empty($_POST['form7'])) {
    store_awards();
  }

?>

<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="css/form.css" type="text/css">
<link rel="stylesheet" type="text/css" href="css/">

<meta name="viewport" content="width=device-width, initial-scale=1">
<div class="body-content">

  <div class="module">
    <div class="tab" >
      <button class="tablinks" onclick="category(event, 'personalInfo')">Personal Info</button>
      <button class="tablinks" onclick="category(event, 'education')">Education</button>
      <button class="tablinks" onclick="category(event, 'experience')">Experience</button>
      <button class="tablinks" onclick="category(event, 'personal_skills')">Personal Skills</button>
      <button class="tablinks" onclick="category(event, 'pro_skills')">Pro Skills</button>
      <button class="tablinks" onclick="category(event, 'languages')">Languages</button>
      <button class="tablinks" onclick="category(event, 'awards')">Awards</button>
    </div>
   
    <div id="personalInfo" class="tabcontent" >
      <form class="form" action="userprofile.php" method="post" enctype="multipart/form-data" >
        <div class="infield">
          <h1>PERSONAL INFORMATION</h1>
          <div class="alert alert-error"></div>
          <input type="text" placeholder="Full Name" name="fullname" required />
          <input type="text" placeholder="Profession " name="profession" required />
          <input type="text" placeholder="Contact Number" name="contact" required />
          <input type="text" placeholder="Personal Web Profile" name="web" required />
          <input type="email" placeholder="Email" name="email" required />
          <input type="text" placeholder="Address" name="address" required />
          <textarea  placeholder="About Me" name="about" required ></textarea>

          <input type="text" placeholder="Test value" name="test" required />
          <div class="avatar"><label>Select your image: </label><input type="file" name="avatar" accept="image/*" required /></div>
          <input type="submit" value="Save Info" name="form1" class="btn btn-block btn-primary" />
        </div>
      </form>
    </div>
    

    <div id="education" class="tabcontent">
      <form class="form" action="userprofile.php" method="post" enctype="multipart/form-data" >
        <div class="infield">
          <h1>EDUCATIONAL INFORMATION</h1>
          <div class="alert alert-error"></div>
          <h3>About your last achieved degree:</h3>
          <input type="text" placeholder="Institute" name="institute1" required />
          <input type="text" placeholder="Study Duration " name="duration1" required />
          <textarea placeholder="Short Description" name="description1" required ></textarea>
          <h3>About your second last achieved degree:</h3>
          <input type="text" placeholder="Institute" name="institute2" required />
          <input type="text" placeholder="Study Duration " name="duration2" required />
          <textarea placeholder="Short Description" name="description2" required ></textarea>
          <input type="submit" value="Save Info" name="form2" class="btn btn-block btn-primary" />
        </div>
      </form>
    </div>


    <div id="experience" class="tabcontent">
      <form class="form" action="userprofile.php" method="post" enctype="multipart/form-data" >
        <div class="infield">
          <h1>YOUR WORK EXPERIENCE</h1>
          <div class="alert alert-error"></div>
          <h3>Experience-1</h3>
          <input type="text" placeholder="Designation" name="designation1" required />
          <input type="text" placeholder="Work-duration" name="workDuration1" required />
          <textarea placeholder="Brief Description" name="workDetails1" required ></textarea>
          <h3>Experience-2</h3>
          <input type="text" placeholder="Designation" name="designation2" required />
          <input type="text" placeholder="Work-duration " name="workDuration2" required />
          <textarea placeholder="Brief Description" name="workDetails2" required ></textarea>
        </textarea><h3>Experience-3</h3>
          <input type="text" placeholder="Designation" name="designation3" required />
          <input type="text" placeholder="Work-duration " name="workDuration3" required />
          <textarea placeholder="Brief Description" name="workDetails3" required ></textarea>
          <input type="submit" value="Save Info" name="form3" class="btn btn-block btn-primary" />
        </div>
      </form>
    </div>


    <div id="personal_skills" class="tabcontent">
      <form class="form" action="userprofile.php" method="post" enctype="multipart/form-data" >
        <div class="infield">
          <h1>PERSONAL SKILLS</h1>
          <div class="alert alert-error"></div>
          <h3>Skill-1</h3>
          <input type="text" placeholder="Skill-1" name="pskill1" required />
          <input type="Number" placeholder="Skill Level (out of 100)" name="pskillPercentage1" required />
          <h3>Skill-2</h3>
          <input type="text" placeholder="Skill-2" name="pskill2" required />
          <input type="Number" placeholder="Skill Level (out of 100)" name="pskillPercentage2" required />
          <h3>Skill-3</h3>
          <input type="text" placeholder="Skill-3" name="pskill3" required />
          <input type="Number" placeholder="Skill Level (out of 100)" name="pskillPercentage3" required />
          <h3>Skill-4</h3>
          <input type="text" placeholder="Skill-4" name="pskill4" required />
          <input type="Number" placeholder="Skill Level (out of 100)" name="pskillPercentage4" required />
          <h3>Short Details about your skills</h3>
          <textarea placeholder="Short descriptipn" name="about" required ></textarea>
          <input type="submit" value="Save Info" name="form4" class="btn btn-block btn-primary" />
        </div>
      </form>
    </div>


    <div id="pro_skills" class="tabcontent">
      <form class="form" action="userprofile.php" method="post" enctype="multipart/form-data" >
        <div class="infield">
          <h1>PROFESSIONAL SKILLS</h1>
          <div class="alert alert-error"></div>
          <h3>Pro Skill-1</h3>
          <input type="text" placeholder="Skill-1" name="proskill1" required />
          <input type="Number" placeholder="Skill Level (out of 100)" name="proskillPercentage1" required />
          <h3>Pro Skill-2</h3>
          <input type="text" placeholder="Skill-2" name="proskill2" required />
          <input type="Number" placeholder="Skill Level (out of 100)" name="proskillPercentage2" required />
          <h3>Pro Skill-3</h3>
          <input type="text" placeholder="Skill-3" name="proskill3" required />
          <input type="Number" placeholder="Skill Level (out of 100)" name="proskillPercentage3" required />
          <h3>Pro Skill-4</h3>
          <input type="text" placeholder="Skill-4" name="proskill4" required />
          <input type="Number" placeholder="Skill Level (out of 100)" name="proskillPercentage4" required />
          <input type="submit" value="Save Info" name="form5" class="btn btn-block btn-primary" />
        </div>
      </form>
    </div>


    <div id="languages" class="tabcontent">
      <form class="form" action="userprofile.php" method="post" enctype="multipart/form-data" >
        <div class="infield">
          <h1>LANGUAGES YOU KNOW</h1>
          <div class="alert alert-error"></div>
          <h3>Language-1</h3>
          <input type="text" placeholder="Language-1" name="language1" required />
          <input type="Number" placeholder="Language Level (out of 100)" name="langPercentage1" required />
          <h3>Language-2</h3>
          <input type="text" placeholder="Language-2" name="language2" required />
          <input type="Number" placeholder="Language Level (out of 100)" name="langPercentage2" required />
          <h3>Language-3</h3>
          <input type="text" placeholder="Language-3" name="language3" required />
          <input type="Number" placeholder="Language Level (out of 100)" name="langPercentage3" required />
          <h3>Language-4</h3>
          <input type="text" placeholder="Language-4" name="language4" required />
          <input type="Number" placeholder="Language Level (out of 100)" name="langPercentage4" required />
          <input type="submit" value="Save Info" name="form6" class="btn btn-block btn-primary" />
        </div>
      </form>
    </div>


    <div id="awards" class="tabcontent">
      <form class="form" action="userprofile.php" method="post" enctype="multipart/form-data" >
        <div class="infield">
          <h1>AWARDS YOU HAVE TAKEN</h1>
          <div class="alert alert-error"></div>
          <input type="text" placeholder="Award-1" name="award1" required />
          <input type="text" placeholder="Award-2" name="award2" required />
          <input type="text" placeholder="Award-3" name="award3" required />
          <input type="text" placeholder="Award-4" name="award4" required />
          <input type="submit" value="Save Info" name="form7" class="btn btn-block btn-primary" />
        </div>
      </form>
    </div>  
    <script>
      document.getElementsByClassName('tablinks')[0].click();
      function category(evt, categoryName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");

        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(categoryName).style.display = "block";
        evt.currentTarget.className += " active";
      }
    </script>
   
  </div>
</div>
<script> //for stopping resubmission form
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>