<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>


  <link rel="stylesheet" type="text/css" href="css/style.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
  <script language="javascript">
  function checkID(id)
  {
  if(id.length != 13) return false;
  for(i=0, sum=0; i < 12; i++)
  sum += parseFloat(id.charAt(i))*(13-i); if((11-sum%11)%10!=parseFloat(id.charAt(12)))
  return false; return true;}

  function checkForm()
  { if(!checkID(document.form1.IDcard.value))
   window.alert('รหัสประชาชนไม่ถูกต้อง');
  else header("Location: connectlogic/insertregister.php");}
  </script>
</head>

<body>
  <div class="register">

  <h1>Register</h1>

      <form name="form1" onsubmit="checkForm();return false;" method="post"  action="connectlogic/insertregister.php">
        <p>เลขบัตรประชาชน</p><input type="text" name="IDcard" />
        <p>รหัสผ่าน</p><input type="password" name="password"  required="required" />
        <p>ชื่อ</p><input type="text" name="name"  required="required" />
        <p>นามสกุล</p><input type="text" name="surname"  required="required" />
        <p>วันเดือนปีเกิด</p><input type="date" name ="Date" id="myDate" value="1997-01-01">
        <p>เลขที่บัญชีธนาคาร</p><input type="number" name="Accountnumber"  required="required" />
        <p>ที่อยู่</p><input type="text" name="Address"  required="required" />
        <p>อาชีพ</p><input type="text" name="Career"  required="required" />
        <p>เบอร์โทร</p><input type="number" name="Telephone"  required="required" />
        <p>เงินเดือนสุดท้าย</p><input type="number" name="Salary"  required="required" />
        <p>E-mail</p><input type="text" name="Email"  required="required" />
        <p>วันรับราชการ</p><input type="date" name="Official"  required="required" /><p>
        <p>วันเกษียน</p><input type="date" name="Retire"  required="required" />
        <p>จำนวนปีรับราชการ</p><input type="number" name="Bureauerucy"  required="required" />
        <button type="submit" name="submit" class="btn btn-primary btn-block btn-large">ยืนยัน</button>
        <button type="button"   class="btn2 btn2-primary btn2-block btn2-large ">ยกเลิก</button>

    </form>
</div>

    <script  src="js/index.js"></script>

</body>
</html>
