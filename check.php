<?php
if(isset($_GET['submit'])){
if(file_exists("abc.txt")){

$myfile = fopen("abc.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("abc.txt"));
fclose($myfile);
}
else {
	echo "Wrong file name!!";
}
}
?>
<!DOCTYPE Html>
<html>
<head>
</head>
<body>
	<form action ="check.php">
	<input type="Submit" name ="submit" value="submit"/>
</form>
	</body>
	</html>
