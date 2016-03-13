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
        <li class="active"><a href="contact.php">Contact Us</a></li>
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
<!-- ###################################------CONMENTS CONTENT-----############################################## -->		
    <h2>Write a Comment:</h2>
      <div id="respond">
		<form action="#" method="post">
			<table>
				<tbody>
					<tr><td>Name:</td>
						<td><input type="text" value="" class="txtfield"></td>
					</tr> 
					<tr><td>Email:</td>
						<td><input type="text" value="" class="txtfield"></td>
					</tr> 
					<tr><td>Subject:</td>
						<td><input type="text" value="" class="txtfield"></td>
					</tr> 
					<tr><td class="txtarea">Message:</td>
						<td><textarea></textarea></td>
					</tr>
					<tr><td></td>
						<td><input name="submit" type="submit" id="submit" value="Submit Form" /></td>
					</tr>
				</tbody>
			</table>
		</form>
      </div>
<!-- ###################################------SMS UPDATES-----############################################## -->	  

	<br><br><br><br>
	<a href="sms_new.php"><h2>SMS UPDATES</h2></a>
		<li> If you want a news update about around us </li>
      </div>	  
   <!-- ###################################------SIDE BAR-----############################################## -->	
	 <div id="column">
      <div class="subnav">
        <h2>Contact Information</h2>
        <ul>
          <li><a href="#">Main Office</a>
            <ul>
              <li><a href="#">Contact No:0922XXXXXXX</a></li>
              <li><a href="#">Address:</a></li>
            </ul>
          </li>
          <li><a href="#">Branches</a>
            <ul>
              <li><a href="#">Contact No:0922XXXXXXX</a></li>
              <li><a href="#">Address:</a></li>
            </ul>
          </li>		  
		  
		  
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
