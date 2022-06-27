<?php 


$conn = mysqli_connect("localhost", "root", "", "data_saya");
// $conn = mysqli_connect("localhost", "qwertypo", "testing", "qwertypo");
function tambah($data){

	global $conn;


    $nama = htmlspecialchars($data["nama"]);
    $merek = htmlspecialchars($data["merek"]);
    $gambar = htmlspecialchars($data["gambar"]);
    $harga = htmlspecialchars($data["harga"]);


    if ($nama == '' && $merek == '' && $gambar == '' && $harga == '' ) {
    	return 0;
    }

    $query = "INSERT INTO products VALUES(0, '$nama', '$merek', '$gambar', '$harga')";
    mysqli_query($conn, $query); 

    return mysqli_affected_rows($conn);
 
}


function query($query){

	global $conn;
	$result = mysqli_query($conn, $query);
	$rows=[];

	while ( $row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;

	}

	return $rows;
}


function tambah2($data){

	global $conn;



    $nama = htmlspecialchars($data["nama"]);
    

    if ($nama == '' ) {
    	return 0;
    }

    $query = "INSERT INTO listbarang VALUES(0, '$nama')";
    mysqli_query($conn, $query); 

    return mysqli_affected_rows($conn);


 
}

function queryListbarang($query){

	global $conn;
	$result = mysqli_query($conn, $query);
	$rows=[];

	while ( $row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;

	}

	return $rows;
}




function registrasi($data) {
	global $conn;

	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	// cek username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

	if( mysqli_fetch_assoc($result) ) {
		echo "<script>
				alert('username sudah terdaftar!')
		      </script>";
		return false;
	}


	// cek konfirmasi password
	if( $password !== $password2 ) {
		echo "<script>
				alert('konfirmasi password tidak sesuai!');
		      </script>";
		return false;
	}

	// enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	// tambahkan userbaru ke database
	mysqli_query($conn, "INSERT INTO user VALUES( 0, '$username', '$password')");

	return mysqli_affected_rows($conn);

}


function hapus($id){
	global $conn;

	mysqli_query($conn, "DELETE FROM products WHERE id = $id");

	return mysqli_affected_rows($conn);
}

?>


