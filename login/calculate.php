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
input[type=text] {
    width: 95%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;
}

input[type=text]:focus {
    border: 3px solid #555;
}
.button {
  border-radius: 10px;
  background-color: #999999;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 14px;
  padding: 20px;
  width: 100px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
<script>

function Calculate() {
    var a = parseInt(document.getElementById("a").value);
    var b = parseInt(document.getElementById("b").value);
    document.getElementById("demo").innerHTML = a * b;
}
</script>
</head>
<body>

<div class="sidenav">
  <a href="uploadfile.php">ส่งเอกสาร</a>
  <a href="calculate.php">คำนวณบำนาญ</a>
  <a href="logout.php">logout</a>
</div>

<div class="content">
    <br><br><br><br>
    <label for="counttimework">จำนวนวนปีรับราชการ</label>

    <input type="text" id="a" name="counttime" >
    <br>
    <label for="salary">เงืนเดือนสุดท้ายที่ได้รับ</label>
    <input type="text" id="b" name="salary">
    <br>
    <button class="button" id="myBtn" name="button" onclick="Calculate()">submit</button>
    <h1 id="demo"></h1>

</div>

</body>
</html>
