<?php

session_start();
  include 'connectiondatabase.php';

    if(isset($_POST["submit"]))
  	{
  		if(empty($_POST["IDcard"]) || empty($_POST["password"]))
  		{
  			$error = "Both fields are required.";
  		}else
  		{
  			// Define $username and $password
  			$username=$_POST['IDcard'];
  			$password=$_POST['password'];
        $name=$_POST['name'];
  			// To protect from MySQL injection

  			//Check username and password from database
  			$sql="SELECT id FROM register WHERE IDcard='$username' and password='$password'";
  			$result=mysqli_query($dbcon,$sql);
  			$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

  			//If username and password exist in our database then create a session.
  			//Otherwise echo error.

  			if(mysqli_num_rows($result) == 1)
  			{

        $_SESSION['IDcard']= $username;
        $_SESSION['name']= $name;
          header("Location: ../home.php");
    // Redirecting To Other Page
  			}else
  			{
  				echo "Incorrect username or password.";
  			}
  		}
  	}

?>
