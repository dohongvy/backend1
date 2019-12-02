<?php
session_start();
require "./config/database.php";
require "./models/Db.php";
require "./models/products.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="public/js/jquery-3.3.1.min.js"></script>
</head>

<body>

    <?php
    $tongTien = 0;
    $item = 0;
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $products = new Products;
        $getProductById = $products->getProductById($id);
        if($getProductById){
            if(isset($_SESSION['cart']))
            {
                if(isset($_SESSION['cart'][$id]))
                {
                    $_SESSION['cart'][$id]['qty'] += 1;
                }
                else
                {
                    $_SESSION['cart'][$id]['qty']= 1;
                }
                $_SESSION['cart'][$id]['name'] = $getProductById[0]['name'];
                $_SESSION['cart'][$id]['price'] = $getProductById[0]['price'];
            }
            else
            {
                $_SESSION['cart'][$id]['qty']= 1;
                $_SESSION['cart'][$id]['name'] = $getProductById[0]['name'];
                $_SESSION['cart'][$id]['price'] = $getProductById[0]['price'];
            }
        } else{
            $_SESSION['success']='Thêm sản phẩm vào giỏ hàng thất bại!!';
        }
    }

    //end xử lý
    if(isset($_SESSION['cart']))
    {
    ?>
    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Số lượng</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $n = 1;
                foreach($_SESSION['cart'] as $key => $value){
                    $thanhTien = $value['price'] * $value['qty'];
                    $tongTien += $thanhTien;
                    $item +=  $value['qty'];
            ?>
            <tr id="item_<?php echo $key?>">
                <td><?php echo $n ?></td>
                <td><?php echo $value['name'] ?></td>
                <td><?php echo $value['price'] ?></td>
                <td>
                <form name="input" action="xl.php?key=<?php echo $key ?>&n=<?php echo $n ?>" method="post">
                        <input type="submit" name="pve" value="<" />
                        <span id="quantity_<?php echo $key?>"><?php echo $value['qty'] ?></span>
                        <input type="submit" name="next" value=">" />
                    </form>
                </td>
                <td>
                    <form name="input" action="xl.php?key=<?php echo $key ?>&n=<?php echo $n ?>" method="post">
                        <input type="submit" name="remove" value="Xóa" />
                    </form>
                </td>
            </tr>
            <?php $n++;
                }
            ?>
        </tbody>
    </table>
    <a href="index.php">Quay về trang chủ</a>
    <?php
    }
    
    $_SESSION['tien'] = $tongTien;
    $_SESSION['item'] = $item;
if(!isset($_SESSION['cart'])){
    ?>
    <a href="index.php">Giỏ hàng rỗng, quay về trang chủ để tiếp tục mua sắm.</a>
    <?php
}else{
    ?>
    <h2>Tổng tiền: <span id="totalPrice"><?php echo $tongTien ?></span></h2>
    <form name="input" action="xl.php?key=<?php echo $key ?>&n=<?php echo $n ?>" method="post">
                        <button type="submit" name="mua" >Mua</button>
                    </form>
    <?php
}
 
?>
    <script>
        function clickPre(key, price) {
            var qtyStr = $('#quantity_' + key).text();
            var qtyNum = qtyStr && !isNaN(qtyStr) ? parseInt(qtyStr) : 0;
            $('#quantity_' + key).text(qtyNum - 1);

            var totPriceStr = $('#totalPrice').text();
            var totalPrice = totPriceStr && !isNaN(totPriceStr) ? parseInt(totPriceStr) : 0;
            totalPrice -= price;

            $('#totalPrice').text(totalPrice);
        }

        function clickNext(key, price) {
            var qtyStr = $('#quantity_' + key).text();
            var qtyNum = qtyStr && !isNaN(qtyStr) ? parseInt(qtyStr) : 0;
            $('#quantity_' + key).text(qtyNum + 1);

            var totPriceStr = $('#totalPrice').text();
            var totalPrice = totPriceStr && !isNaN(totPriceStr) ? parseInt(totPriceStr) : 0;
            totalPrice += price;

            $('#totalPrice').text(totalPrice);
        }

        function clickRemove(key, thanhTien) {
            $('#item_' + key).text(" ");

            var totPriceStr = $('#totalPrice').text();
            var totalPrice = totPriceStr && !isNaN(totPriceStr) ? parseInt(totPriceStr) : 0;
            totalPrice -= thanhTien;

            $('#totalPrice').text(totalPrice);
        }
        window.history.replaceState({}, document.title, "/" + "LapTrinhWeb1/Nhom4/cart.php");
    </script>
</body>

</html>