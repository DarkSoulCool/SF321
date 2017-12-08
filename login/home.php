<?php include "session.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}

body {
    margin: 0;
}

/* Style the side navigation */
.sidenav {
    height: 100%;
    width: 200px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
}


/* Side navigation links */
.sidenav a {
    color: white;
    padding: 16px;
    text-decoration: none;
    display: block;
}

/* Change color on hover */
.sidenav a:hover {
    background-color: #ddd;
    color: black;
}

/* Style the content */
.content {
    margin-left: 200px;
    padding-left: 20px;
}

</style>
</head>
<body>

<div class="sidenav">
  <a href="uploadfile.php">ส่งเอกสาร</a>
  <a href="calculate.php">คำนวณบำนาญ</a>
  <a href="logout.php">logout</a>
</div>

<div class="content">

  <h2><?php echo   $login_user;?></h2>
  <p>A full-height, fixed sidenav and content.</p>
</div>

</body>
</html>
