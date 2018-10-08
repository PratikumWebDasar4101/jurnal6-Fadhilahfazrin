<?php 
require_once("db.php");

$nama       	= $_POST['nama'];
$nim       		= $_POST['nim'];
$kelas			= $_POST['kelas'];
$jenis_kelamin	= $_POST['jenis_kelamin'];
$hobi			= $_POST['hobi'];
$fakultas 		= $_POST['fakultas'];
$alamat			= $_POST['alamat'];
$password		= $_POST['password'];

$sql = "INSERT INTO registrasi( nama, nim, kelas, jenis_kelamin, hobi, fakultas, alamat, password)
		VALUES ('$nama', '$nim', '$kelas', '$jenis_kelamin', '$hobi', '$fakultas', '$alamat', '$passwrod')";


if (mysqli_query($conn, $sql)) {
	echo "<h2>Terima kasih!</h2>";
	echo "<br>";
	echo "New record created successfully";

}else{

	echo "Error: ".$sql."<br>".mysqli_error($conn);

}

mysqli_close($conn);
echo "<br>";
echo "<a href = login.php>Login</a>";
 ?>