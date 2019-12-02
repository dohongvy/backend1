
<?php
session_start(); 
require "./config/database.php";
require "./models/Db.php";
require "./models/comments.php";

$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

$comment = new Comments();
$id = $_GET['id'];


if( isset( $_SESSION['session1'])){
    echo "1";
    if(isset($_POST['submit'])){
        echo "2";
        $comment->inComment($_POST['comments'], $id, $_SESSION['session1']);
        header("Location:  $url_path/detail.php?id="."$id");
    }
}else{
    echo "3";
    ?>
     <script language="javascript">
            alert("Bạn cần đăng nhập để có thể bình luận!!!");
        </script>
    <?php
}
