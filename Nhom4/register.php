<?php
require "./config/database.php";
require "./models/Db.php";
require "./models/user.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css" >
</head>
<body>
<h1>Đăng kí</h1>
    <form action="" method="post">
    Username:<input type="text" name="username"><br>
    Password: <input type="Password" name="password"><br>
    Nhập lại Password: <input type="Password" name="password_re"><br>
    Firt name: <input type="text" name="firt_name"><br>
    Last name: <input type="text" name="last_name"><br>
    <input type="submit" name="register">
     </form>
     <?php
     $user = new User;
     $getAllUsername = $user->getAllUsernameUser();
     
    if(isset($_POST['register'])){
        $i = 0;
        foreach($getAllUsername as $key => $value){
            if($value['username'] == $_POST['username']){
               $i++;
            }
        }
        if($i > 0){
            echo "<p class='text-danger'>Username đã bị trùng</p>";
        }else{
            if($_POST['password'] == $_POST['password_re']){
                $user->register($_POST['username'], $_POST['password'], $_POST['last_name'], $_POST['firt_name']);
                echo "<p class='text-success'>Đăng kí thành công </br><a href='login.php'>Vui lòng đăng nhập lại</a> </p>";
            }
            else{
                echo "<p class='text-danger'>Mật khẩu không đúng</p>";
            }
            
        }

    }
    ?>
    <a href=""></a>
</body>
</html>