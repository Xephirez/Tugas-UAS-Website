<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Carshop | Store</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/style3.css" />
        <script src="store.js" async></script>
    </head>
    <body>
        <header class="main-header">
        <div class="navigation">
                     <a class="button" href="logout.php">
                     <img src="Images/1.jpg" width="25px" border-radius="50px" float="left">
                <div class="logout">LOGOUT</div>
                    </a>
</div>

            <nav class="main-nav nav">
                <ul>
                    <li><a href="home.php">HOME</a></li>
                    <li><a href="store.php">STORE</a></li>
                    <li><a href="add_products.php">ADD PRODUCT</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                </ul>
            </nav>
            <h1 class="title title-large">Carshop</h1>
        </header>
        <section class="container content-section">
            <h2 class="section-header">HONDA</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">BRIO</span>
                    <img class="shop-item-image" src="Images/brio.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">149.000.000 IDR</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">MOBILIO</span>
                    <img class="shop-item-image" src="Images/mobilio.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">196.000.000 IDR</span>
                        <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">BR-V</span>
                    <img class="shop-item-image" src="Images/br-v.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">275.000.000 IDR</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">CR-V</span>
                    <img class="shop-item-image" src="Images/cr-v.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">149.000.000 IDR</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="container content-section">
            <h2 class="section-header">TOYOTA</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">AVANZA</span>
                    <img class="shop-item-image" src="Images/avanza.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">206.000.000 IDR</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">VELOZ</span>
                    <img class="shop-item-image" src="Images/veloz.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">251.000.000 IDR</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="container content-section">
            <h2 class="section-header">CART</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">JUTA</span>
            </div>
            <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
        </section>
        <footer class="main-footer">
            <div class="container main-footer-container">
                <h3 class="band-name">Kelompok 6 Pemograman Web - Kelas F</h3>
            </div>
        </footer>
    </body>
</html>