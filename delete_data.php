<?php 
require 'connect.php';
$id_188=$_GET['id_188'];

$sql="DELETE FROM tbl_188 WHERE id_188=$id_188";
$query=mysqli_query($connect,$sql);

if(!$query){
	echo "
	<script>
		alert('Maaf! Data gagal dihapus');
		
	</script>
	";
}else{
	echo 
	"<script>
		alert('Selamat! Data berhasil dihapus');
		document.location.href='index.php';
	</script>";

}
 ?>