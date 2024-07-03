<?php 
// Create connection
$koneksi = mysqli_connect('localhost', 'root', '', 'kopas_tamsis');
 // Check connection
if (!$koneksi) {
	die ("connection failed.". mysqli_connect_error()); //close connection
}

function registrasi($data)
{
	global $koneksi;

	$email = strtolower(stripslashes($data["email"]));
	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($koneksi, $data ["password"]);
	$password2 = mysqli_real_escape_string($koneksi, $data ["password2"]);

	// cek username sudah ada belum
	$result = mysqli_query($koneksi, "SELECT username FROM registrasi WHERE username = '$username' ");
	if(mysqli_fetch_assoc($result)) {
		echo "<script>
				alert('username sudah terdaftar!')
				</script>";
		return false;
	}


	// cek konfirmasi password
	if ($password !== $password2) {
		echo "<script>
			alert('Konfirmasi password tidak sesuai!');
		</script>"; 
		return false;
	}

	// enkripsi ppassword
	$password = password_hash($password, PASSWORD_DEFAULT);

	// tambahkan userbaru ke database
	mysqli_query($koneksi, "INSERT INTO registrasi VALUES('', '$email','$username', '$password')");

	return mysqli_affected_rows($koneksi);

}



 ?>


