<?php
require "../config/database.php";
require "../models/Db.php";
require "../models/user.php";
session_start();
if ($_SESSION['type'] == 1) {
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

$user = new User;
$id = $_GET['id'];
if(isset($_POST['edit'])){
	$user->editUser($_POST['username'], $_POST['password'], $_POST['type'], $_POST['last_name'], $_POST['first_name'],$id);
	var_dump($user);
	header("Location: $url_path/user.php");
}
}else {
	echo "Bạn không đủ quyền truy cập vào trang này<br>";
	echo "<a href='http://localhost:82/LapTrinhWeb1/Nhom4'> Click để về lại trang chủ</a>";
	exit();
	}