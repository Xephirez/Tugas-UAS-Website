<?php 

require 'functions.php';

$id = $_GET["id"];

if ( hapus($id) > 0 ) {
	echo "<script> 
      alert('data berhasil dihapus');
       </script>";
       header("Location: add_products.php");

} else {
	echo "<script> 
    alert('data gagal dihapus');
    document.location.href = add_products.php; 
    </script>";
}

?>