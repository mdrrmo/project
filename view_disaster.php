<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>NDRRMC</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />

<link rel="icon" href="images/logo.jpg" type="image" />
<link rel="shortcut icon" href="images/logo.jpg" type="image" />

<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.slidepanel.setup.js"></script>
<script type="text/javascript" src="scripts/jquery.cycle.min.js"></script>
<script type="text/javascript" src="scripts/jquery.cycle.setup.js"></script>
</head>
<body>
<div class="wrapper col0">
  <div id="topbar">
    <div id="slidepanel">
<!--MESSAGE-->	
      <div class="topbox">
		<img src="images/logo2.png" alt="logo" width="270" height="120">
		<h2>Warning:</h2>
        <p>This slide panel is for the administrator use only.</p>
      </div>
<!--MESSAGE-->		  
      <div class="topbox">
        <h2>Administrator Login Here</h2>
        <form action="#" method="post">
          <fieldset>
            <legend>Teachers Login Form</legend>
            <label for="teachername">Username:
              <input type="text" name="teachername" id="teachername" value="" />
            </label>
            <label for="teacherpass">Password:
              <input type="password" name="teacherpass" id="teacherpass" value="" />
            </label>
            <label for="teacherremember">
              <input class="checkbox" type="checkbox" name="teacherremember" id="teacherremember" checked="checked" />
              Remember me</label>
            <p>
              <input type="submit" name="teacherlogin" id="teacherlogin" value="Login" />
              &nbsp;
              <input type="reset" name="teacherreset" id="teacherreset" value="Reset" />
            </p>
          </fieldset>
        </form>
      </div>
<!--	  
      <div class="topbox last">
        <h2>Pupils Login Here</h2>
        <form action="#" method="post">
          <fieldset>
            <legend>Pupils Login Form</legend>
            <label for="pupilname">Username:
              <input type="text" name="pupilname" id="pupilname" value="" />
            </label>
            <label for="pupilpass">Password:
              <input type="password" name="pupilpass" id="pupilpass" value="" />
            </label>
            <label for="pupilremember">
              <input class="checkbox" type="checkbox" name="pupilremember" id="pupilremember" checked="checked" />
              Remember me</label>
            <p>
              <input type="submit" name="pupillogin" id="pupillogin" value="Login" />
              &nbsp;
              <input type="reset" name="pupilreset" id="pupilreset" value="Reset" />
            </p>
          </fieldset>
        </form>
      </div>
-->
      <br class="clear" />
    </div>
    <div id="loginpanel">
      <ul>
        <li class="left">Log In &raquo;</li>
        <li class="right" id="toggle"><a id="slideit" href="#slidepanel">Administration</a><a id="closeit" style="display: none;" href="#slidepanel">Close Panel</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- #################################-------NAVIGATOR------################################################# -->
<div class="wrapper col1">
  <div id="header">
	<div id="logo"><br>
		<img src="images/banner3.jpg" alt="logo" width="960" height="150">
    </div>
    <div id="topnav">
      <ul>
		<li><a href="#"></a></li>
		<li><a href="#"></a></li>
				<li><a href="#"></a></li>
		<li><a href="#"></a></li>
	    <li><a href="index.php">Home</a></li>
        <li><a href="news.php">News</a></li>
		<li><a href="">Disaster's Info</a>
			<ul>
				<?php
					require_once("connect.php");
					$query="SELECT * FROM disaster_tbl";
					$result=mysql_query($query);
														
						while($row=mysql_fetch_array($result))
							{		
								echo"
									<li><a href='view_disaster.php?id= $row[disaster_id]' >$row[title]</a></li>
									";
							}
				?>		
			</ul>
		</li>

		<li><a href="about.php">About Us</a></li>
        <li class="last"><a href="contact.php">Contact Us</a></li>
		<li><a href="#"></a></li>
		<li><a href="#"></a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- #################################-------NAVIGATOR------################################################# -->
<!-- ###################################------CONTENT-----############################################## -->
<br><br>
<div class="wrapper col3">
  <div id="container">
    <div id="content">
	  	<?php
		require_once('connect.php');
		$query = "SELECT * FROM disaster_tbl WHERE disaster_id ='$_GET[id]'";
		$result = mysql_query($query);
		while($row = mysql_fetch_array($result)){
			 
			echo"
				<h1>$row[title]</h1>
				<img class = 'imgholder' src = 'img/disaster/$row[cover]' width='600' height='300'/>
				<br>
				<p>$row[descrip]</p>
				<br><br><br>
				";
				}
		?>

<!-- ###################################------WHAT TO DO-----############################################## -->
      <div id="comments">
        <h2>Tips</h2>
        <ul class="commentlist">
<!-- ###################################------BEFORE-----############################################## -->		
          <li class="comment_odd">
            <div class="author"><span class="name"><a href="#">WHAT TO DO BEFORE</a></span> </div>
				<?php
				require_once('connect.php');
				$query = "SELECT * FROM disaster_tbl WHERE disaster_id ='$_GET[id]'";
				$result = mysql_query($query);
				while($row = mysql_fetch_array($result)){
					 
					echo"
						<br>
						<img class = 'imgholder' src = 'img/disaster/before/$row[before]' width='570' height='200'/>
						";
						}
				?>
	      </li>
<!-- ###################################------DURING-----############################################## -->	  
          <li class="comment_even">
            <div class="author"><span class="name"><a href="#">WHAT TO DO DURING</a></span> </div>
				<?php
				require_once('connect.php');
				$query = "SELECT * FROM disaster_tbl WHERE disaster_id ='$_GET[id]'";
				$result = mysql_query($query);
				while($row = mysql_fetch_array($result)){
					 
					echo"
						<br>
						<img class = 'imgholder' src = 'img/disaster/during/$row[during]' width='570' height='200'/>
						";
						}
				?>			
          </li>
<!-- ###################################------AFTER-----############################################## -->		  
          <li class="comment_odd">
            <div class="author"><span class="name"><a href="#">WHAT TO DO AFTER</a></span> </div>
				<?php
				require_once('connect.php');
				$query = "SELECT * FROM disaster_tbl WHERE disaster_id ='$_GET[id]'";
				$result = mysql_query($query);
				while($row = mysql_fetch_array($result)){
					 
					echo"
						<br>
						<img class = 'imgholder' src = 'img/disaster/after/$row[after]' width='570' height='200'/>
						";
						}
				?>			
          </li>
<!-- ###################################------WHAT TO DO-----############################################## --> 
        </ul>
      </div>
<!-- ###################################------WHAT TO DO-----############################################## -->



<!-- ###################################------CONMENTS CONTENT-----############################################## -->		
<!-- .............................................................................	  
      <h2>Write A Comment</h2>
      <div id="respond">
        <form action="#" method="post">
          <p>
            <input type="text" name="name" id="name" value="" size="22" />
            <label for="name"><small>Name (required)</small></label>
          </p>
          <p>
            <input type="text" name="email" id="email" value="" size="22" />
            <label for="email"><small>Mail (required)</small></label>
          </p>
          <p>
            <textarea name="comment" id="comment" cols="100%" rows="10"></textarea>
            <label for="comment" style="display:none;"><small>Comment (required)</small></label>
          </p>
          <p>
            <input name="submit" type="submit" id="submit" value="Submit Form" />
            &nbsp;
            <input name="reset" type="reset" id="reset" tabindex="5" value="Reset Form" />
          </p>
        </form>
      </div>
	  -->
<!-- ###################################------CONMENTS CONTENT-----############################################## -->		
	  
    </div>
<!-- ###################################------SIDE BAR-----############################################## -->	
	 <div id="column">
      <div class="subnav">
        <h2>List of Disaster</h2>
		<ul>
		<?php
			require_once("connect.php");
			$query="SELECT * FROM disaster_tbl";
			$result=mysql_query($query);
												
				while($row=mysql_fetch_array($result))
					{		
						echo"
							<li>
								<div class='imgholder'>
								<a href='view_disaster.php?id= $row[disaster_id]'><img src='img/disaster/$row[cover]' alt='' width='200' height='90'/></a>
								<center><h2>$row[title]</h2></center>
								</div>
							</li>
							";
					}
		?>
		</ul>
      </div>
    </div>
<!-- ###################################------SIDE BAR-----############################################## -->	
    <div class="clear"></div>
  </div>
</div>

<!-- ####################################################################################################### -->
<div class="wrapper col4">
  <div id="footer">
    <div class="footbox">
      <h2>Contact Us</h2>
      <ul>
        <li><a href="#">Facebook</a></li>
        <li><a href="#">Twitter</a></li>
		<li><a href="#">Gmail</a></li>
        <li class="last"><a href="#">Instagram</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col5">
  <div id="copyright">
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - <a href="#">NDRRMC</a></p>
	<!--
    <p class="fl_right">Template by <a href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
	-->
    <br class="clear" />
  </div>
</div>
</body>
</html>
