<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$localhost = "localhost";
$dbuser= "root";
$dbpass = "";
$dbname = "hms";

$connect = mysql_connect($localhost, $dbuser, $dbpass);
mysql_select_db($dbname,$connect);

?>