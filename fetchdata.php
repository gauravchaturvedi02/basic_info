<html>
<?php
include('connection.php');

if(isset($_POST['submitEmail']))
{   
    $email= $_POST['Email'];
    
    $query = "SELECT * FROM userdata WHERE email LIKE "."'".$email."'";
    
	$fquery = mysqli_query($db,$query);
	
	if($fquery)
	{
    while($result = mysqli_fetch_assoc($fquery))
    {

    	?>
    	<div class="error success" >

	<p><strong>Employee Name :<?php echo $result['Name']; ?><br>
	   Employee Id :<?php echo $result['empid'];?></strong></p></div>
	   <?php
     }}
     else{
	 echo mysql_error();
     }

}

?>
<html>
<head>
<title>Fetch Data</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<p style="text-align:left;font-size:20px">
  		<a href="index.php" style="text-decoration: none;color:red;"><strong>Home</strong></a>
  	</p>
<h3 class ="main_heading">
	Forgot ur Employee Id...Dont worry..Tell me your email id
</h3>

<form method="post" action="fetchdata.php">
   <div class="input-group">
    Email Id:<input type="Text" name="Email"><br>
</div>
    <div class="input-group">
    <input type="Submit" name="submitEmail" value="Get ur id">
 </form>
</html>