<?php
	$conn= mysqli_connect('localhost', 'root', '','praktikum6');
	
	$kodebuku = $_GET['kode_buku'];
	$hapus="delete from buku where kode_buku = '$kodebuku'";
	$data=mysqli_query($conn,$hapus);
	
	if($data > 0){
		echo "
		<script>
		alert('data berhasil di hapus');
		document.location.href='formbuku.php';
		</script>";
	}else
		echo "
		<script>
		alert('data gagal di hapus');
		document.location.href='formbuku.php';
		</script>";
?>