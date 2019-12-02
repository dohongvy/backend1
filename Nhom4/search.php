<?php
require "header.php";

if (isset($_REQUEST['ok'])) 
{
    $search = $_GET['txtSearch'];
    // Nếu $search rỗng thì báo lỗi, tức là người dùng chưa nhập liệu mà đã nhấn submit.
    if (empty($search)) {
        echo "<div class='container text-danger'> <b>Nhập từ khóa tìm kiếm </b></div>";
    } 
    else
    { $products = new Products;
                    
        //var_dump($search);
        $searchProductByName1 = $products->searchProductByName($search);
        //var_dump($searchProductByName1);

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
        $total_Row = count($searchProductByName1);//Tổng số sản phẩm search
        $base_url = $_SERVER['PHP_SELF']."?txtSearch=a&ok=search&";
        $listProduct = $products->ListProductSearch($page,$per_page,$search);
        $phanTrang = $products->phanTrang($base_url,$total_Row,$page,$per_page);
    ?>
<!--content-->
<div class="content">
    <h1>New Collections</h1>
    <div class="container">

        <!--line 2 -->
        <div class="row">
            <?php
                   
                    foreach($listProduct as $key=>$value){
                ?>
            <div class="col-md-3">
                <div class="item">
                    <div class="product"><img class="img-fluid" src='public/images/<?php echo $value['image'] ?>'
                            alt=""></div>
                    <p><strong><a
                                href='detail.php?id=<?php echo $value['ID'] ?>'><?php echo $value['name'] ?></a></strong>
                        <span class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i></span><br><span
                            class="comment"><?php echo substr($value['description'],0,50) ?><a
                                href='detail.php?id=<?php echo $key ?>'>[...]</a></span>
                    </p>
                    <div class="row cost">
                        <div class="col-md-2">
                            <p><strong><?php echo $value['price'] ?></strong></p>
                        </div>
                        <div class="col-md-10">
                            <a class="cart1" href="cart.php?id=<?php echo $value['ID'] ?>">ADD TO CART</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <!--end line 2 -->
    </div>
</div>
  
    <div class="conatiner">
    <?php
        echo $phanTrang;
        ?>
</div>

<?php
    }
}
               
    require "footer.php";
    ?>