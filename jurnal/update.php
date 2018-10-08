<?php
require_once("db.php");

$nama       	= $_POST['nama'];
$nim       		= $_POST['nim'];
$kelas			= $_POST['kelas'];
$jenis_kelamin	= $_POST['jenis_kelamin'];
$hobi			= $_POST['hobi'];
$fakultas 		= $_POST['fakultas'];
$alamat			= $_POST['alamat'];
$passsword		= $_POST['password'];

$sql = "UPDATE registrasi SET nama='$nama', nim='$tgl_lahir', kelas='$kelas', jenis_kelamin='$jenis_kelamin', 
								hobi='$hobi', fakultas='$fakultas', alamat='$alamat, password='$passsword', 
		WHERE nim=$nim";

if (mysqli_query($conn, $sql)) {
	echo "<h2>Terima kasih!</h2>";
	echo "<br>";
    echo "Record updated successfully";
}else {
    echo "Error updating record: " . $sql . "<br>" . mysqli_error($conn);
]

echo "<br>";
echo "<a href = form.php>Kembali ke halaman awal</a>";
?>