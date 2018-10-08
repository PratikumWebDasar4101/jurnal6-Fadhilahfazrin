<?php 
include("db.php");

$nim = $_POST['nim'];
$password = $_POST['password'];
$sql = mysqli_query("SELECT * from registrasi WHERE nim='$nim' && password='$password'");

$no = mysqli_num_rows($sql);

print_r($no);
if ($no == 1) {
	session_start();
	$_SESSION['nim'] = $nim;
	header("Locatin: list_data.php");
}else{
	header("Locatin: form.php");
}
 ?>
