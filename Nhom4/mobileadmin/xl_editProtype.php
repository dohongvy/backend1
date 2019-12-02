<?php
require "../config/database.php";
require "../models/Db.php";
require "../models/protypes.php";
session_start();
if ($_SESSION['type'] == 1) {
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

$manu = new Protype;
$id = $_GET['id'];

$image = $_FILES["fileToUpload"]["name"];
$target_dir = "../public/images/";//muốn lưu vào thư mục nào thì hãy thay tên ở đây
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

if(isset($_POST['edit'])) {
    if(isset($_POST['name'])){
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
        $manu->edit_protype($_POST['name'], $image, $id);
        header("Location: $url_path/protype.php");
    }
}
}else {
	echo "Bạn không đủ quyền truy cập vào trang này<br>";
	echo "<a href='http://localhost:82/LapTrinhWeb1/Nhom4'> Click để về lại trang chủ</a>";
	exit();
}