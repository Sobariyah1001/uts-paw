<!DOCTYPE html>
<html>
<head>
	<title>Update Data_188</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css.css">
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<?php 
	require 'connect.php';
	$id_188=$_GET['id_188'];
	$sql="SELECT * FROM tbl_188 where id_188=$id_188";
	$query=mysqli_query($connect,$sql);
	if (!$query) {
		echo "query salah";
	}
	 while ($row=mysqli_fetch_array($query))
	 {
	 ?>
	
	 <form class="container1" method="post" action=" ">
	 	<h2 class="text-center">Update Data_188</h2>
		<table>
			<tr>
				<td><label hidden>ID_188</label></td>
				<td><input class="styleinput" type="text" name="id_188" value="<?=$row['id_188']?>" hidden></td>
			</tr>
			<tr>
				<td><label>Nama_188:</label></td>
				<td><input type="text" name="nama_188" value="<?=$row['nama_188']?>"></td>
			</tr>
			<tr>
				<td><label>E-mail_188:</label></td>
				<td><input type="text" name="email_188" value="<?=$row['email_188']?>"></td>
			</tr>
		</table>
		<div class="d-grid gap-2">
			<button class="btn btn-primary" type="submit" name="submit">Update</button>
		</div>
		</div>		
	</form>
	<?php } ?>
	<br><br><br><br>
</body>
</html>

<?php 
require 'connect.php';

if (isset($_POST["submit"])) {
	$nama_188= $_POST['nama_188'];
	$email_188= $_POST['email_188'];

	$sql="UPDATE `tbl_188` SET nama_188='$nama_188',email_188='$email_188' WHERE id_188=$id_188";
	$query=mysqli_query($connect, $sql);
	if(!$query){
		echo "
		<script>
			alert('Maaf! Data gagal diupdate');
			
		</script>
		";
	}else{
		echo "
		<script>
			alert('Selamat! Data berhasil diupdate');
			document.location.href='index.php';
		</script>";
	}
}
 ?>
