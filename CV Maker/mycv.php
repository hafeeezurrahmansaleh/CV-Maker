<?php

	if(empty($_SESSION)) // if the session not yet started 
   		session_start(); 
  	if( !isset($_SESSION['uid']) ){
  		session_destroy();
    	header('location: index.php');
	}
$uid=$_SESSION['uid'];
$con=mysqli_connect("localhost", "root", "", "cv");
    $sql = "SELECT * FROM personal_info where u_id='".$uid."'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result) == 1)
      {
        $fname=$row['name'];
        $prf=$row['profession'];
        $about=$row['about'];
        $test=$row['test'];
      }
    mysqli_close($con);

    function f(){
    	echo "ddddddddddddddddddd";
    }
 ?>



<!DOCTYPE html>
<html>
	<head>
		<title>Sample CV</title>
		<link rel="stylesheet" type="text/css" href="css/cv.css">
		<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lobster" />
	</head>

	<body >
		<form action="mycv.php">
			<input type="submit" name="s" onclick="f()">
		</form>
		<a href="userprofile.php">Edit Profile</a>
		<a href="logout.php">Log Out </a>
		<header class="top-bar">
		<div >
			<!--<img src="<?= $_SESSION['avatar'] ?>" class="pro-pic"><br />-->
			<img src="images/propic2.jpg" class="pro-pic" alt="Profile Pic">
		</div>
		<div class="name-about">
			<p class="name" value="" style="font-size: 45px; font-family:'lobster';" ><?php echo $fname;?></p>
			<p><?php echo $prf ;?></p>
			<p style="font-size: 13px; line-height: 15px">Madison is a director of brand marketing, with experience managing global teams and multi-million-dollar campaigns. Her background in brand strategy, visual design, and account management inform her mindful but competitive approach. </p>
		</div>
		<div class="contact-info">
			<div class="circle">
				<div style="float: left;">
					<img src="images/phn.png" class="c-image">
				</div>
				<div class="c-info">
					<p >(+88)01772066066</p>
				</div>
				
			</div>
			<div class="circle">
				<div style="float: left;">
					<img src="images/web.png" class="c-image">
				</div>
				<div class="c-info">
					<p >www.fb.com/hafeezurrahman.saleh</p>
				</div>
			</div>
			<div class="circle">
				<div style="float: left; margin-top: 6px;">
					<img src="images/mail.png" class="c-image">
				</div>
				<div class="c-info">
					<p >hafeezurrahman.saleh@gmil.com</p>
				</div>
			</div>
			<div class="circle">
				<div style="float: left;">
					<img src="images/address.png" class="c-image">
				</div>
				<div class="c-info">
					<span><p >15/1,Sobhanbag,Dhaka(1207)</p></span>
				</div>
			</div>
		</div>
		</header>
		<div class="main-section">

			<div class="section">
				<div id="pro-skills">
					<div class="cirlce2">
						<div style="float: left;">
							<img src="images/pskills1.png" class="category-image">
						</div>
						<div class="category-heading">
							<p style="display: inline;">Professional Skills</p>
						</div>
						<div class="rectangle" style="display: inline;"></div> 	
					</div>
					
					<div style="margin-left: 5px;">
						<div>
							<img src="images/proskill1.png" class="proskill-image">
							<p></p>

						</div>
						<div>
							<img src="images/proskill2.png" class="proskill-image">
						</div>
						<div>
							<img src="images/proskill3.png" class="proskill-image">
						</div>
						<div>
							<img src="images/proskill4.png" class="proskill-image">
						</div>
					</div> 
					<div>
						<div id="proskills-heading"><span>Front End Developer</span></div>
						<div id="proskills-details"><span>Professional skills are career competencies that often are not taught (or acquired) as part of the coursework required to earn your masters or PhD.  Professional skills such as leadership, mentoring, project management, and conflict resolution are valueadded skills essential to any career. While earning your degree, you'll need to hone these competencies</span></div>
						
					</div>

				</div>
				<div id="personal-skills">
					<div class="cirlce2">
						<div style="float: left; ">
							<img src="images/personalskills.png" class="category-image" style="margin-top: 4px;">
						</div>
						<div class="category-heading">
							<p style="display: inline;">Personal Skills</p>
						</div> 
						<div class="rectangle" style="margin-left: 215px; width: 185px"></div> 		
					</div>
					<div class="">
						<span class="pskillsname">COMMUNICATION</span><span class="pskillsrating">9/10</span><br>
						<div id="myProgress">
  							<div id="communication"></div>
						</div>
					</div>
					<div class=""><br>
						<span class="pskillsname">TEAM WORK</span><span class="pskillsrating">8/10</span><br>
						<div id="myProgress">
  							<div id="teamwork"></div>
						</div>
					</div>
					<div class=""><br>
						<span class="pskillsname">CREATIVITY</span><span class="pskillsrating">9/10</span><br>
						<div id="myProgress">
  							<div id="creativity"></div>
						</div>
					</div>
					<div class=""><br>
						<span class="pskillsname">DEDICATION</span><span class="pskillsrating">7/10</span><br>
						<div id="myProgress">
  							<div id="dedication"></div>
						</div>
					</div>
				</div><br>
				<div id="language">
					<div class="cirlce2">
						<div style="float: left;">
							<img src="images/language.png" class="category-image">
						</div>
						<div class="category-heading">
							<p style="display: inline;">Languages</p>
						</div>
						<div class="rectangle" style="margin-left: 170px; width: 230px"></div> 	
					</div>
					<div class=""><br>
						<span class="pskillsname">ENGILSH</span><span class="pskillsrating">85%</span><br>
						<div class="language">
  							<svg height="310" width="500">
							  <line x1="0" y1="0" x2="350" y2="00" stroke-dasharray="10,4.15" class="myProgressStroke" />
							</svg>
							<svg  height="310" width="500" style=" position: relative; top: -314px" >
							  <line  x1="0" y1="0" x2="280" y2="00" stroke-dasharray="10,4.15" id="english"/>
							</svg>
						</div>
					</div>
					<div style="position: relative; top: -615px;"><br>
						<span class="pskillsname">BENGALI</span><span class="pskillsrating">96%</span><br>
						<div class="language">
  							<svg height="310" width="500">
							  <line x1="0" y1="0" x2="350" y2="00" stroke-dasharray="10,4.15" class="myProgressStroke" />
							</svg>
							<svg  height="310" width="500" style=" position: relative; top: -314px" >
							  <line  x1="0" y1="0" x2="320" y2="00" stroke-dasharray="10,4.15" id="bangla"/>
							</svg>
						</div>
					</div>
					<div style="position: relative; top: -1230px"><br>
						<span class="pskillsname">GERMAN</span><span class="pskillsrating">40%</span><br>
						<div class="language">
  							<svg height="310" width="500">
							  <line x1="0" y1="0" x2="350" y2="00" stroke-dasharray="10,4.15" class="myProgressStroke" />
							</svg>
							<svg  height="310" width="500" style=" position: relative; top: -314px" >
							  <line  x1="0" y1="0" x2="165" y2="00" stroke-dasharray="10,4.15" id="german"/>
							</svg>
						</div>
					</div>
					
					<div style="position: relative; top: -1845px"><br>
						<span class="pskillsname">FRENCH</span><span class="pskillsrating">60%</span><br>
						<div class="language">
  							<svg height="310" width="500">
							  <line x1="0" y1="0" x2="350" y2="00" stroke-dasharray="10,4.15" class="myProgressStroke" />
							</svg>
							<svg  height="310" width="500" style=" position: relative; top: -314px" >
							  <line  x1="0" y1="0" x2="225" y2="00" stroke-dasharray="10,4.15" id="french"/>
							</svg>
						</div>
					</div>
				</div>
				</div>
			</div> 
			<div class="section">
				<div id="work-experience">
					<div class="cirlce2">
						<div style="float: left;">
							<img src="images/work.png" class="category-image">
						</div>
						<div class="category-heading">
							<p style="display: inline;">Work Experience</p>
						</div>
						<div class="rectangle" style="margin-left: 230px; width: 150px;" ></div> 	
					</div>
					<div style="margin-left: 27px"><br>
						<div>
							<img src="images/work-cirlce.png" class="work-circle" style="margin-bottom: -5px"><br>
							<img src="images/work-line.png" class="work-line">						
							<img src="images/work-cirlce.png" class="work-circle" style="margin-left: -15px"><br>
							<img src="images/work-line.png" class="work-line" style="margin-top: -5px"><br>
							<img src="images/work-cirlce.png" class="work-circle"><br>
							<img src="images/work-line.png" class="work-line" style="margin-top: -5px; height: 70px;"><br>
						</div>
						<div class="workexperoence-about">
							<span class="workexperoence-heading">PROJECT MANAGER 2018-PRESENT</span>
							<p class="workexperoence-details">Professional skills are career competencies that often are not taught (or acquired) as part of the coursework required to earn your masters or PhD. </p>
							<span class="workexperoence-heading">PROJECT MANAGER 2017-2018</span>
							<p class="workexperoence-details">Professional skills are career competencies that often are not taught (or acquired) as part of the coursework required to earn your masters or PhD. P</p><br>
							<span class="workexperoence-heading">FRONT END DEVELOPER 2016-2017</span>
							<p class="workexperoence-details">rofessional skills are career competencies that often are not taught (or acquired) as part of the coursework required to earn your masters or PhD. </p>
						</div>
					</div>
				</div>
				<div id="education">
					<div class="cirlce2">
						<div style="float: left; ">
							<img src="images/education.png" class="category-image" style="margin-top: 4px;">
						</div>
						<div class="category-heading">
							<p style="display: inline;">Education</p>
						</div> 
						<div class="rectangle" style="margin-left: 162px; width: 218px"></div> 		
					</div>
					<div style="margin-left: 27px"><br>
						<div>
							<img src="images/work-cirlce.png" class="work-circle" style="margin-bottom: -5px"><br>
							<img src="images/work-line.png" class="work-line" style="height: 130px;">						
							<img src="images/work-cirlce.png" class="work-circle" style="margin-left: -15px"><br>
							<img src="images/work-line.png" class="work-line" style="margin-top: -5px; height: 70px;"><br>
						</div>
						<div class="education-about">
							<span class="workexperoence-heading" style="font-size: 18px">DAFFODIL INTERNATIONAL UNIVERSITY <span style="font-size: 16; "  >(2016-PRESENT)</span></span>
							<p class="workexperoence-details">Professional skills are career competencies that often are not taught (or acquired) as part of the coursework required to earn your masters or PhD. </p>
							<span class="workexperoence-heading" style="font-size: 18px">AMRITA LAL DEY COLLEGE <span style="font-size: 16;"  > (2013-2015)</span></span>
							<p class="workexperoence-details">Professional skills are career competencies that often are not taught (or acquired) as part of the coursework required to earn your masters or PhD. P</p><br>
							
						</div>
					</div>
				</div>
				<div id="awards">
					<div class="cirlce2">
						<div style="float: left; ">
							<img src="images/award.png" class="category-image" style="margin-top: 4px;">
						</div>
						<div class="category-heading">
							<p style="display: inline;">Awards</p>
						</div> 
						<div class="rectangle" style="margin-left: 140px; width: 240px"></div> 		
					</div>
					<div style="margin-left: 38px;">
						<img src="images/Award 01.png" class="award-image">
						<img src="images/Award 02.png" class="award-image">
						<img src="images/Award 03.png" class="award-image">
					</div>
				</div>
				<div class="footer"></div>
				<div>
				</div> 
			</div>
			
	</body>
	</html>