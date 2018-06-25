<?php
 include('connection.php');
?>
 <?php 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>

<html>
<head>
<title>Test Project</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


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
        <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>

  
    <form method="post" action="index.php">
   
    Employee Name:<input type="Text" name="Name"><br>
    Employee ID:<input type="Int" name="empid"><br>
    <input type="Submit" name="submit" value="Enter information">
    </form>

<h3>
	Forgot ur Employee Id...Dont worry..Tell me your name
</h3>

<form method="post" action="fetchdata.php">
   
    Employee Name:<input type="Text" name="Name"><br>
    <input type="Submit" name="submitname" value="Get ur id">
 </form>



 <h3>
 Tell me what u want to search and i will show u magic
</h3>

<form method="post" action="test2.php">
   
    What u want to search:<input type="Text" name="query"><br>
    <input type="Submit" name="submitQuery" value="Click to see magic!!">
 </form>

  <?php

if (isset($_POST['submit'])){
    $name=mysqli_real_escape_string($db, $_POST['Name']);
    $empid=mysqli_real_escape_string($db, $_POST['empid']);
   
    $sql = "INSERT INTO userdata (empid , Name) VALUES ('$empid','$name')";
    mysqli_query($db,$sql) or die(mysql_error()."<br />".$sql);
   } 
?>

</body>

</html>