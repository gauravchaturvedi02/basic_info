
<?php

$username = "root";
$password = "";
$hostname = "localhost";

$dbhandle = mysql_connect($hostname, $username, $password)
    or die("Unable to connect to MySQL");

$selected = mysql_select_db("basic_info",$dbhandle)
    or die("Could not selected basic_info");

?>

