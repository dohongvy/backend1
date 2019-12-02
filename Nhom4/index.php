<?php
     require "header.php";
    
        if( $_SESSION['type'] == 1){
            header("Location: http://localhost:82/LapTrinhWeb1/Nhom4/mobileadmin/");
        }else{
            if( isset( $_SESSION['session1'] ) )
            {
            echo 'Tên đăng nhập Là: ' . $_SESSION['session1'];
            ?>
<a href="http://localhost:82/LapTrinhWeb1/Nhom4/logout.php">Logout</a>
<?php
           
        ?>
<!--content-->
    <div class="content">
        <h1>New Collections</h1>
        <div class="container">

            <!--line 2 -->
            <div class="row">
                <?php
                //unset($_SESSION['cart']);
                    $products = new Products;
                    $getAllProducts = $products->getAllProducts();

                    //Phan Trang
                    if(isset($_GET['page']))
                    {
                        $page = $_GET['page'];
                    }
                    else
                    {
                        $page = 1;
                    }
                    
                    $per_page = 8;//số sản phẩm hiển thị trong 1 trang
                    $total_Row = count($getAllProducts);//Tổng số sản phẩm
                    $base_url = $_SERVER['PHP_SELF']."?";
                    $listProduct = $products->listProduct($page,$per_page);
                    $phanTrang = $products->phanTrang($base_url,$total_Row,$page,$per_page);
                    //var_dump($getAllProducts);
                    
                    if(isset($_SESSION['success'])){
                        //echo $_SESSION['success'];
                        ?>
                        <script>
                            //alert('Thêm vào giỏ hàng thành công!');
                        </script>
                        <?php
                    }
               
                    foreach($listProduct as $key=>$value){
                ?>
                <div class="col-md-3">
                    <div class="item">
                        <div class="product"><img class="img-fluid" src='public/images/<?php echo $value['image'] ?>' alt=""></div>
                        <p><strong><a href='detail.php?id=<?php echo $value['ID'] ?>'><?php echo $value['name'] ?></a></strong> <span class="star"><i class="fas fa-star"></i><i
                                    class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                    class="fas fa-star"></i></span><br><span class="comment"><?php echo substr($value['description'],0,50) ?><a href='detail.php?id=<?php echo $key ?>'>[...]</a></span>
                        </p>
                        <div class="row cost">
                            <div class="col-md-2">
                                <p><strong><?php echo $value['price'] ?></strong></p>
                            </div>
                            <div class="col-md-10">
                                <a class= "cart1" href="cart.php?id=<?php echo $value['ID'] ?>">ADD TO CART</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <!--end line 2 -->
        </div>
    </div>
    <div class="container"> 
    <?php
    echo $phanTrang;
    ?>
    </div>
<?php
        require "footer.php";

            }
            else{
                    ?>
<script language="javascript">
    alert("Bạn chưa đăng nhập");
</script>
<?php
                    header("Location: http://localhost:82/LapTrinhWeb1/Nhom4/login.php");
                }
                } 
            
            