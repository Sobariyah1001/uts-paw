<!DOCTYPE html>
<html>
<head>
	<title>Menambah Data_188</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css.css">
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<form class="container1" method="post" action=" ">
		<h2 class="text-center">Menambah Data Baru</h2><br><br>
		<table>
			<tr>
				<td><label hidden>ID</label></td>
				<td><input type="text" name="id_188" hidden></td>
			</tr>
			<tr>
				<td><label >Nama</label></td>
				<td><input type="text" name="nama_188" required></td>
			</tr>
			<tr>
				<td><label>E-mail</label></td>
				<td><input type="text" name="email_188" required></td>
			</tr>
		</table>
		<div class="d-grid gap-2">
			<button class="btn btn-primary" type="submit" name="submit">Update</button>
		</div>		
	</form>
</body>
</html>

<?php 
require 'connect.php';


if (isset($_POST["submit"])) {
	$nama_188= $_POST['nama_188'];
	$email_188= $_POST['email_188'];

	$sql="INSERT INTO `tbl_188` (`id_188`, `nama_188`, `email_188`) VALUES (NULL, '$nama_188', '$email_188');";
	$query=mysqli_query($connect, $sql);
	if(!$query){
		echo "
		<script>
			alert('Maaf! Data gagal dihapus');
			
		</script>
		";
	}else{
		echo "
		<script>
			alert('Selamat! Data berhasil ditambahkan!');
			document.location.href='index.php';
		</script>";

	}
}
 ?>

