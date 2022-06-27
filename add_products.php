<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

require 'functions.php';


$produk = mysqli_query($conn, "SELECT * FROM products");



if ( isset($_POST["submit"])) {

    
       // cek keberhasilan query
  if (tambah($_POST) > 0 ) {
      echo "<script> 
      alert('data berhasil ditambahkan');
       document.location.href = add_products.php;
       </script>";
       header("Refresh:0");
  } else {
    echo "<script> 
    alert('data gagal ditambahkan');
    document.location.href = add_products.php; 
    </script>";
  }



}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Carshop</title>
    <meta name="description" content="This is the description">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/style3.css" />
    <link rel="stylesheet" href="css/style4.css" />

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

    <section class="services" style="position: relative;">

<div class="service">
    <form name="todoForm" autocomplete="off" style="list-style: none;" action="" method="post">
       <li>
           <label for="nama">Nama Mobil</label>
           <input type="text" name="nama" id="nama" placeholder="isi nama Produk" required>
       </li>
       <li>
           <label for="merek">Merek Mobil</label>
           <input type="text" name="merek" id="merek"  placeholder="isi merek Produk" required>
       </li>
       <li>
           <label for="gambar">Gambar</label>
           <input type="text" name="gambar" id="gambar"  placeholder="isi url gambar Produk" required>
       </li>
       <li>
           <label for="harga">Harga</label>
           <input type="text" name="harga" id="harga"  placeholder="isi harga Produk" required>
       </li>
       <li>
           <button type="submit" name="submit">Add Car</button>
       </li>
    </form>
</div>
</section>

<section class="services">

<?php foreach ( $produk as $row)  : ?>

<div class="service">
    <div class="icon">
        <img src="<?= $row['gambar']; ?>"
            alt="<?= $row['nama']; ?>">
    </div>
    <h3> <?= $row['nama']; ?></h3>
    <p>Merek : <?= $row['merek']; ?></p>
    <p>Price : <?= $row['harga']; ?></p>
    <br>
   
    <a class="ab" href="delete.php?id=<?= $row['id']; ?>">Hapus</a>
    
</div>
<?php endforeach; ?>
</section>


</div>
<script>
const menuToggle = document.querySelector('.menu-toggle');
const nav = document.querySelector('nav ul');

menuToggle.addEventListener('click', function () {
nav.classList.toggle('slide');
});


</script>

</body>

</html>