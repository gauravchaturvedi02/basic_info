<html>
<?php
include('connection.php');

if(isset($_POST['submitname']))
{   
    $name= $_POST['Name'];
    
    $query = "SELECT * FROM userdata WHERE Name LIKE "."'".$name."'";
    
	$fquery = mysqli_query($db,$query);
	
	if($fquery)
	{
    while($result = mysqli_fetch_assoc($fquery))
    {
	echo "Employee Name :".$result['Name'];
	echo "Employee Id ".$result['empid'];
     }}
     else{
	 echo mysql_error();
     }

}

?>
</html>