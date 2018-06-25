<?php
 include('connection.php');
?>
<?php 

if (!isset($_SESSION['username'])) {
   $_SESSION['msg'] = "You must log in first";
   header('location: login.php');
   }
  if (isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>
<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>

    <?php  if (isset($_SESSION['username'])) : ?>
        <p class="welcome"><span>Welcome <strong><?php echo $_SESSION['username']; ?></strong></span></p>
        <p class="logout"> <a href="enterdata.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
<html>
<head>
<title>Data Entry</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<p style="text-align:left;font-size:20px">
  		<a href="index.php" style="text-decoration: none;color:red;"><strong>Home</strong></a>
  	</p>

	<form method="post" action="enterdata.php">
   <div class="input-group">
    Employee Name:<input type="Text" name="Name"></div>
    <div class="input-group">
    Employee ID:<input type="Int" name="empid"></div>
    <div class="input-group">
    Employee Email:<input type="text" name= "email"></div>
    <input type="Submit" name="submit" style="btn btn-success" value="Enter information">
    </form>

 <?php

if (isset($_POST['submit'])){
    $name=mysqli_real_escape_string($db, $_POST['Name']);
    $empid=mysqli_real_escape_string($db, $_POST['empid']);
    $email=mysqli_real_escape_string($db,$_POST['email']);
   
    $sql = "INSERT INTO userdata (empid , Name, email) VALUES ('$empid','$name','$email')";
    if(mysqli_query($db,$sql)){?>
    	<div class="error success" ><?php
    	echo "Your entry has been added to the database!!";
    }
    else{
    	die(mysql_error()."<br />".$sql);

    }?>
    </div><?php
   } 
?>
</body>
</html>

