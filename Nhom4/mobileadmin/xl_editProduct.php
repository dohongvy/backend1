<?php
require "../config/database.php";
require "../models/Db.php";
require "../models/products.php";
require "../models/user.php";
session_start();
if ($_SESSION['type'] == 1) {
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

$products = new Products;
$id = $_GET['id'];
$img_n = $products->getProductById($id)[0]["image"];

$image = $_FILES["fileToUpload"]["name"];
$type_id = $_POST['type_ID'];
$manu_id = $_POST['manu_id'];
$target_dir = "../public/images/";//muốn lưu vào thư mục nào thì hãy thay tên ở đây
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);


if($image == ''){
    $products->editProduct($_POST['name'], $_POST['price'], $img_n, $_POST['description'], $type_id, $manu_id, $id);
}
else{
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
    $products->editProduct($_POST['name'], $_POST['price'], $image, $_POST['description'], $type_id, $manu_id, $id);
}
header("Location: $url_path/index.php");
}else {
	echo "Bạn không đủ quyền truy cập vào trang này<br>";
	echo "<a href='http://localhost:82/LapTrinhWeb1/Nhom4'> Click để về lại trang chủ</a>";
	exit();
}