<?php
  $url_host = 'http://'.$_SERVER['HTTP_HOST'];
  $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
  $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
  
  preg_match_all($pattern_uri, __DIR__, $matches);
  $url_path = $url_host . $matches[1][0];
  $url_path = str_replace('\\', '/', $url_path);

require "../config/database.php";
require "../models/Db.php";
require "../models/user.php";
session_start();
if ($_SESSION['type'] == 1) {
$user = new user;
$username = $_POST['username'];
$password = $_POST['password'];
$type = $_POST['type'];
$last_name = $_POST['last_name'];
$first_name = $_POST['first_name'];
if(isset($_POST['add'])){
    $user->addNewUser($username, $password, $type, $last_name, $first_name);
    //var_dump($user);
       header("Location: $url_path/user.php");
    }
    }else {
  echo "Bạn không đủ quyền truy cập vào trang này<br>";
  echo "<a href='http://localhost:82/LapTrinhWeb1/Nhom4'> Click để về lại trang chủ</a>";
  exit();
}


