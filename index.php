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
	    <li class="active"><a href="index.php">Home</a></li>
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
<!-- #################################-------END--NAVIGATOR------################################################# -->
<!-- #################################-------TOP--SLIDER------################################################# -->
<div class="wrapper col2">
  <div id="featured_slide">
  
	
		<?php
			require_once("connect.php");
			$query="SELECT * FROM slider_tbl limit 5 ";
			$result=mysql_query($query);
				while($row=mysql_fetch_array($result))
				{		
					echo"
							<div class='featured_box'>
								<img src='img/slider/$row[cover]' alt='' width = '450' height = '300'/>
									<div class='floater'>
										<h2>&nbsp;<br>$row[title]</h2>
										<p>&nbsp;$row[descrip]</p>
										<p class='readmore'><a href='#'>Continue Reading &raquo;</a></p>
									</div>
							</div>
						
						";
				}
		?>
  </div>
</div>
<!-- #################################-------END--SLIDER------################################################# -->
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="homecontent">
    <div class="fl_left">
<!-- ####################################################################################################### -->
      <div class="column2">
			<h2>News in the Metro</h2>
			  <ul>
				<?php
				require_once("connect.php");
				$query="SELECT * FROM news_tbl order by day limit 2";
				$result=mysql_query($query);
					while($row=mysql_fetch_array($result))
						{
							echo"
								<li>
										
										<img src='img/news/$row[cover]' alt=''width='240' height='130' />
										<h2>&nbsp;<br>$row[title]</h2>
										<p>&nbsp;$row[month] $row[day],$row[year]</p>
										<p>&nbsp;$row[descrip]</p>
										<p class='readmore'><a href='read_news.php?id= $row[news_id]'>Continue Reading &raquo;</a></p>
								</li>	
								";
						}
				?>
			  </ul>
        <br class="clear" />
      </div>
<!-- ####################################################################################################### -->	  
        <div class="column2">
        <h2>Events for the Month</h2>
				<?php
				require_once("connect.php");
				$query="SELECT * FROM event_tbl  ";
				$result=mysql_query($query);
					while($row=mysql_fetch_array($result))
						{		
							echo"
								<li>
									<img src='img/events/$row[cover]' alt='' width='240' height='130' />
									<p>&nbsp;$row[title]</p>
								</li>	
								";
						}
				?>
        <br class="clear" />
	 </div> 
<!-- ####################################################################################################### -->
    </div>
<!-- ####################################################################################################### -->
	<div class="fl_right">
     </br>
	 <h2>Disaster Must Know</h2>
      <ul>
		<?php
			require_once("connect.php");
			$query="SELECT * FROM disaster_tbl limit 5 ";
			$result=mysql_query($query);
			while($row=mysql_fetch_array($result))
				{		
					echo"
						<li>
							<div class='imgholder'><img src='img/disaster/logo/$row[logo]' alt='' width = '60' height = '60'/></a></div>
							<p><strong><a href='disaster.php?id= $row[disaster_id]'>$row[title]</a></strong></p>				
							<p>&nbsp;&nbsp;&nbsp;<br>$row[descrip]</p>
							<br>
						</li>	
						";
				}
		?>			
	   </ul>
    </div>
	

<!-- ####################################################################################################### -->
    <br class="clear" />
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
