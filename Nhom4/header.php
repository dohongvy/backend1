<?php
 session_start(); 
require "./config/database.php";
require "./models/Db.php";
require "./models/products.php";
require "./models/manufactures.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exe6</title>
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <script src="public/js/jquery-3.3.1.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>
    <!--header-->
    <header>
        <!--cart-->
        <?php
        if(!isset($_SESSION['tien'])){
            $_SESSION['tien'] = 0;
        }
        if(!isset($_SESSION['item'])){
            $_SESSION['item'] = 0;
        }
        ?>
        <div class="container">
            <div class="cart">
                <a href="cart.php"><?php echo $_SESSION['tien'] ?> (<?php echo $_SESSION['item'] ?> items)
                </a><i class="fas fa-shopping-cart"></i>
            </div>
        </div>
        <!--end cart-->
        <!--navbar-->
        <div class="container">
            <nav class="navbar navbar-expand-sm navbar-light bg-pink">
                <div class="logo"><img class="img-fluid" src="public/images/logo.png" alt=""></div>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                    data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a id="home" class="nav-link" href="index.php">HOME<span class="sr-only">(current)</span></a>
                        </li>
                        <?php
                    $Manu = new Manufacture;
                    $getNameManufacture = $Manu->getAllManufacture_ManuName();
                    //var_dump($getNameManufacture);
                    foreach($getNameManufacture as $key=>$value){
                ?>
                        <li class="nav-item">
                        <a id="a1" class="nav-link" href="product.php?manu_name=<?php
                         echo $value['manu_name'] ?>"><?php echo $value['manu_name']?></a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </nav>
        </div>
        <!--end navbar-->
        <!--banner-->
        <div class="banner">
            <h1>Free Online Shopping</h1>
            <a href="#">SHOP NOW</a>
        </div>
        <!--end banner-->
    </header>
    <!--end header-->
    <form action="search.php" method="get">
        <div class="input-group">
            <input type="text" class="form-control " name ="txtSearch" placeholder="Search for...">
            <input class ="button1" type="submit"name="ok" value="search">
        </div>
    </form>
    