<!--connection database -->


<?php
$username= "root";
$password= "";
$database= "risk";

$con=mysql_connect('localhost',$username, $password);
mysql_select_db($database, $con) or die ("Unable to select database");



?>