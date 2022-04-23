<!DOCTYPE html>
<html>
<head>
	<title>20-188 Sobariyah Maghfiroh</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css.css">
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<br>
	<h2 class="text-center">UTS-Sobariyah Maghfiroh</h2><br><br>
	<a href="add_data.php" class="btn btn-primary">Tambah Data</a><br><br>
	<div class="text-center">
		<table class="table table-sm">
			<tr>
				<th>ID_188</th>
				<th>NAMA_188</th>
				<th>E-mail_188</th>
				<th>AKSI</th>
			</tr>
			<?php 
				require 'connect.php';
				$sql= "SELECT * FROM tbl_188";
				$query = mysqli_query($connect, $sql);

				while ($row=mysqli_fetch_array($query)) {
			?>
			<tr>
				<td><?=$row['id_188'];?></td>
				<td><?=$row['nama_188'];?></td>
				<td><?=$row['email_188'];?></td>
				<td><a class="btn btn-info" href="update_data.php?id_188=<?=$row['id_188']?>">Update</a> | 
					<a class="btn btn-danger" href="delete_data.php?id_188=<?=$row['id_188']?> " onclick="return confirm('Anda yakin ingin menghapus?')">Delete</a></td>
			</tr>
			<?php 
			}
			 ?>
		</table>
	</div>
</body>
</html>