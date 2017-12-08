<?php
        require 'connectiondatabase.php';
        if (isset($_POST["submit"])) {
            $login_IDcard = $_POST['IDcard'];
            $login_password = $_POST['password'];
            $login_name= $_POST['name'];
            $login_surname= $_POST['surname'];
            $login_date= $_POST['Date'];
            $login_accountnumber= $_POST['Accountnumber'];
            $login_address= $_POST['Address'];
            $login_career= $_POST['Career'];
            $login_telephone= $_POST['Telephone'];
            $login_salary= $_POST['Salary'];
            $login_official= $_POST['Official'];
            $login_retire= $_POST['Retire'];
            $login_bureauerucy= $_POST['Bureauerucy'];
            $login_email = $_POST['Email'];
            $check ="SELECT * FROM register WHERE IDcard = '$login_IDcard' or E-mail = '$login_email'";
            $checkdataid = mysqli_query($dbcon,$check);
            $num = mysqli_num_rows($checkdataid);
            if (!filter_var($login_email, FILTER_VALIDATE_EMAIL)){
                echo "<h2>Email Error</h2>";
                echo "<p>Your register is fail. Plaese try again.</p>";
            } else {

                if($num > 0){
                  echo "alert('รายชื่อนี้มีการลงทะเบียนไปแล้วครับ !!!');";
                }
                else{
                $query = "INSERT INTO register (IDcard,password,name,surname) VALUES ('$login_IDcard','$login_password','$login_name','$login_surname')";
                $result = mysqli_query($dbcon,$query);
                echo "success";
              }
            }
            mysqli_close($dbcon);
        }
        ?>
