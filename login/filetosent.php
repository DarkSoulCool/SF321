<?php include "session.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>WTF</title>
<meta charset="utf-8">
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/user.css">
<style>

</style>
</head>
<body>

<div class="sidenav">
  <a href="filetosent.php">ส่งเอกสาร</a>
  <a href="calculate.php">คำนวณบำนาญ</a>
  <a href="logout.php">logout</a>
</div>

<div class="content">
<br>
<br>
<h1>แจ้งการส่ง</h1>
<form method="post" action="connectlogic/upload.php"  enctype="multipart/form-data">
<input id="x2" type="file" name="file">

<input type="submit" name="submit">
</form>
</div>

</body>
</html>
