<?php
require "header.php";
?>
    <!--content-->
    <div class="content">
        <h1>New Collections</h1>
        <div class="container">

            <!--line 2 -->
            <div class="row">
                <?php
                 $manu_name = $_GET['manu_name'];
                    $getAllManufacture = $Manu->getManufactureById($manu_name);
                    foreach($getAllManufacture as $key=>$value){
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
    <!--end content-->
    <?php
require "footer.php";
?>