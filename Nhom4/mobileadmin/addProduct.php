<?php
  $url_host = 'http://'.$_SERVER['HTTP_HOST'];
  $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
  $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
  
  preg_match_all($pattern_uri, __DIR__, $matches);
  $url_path = $url_host . $matches[1][0];
  $url_path = str_replace('\\', '/', $url_path);

require "../config/database.php";
require "../models/Db.php";
require "../models/products.php";
session_start();
if ($_SESSION['type'] == 1){
$products = new Products;

$image = $_FILES["fileUpload"]["name"];
$type_id = $_POST['type_id'];
$manu_id = $_POST['manu_id'];
$target_dir = "../public/images/";//muốn lưu vào thư mục nào thì hãy thay tên ở đây
$target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);
//echo $type_id. '<br>'. $manu_id. '<br>'. $image. '<br>'. $_POST['description']. '<br>'.$_POST['name']. '<br>'.$_POST['price'];

move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file);
$products->addNewProduct($_POST['name'], $_POST['price'], $image, $_POST['description'], $type_id, $manu_id);
header("Location: $url_path/index.php");
}else {
	echo "Bạn không đủ quyền truy cập vào trang này<br>";
	echo "<a href='http://localhost:82/LapTrinhWeb1/Nhom4'> Click để về lại trang chủ</a>";
	exit();
}