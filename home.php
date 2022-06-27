<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Carshop</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/style3.css" />
    </head>
    <body>
        <header class="main-header">
        <div class="navigation">
                     <a class="button" href="logout.php">
                     <img src="Images/1.jpg" width="25px" border-radius="50px" float="left">
                <div class="logout">LOGOUT</div>
                    </a>
</div>
            <nav class="nav main-nav">
                <ul>
                    <li><a href="home.php">HOME</a></li>
                    <li><a href="store.php">STORE</a></li>
                    <li><a href="add_products.php">ADD PRODUCT</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                </ul>
            </nav>
            <h1 class="title title-large">Carshop</h1>
        
            
        </header>
        <section class="content-section container">
            <h2 class="section-header">Mobil</h2>
            <div>
                <div class="name-car">
                    <span class="item number">1</span>
                    <span class="item car">MITSUBISHI</span>
                    <span class="item type-car">Eclipse Cross</span>
                    <button type="button" class="item item-btn btn btn-primary">BUY</button>
                </div>
                <div class="name-car">
                    <span class="item number">2</span>
                    <span class="item car">TOYOTA</span>
                    <span class="item type-car">Avanza</span>
                    <button type="button" class="item item-btn btn btn-primary">BUY</button>
                </div>
                <div class="name-car">
                    <span class="item number">3</span>
                    <span class="item car">HONDA</span>
                    <span class="item type-car">Civic Hatchback</span>
                    <button type="button" class="item item-btn btn btn-primary">BUY</button>
                </div>
                <div class="name-car">
                    <span class="item number">4</span>
                    <span class="item car">SUZUKI</span>
                    <span class="item type-car">APV-Arena</span>
                    <button type="button" class="item item-btn btn btn-primary">BUY</button>
                </div>
                <div class="name-car">
                    <span class="item number">5</span>
                    <span class="item car">DAIHATSU</span>
                    <span class="item type-car">Grand New Xenia</span>
                    <button type="button" class="item item-btn btn btn-primary">BUY</button>
                </div>
                <div class="name-car">
                    <span class="item number">6</span>
                    <span class="item car">DATSUN</span>
                    <span class="item type-car"> GO A - MT </span>
                    <button type="button" class="item item-btn btn btn-primary">BUY</button>
                </div>
            </div>
        </section>
        <footer class="main-footer">
            <div class="container main-footer-container">
                <h3 class="band-name">Kelompok 6 Pemograman Web - Kelas F</h3>
            </div>
        </footer>
    </body>
</html>