<?php
include "connectlogic/connectiondatabase.php";
        session_start();


        $session_login_id = $_SESSION['IDcard'];

        $qry_user = "SELECT*FROM register WHERE IDcard='$session_login_id' ";
        $result_user = mysqli_query($dbcon,$qry_user);
        $row=mysqli_fetch_array($result_user,MYSQLI_ASSOC);
        $login_user = $row['name'];
    if(!isset($session_login_id))
        {
          header("Location: index.php");
        }
?>
