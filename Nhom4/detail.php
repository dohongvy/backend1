<?php
require "header.php";
require "./models/comments.php";
if( isset( $_SESSION['session1'] ) )
{
    if( $_SESSION['type'] == 0){
    ?>

<!--content-->
<div class="content">
    <h1>New Collections</h1>
    <div class="container">
        <!--line 1 -->
        <div class="row">
            <div class="col-md-6">
                <?php
                    $id = $_GET['id'];
                    $products = new Products;
                    $getProductById = $products->getProductById($id);
                    //var_dump($getProductById);
                    foreach($getProductById as $key=>$value){
                ?>
                <div class="item">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="product"><img class="img-fluid"
                                    src='public/images/<?php echo $value['image'] ?>' alt=""></div>
                        </div>
                        <div class="col-md-8">
                            <p><strong><?php echo $value['name'] ?></strong> <span class="star"><i
                                        class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star"></i></span><br><span
                                    class="comment"><?php echo $value['description'] ?></span>
                            </p>
                            <div class="row cost">
                                <div class="col-md-1">
                                    <p><strong><?php echo $value['price'] ?></strong></p>
                                </div>
                                <div class="col-md-11">
                                   
                                    <a class="cart1" href="cart.php?id=<?php echo $id ?>">ADD TO CART</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <!--end line 1 -->
    </div>
</div>
<!--end content-->
<div class="container">
<h2>Bình luận</h2>
<form action="comment.php?id=<?php echo $id ?>" method="post">
<div>
<textarea name="comments" id="comments" style="font-family:sans-serif;font-size:1.2em;width: 80%;">
</textarea>
</div>
<input type="submit" value="Submit" name = "submit" style="
    float:  right;
    margin-right: 10%;
">
</form>
<?php
$comment = new Comments();
$getCommentById = $comment->getCommentById($id);
if(count($getProductById) > 0){


?>
<h3>Nội dung bình luận</h3>
<table style="width:100%">

<?php
foreach($getCommentById as $key=>$value){
    ?>
    
  <tr style="margin-top: 40px">
    <td style="width: 300px; padding-left: 30px;" > 
        <img style="width: 100px; margin-left: -30px;" src="./public/images/nam.jpg"> <br>
        <?php echo $value['username']?>
    </td>

    <td><?php echo $value['content']?></td> 
  </tr>
 

    <?php
}
?>
</table>
</div>
<?php
}
require "footer.php";
?>
    <?php
    }
    else{
        ?>
    <script>
        alert("Bạn không có quyền vào trang này!!");
    </script>
    <?php
    }
}
else{
    ?>
    <script>
        alert("Bạn chưa đăng nhập!!");
        <?php
        header("Location: localhost:82/LapTrinhWeb1/Nhom4/login.php");
        ?>
    </script>
    <?php
}
?>