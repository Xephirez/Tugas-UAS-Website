<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Carshop | About</title>
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
            <div class="dropdown">
                <button type="button" class="btn btn-header">Member</button>
                <div class="dropdown-content">
                    <p>Juan Kordak <br> 20021106006</p>
                    <p>Steven Upa  <br> 20021106038</p>
                    <p>Adjie Chandra <br> 20021106044</p>
                </div>
            </div>
        </header>

        <section class="video">
            <h2 class="section-header">Video</h2>
            <a href="https://drive.google.com/file/d/1t3KEvBdj990UjBJR3AMrBmP7ltDDOUe_/view?usp=sharing/" target="_blank">Klik Disini Untuk Membuka Video</a> 
            <br>
            <img src="Images/video.png" alt="Trulli" width="50%">
            
        </section>
        
        <footer class="main-footer">
            <div class="container main-footer-container">
                <h3 class="band-name">Kelompok 6 Pemograman Web - Kelas F</h3>
            </div>
        </footer>
    </body>
</html>