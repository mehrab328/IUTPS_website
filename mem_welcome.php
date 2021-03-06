<!DOCTYPE>
<?php
   include("session.php");
?>
<html>
<head>
  <title>IUTPS Login</title>

  <link rel="stylesheet" type="text/css" href="css/i_style.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
   <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>

</head>

<body>
	<div id="main">
    <div id="header">
	  <div id="banner" style="display: inline">
	    <div id="welcome">
		<br>
		<img width="100" height="90" src="images/black-02.png" alt="iutps logo" style="float: left"/>
		  <h1>IUT Photography Society</h1>
		  <h2>Photography came in my life (Slogan)</h2>
	    </div><!--close welcome-->
	    <!--<div id="welcome_slogan">
	      <h1>Photography came in my life (Slogan)</h1>
	    </div><!--close welcome_slogan-->
	  </div><!--close banner-->
    </div><!--close header-->

	<div id="menubar">
	<nav class="menu">
      <ul class="clearfix">
        <li><a href="index.php">Home</a></li>
		<li class="current-item"><a href="mem_welcome.php">Your Profile</a></li>
        <!--<li><a href="mem_login.php">Member's Login</a></li>-->
		<li><a href="#">Information<span class="arrow">&#9660;</span></a>
			<ul class="sub-menu">
              <li><a href="information/history.php">History</a></li>
              <li><a href="information/services.php">Services</a></li>
			  <li><a href="information/member_list.php">Members</a></li>
			  <li><a href="information/faq.php">FAQ</a></li>
			  <li><a href="information/join.php">Join Us</a></li>
            </ul>
		</li>
        <li><a href="gallary.php">Gallery</a></li>
        <li><a href="blog.php">Blog</a></li>
		<!--<li class="current-item"><a href="mem_welcome.php">Profile</a></li>-->
		<li><a href="contact.php">Contact Us</a></li>
      </ul>
	  </nav>
    </div><!--close menubar-->
	
	<div id="site_content">		

	  <div class="sidebar_container">       
		<div class="sidebar">
          <div class="sidebar_item">
            <h2>Latest Update</h2>
            <h3>25th March 2016</h3>
            <p>Meeting will be held at 4.00PM. Everyone should come at room 405.</p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->     		
		<div class="sidebar">
          <div class="sidebar_item">
            <h2>Upcoming Events</h2>
            <h3>January 2016</h3>
            <p>PS Freshers. First year students should be introduced with us.</p>         
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
		<div class="sidebar">
          <div class="sidebar_item">
            <h3>May 2016</h3>
            <p>Exhibition. Some good photos of PS member's will be displayed in Student Center </p>         
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->  
		<div class="sidebar">
          <div class="sidebar_item">
            <h3>November 2016</h3>
            <p>Break The Circle, Inter Photography Competition of different universities.</p>         
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->  		
       </div><!--close sidebar_container-->	
	   
	<div class="slideshow">
	    <ul class="slideshow">
          <li class="show"><img width="680" height="250" src="images/001.jpg" alt="&quot;Preparation of 2nd Intra IUT Photography Exhibition of 2015&quot;" /></li>
          <li><img width="680" height="250" src="images/002.jpg" alt="&quot;IUT&quot;" /></li>
        </ul>
      </div>   
	   
	<div id="content">
        <div class="content_item">
		 	  <?php
		//include("config.php");
	
			$selectTest = "SELECT * FROM member_info where STD_ID = '$login_session' ";
			
			$result = mysqli_query($con, $selectTest);
	
			if (!$result) {
			printf("Error: %s\n", mysqli_error($con));
				exit();
			}
	
			$row = mysqli_fetch_array($result);
			echo "<h2>Welcome ".$row['NAME'] . " ! </h2><br/>";
			
			echo "<p>Student ID</span> : ".$row['STD_ID'] . "<br />";
			echo "<p>Name</span> : ".$row['NAME'] . "<br />";
			echo "<p>Department</span> : ".$row['DEPT'] . "<br />";
			echo "<p>Batch</span> : ".$row['BATCH'] . "<br />";
			echo "<p>Phone Number</span> : ".$row['PHONE_NO'] . "<br />";
			echo "<p>E-mail</span> : ".$row['EMAIL'] . "<br />";
			echo "<p>Designation</span> : ".$row['DESIGNATION'] . "<br />";
			//echo "<p>Password</span> : ".$row['PASSWORD'] . "<br />";
			echo "<p>Present Address</span> : ".$row['PRES_ADR'] . "<br />";
			echo "<p>Permanent Address</span> : ".$row['PERM_ADR'] . "<br />";
			echo "<p>Current Job</span> : ".$row['CURRENT_JOB'] . "<br />";
	
?>


		<div id="content_bottom1">
	  <div class="content_bottom_container_boxl">
		<div class="readmore1">
		  <a href="edit_pro.php">Edit Profile</a>
		</div><!--close readmore-->
	  </div><!--close content_bottom_container_box-->
      <div class="content_bottom_container_boxl">
        <div class="readmore1">
		  <a href="write_blog.php">Write Blog</a>
		</div><!--close readmore-->
	  </div><!--close content_bottom_container_box-->
      <div class="content_bottom_container_boxl">
		  <div class="submit1">
		  <a href = "logout.php">Logout</a>
		</div><!--close readmore-->	  
	  </div><!--close content_bottom_container_box1-->      
	</div><!--close content_bottom-->  
		
		
		
	  
      <!--<h2><a href = "logout.php">Log Out</a></h2>-->
	  
		</div><!--close content_item-->
      </div><!--close content-->  
    </div><!--close site_content-->  

	<div id="content_bottom">
	  <div class="content_bottom_container_box">
		<h4>Latest Blog Post</h4>
	    <p> Phasellus laoreet feugiat risus. Ut tincidunt, ante vel fermentum iaculis.</p>
		<div class="readmore">
		  <a href="#">Read more</a>
		</div><!--close readmore-->
	  </div><!--close content_bottom_container_box-->
      <div class="content_bottom_container_box">
       <h4>Latest News</h4>
	    <p> Phasellus laoreet feugiat risus. Ut tincidunt, ante vel fermentum iaculis.</p>
	    <div class="readmore">
		  <a href="#">Read more</a>
		</div><!--close readmore-->
	  </div><!--close content_bottom_container_box-->
      <div class="content_bottom_container_box">
		<h4>News Latter</h4>
	    <p> Phasellus laoreet feugiat risus. Ut tincidunt, ante vel fermentum iaculis.</p>
	    <div class="readmore">
		  <a href="#">Read more</a>
		</div><!--close readmore-->	  
	  </div><!--close content_bottom_container_box1-->      
	  <br style="clear:both"/>
    </div><!--close content_bottom-->   
    </div><!--close main-->
	
	<div id="footer">
	  <a href="https://www.facebook.com/IUTPS/">IUTPS</a> | Copyright | <a href="http://facebook.com/muhaimenul">Muhaimenul Islam</a>
    </div><!--close footer--> 
	
	
	</div>
</body>
</html>