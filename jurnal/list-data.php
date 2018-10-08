<?php 
require_once('db.php');
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Data Anda</h2>
	<table border="1">
		<thead>
			<td>Nama</td>
			<td>NIM</td>
			<td>Kelas</td>
			<td>Jenis Kelamin</td>
			<td>Hobi</td>
			<td>Fakultas</td>
			<td>Alamat</td>
			<td>Password</td>
			<td>Action</td>
		</thead>
		<tbody>

<?php 
$sql = "SELECT * FROM registrasi";
$result = mysqli_query($conn, $sql);
$row = mysqli_num_rows($result);

if ($row > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		$id = $row['id'];
		echo "<tr>";
		echo "<td>".$row['nama']."</td>";
		echo "<td>".$row['nim']."</td>";
		echo "<td>".$row['kelas']."</td>";
		echo "<td>".$row['jenis_kelamin']."</td>";
		echo "<td>".$row['hobi']."</td>";
		echo "<td>".$row['fakultas']."</td>";
		echo "<td>".$row['alamat']."</td>";
		echo "<td>".$row['password']."</td>";
		echo "<td>"."<a href='form-update.php?id=$id'>Edit</a>"."</td>";
		echo "</tr>";

	}
} else {
	echo "0 Result";
}
echo "<a href = form.php>Input Kembali</a>";
echo "<br>";
?>
 		</tbody>
 	</table>
 </body>
 </html>