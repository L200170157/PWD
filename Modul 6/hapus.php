<?php
	$conn= mysqli_connect('localhost', 'root', '','informatika');
	
	$kode_buku = $_GET['kode_buku'];
	$hapus="DELETE from buku where kode_buku = '$kode_buku'";
	$data=mysqli_query($conn,$hapus);
	
	if($data > 0){
		echo "
		<script>
		alert('data berhasil di hapus');
		document.location.href='lat.php';
		</script>";
	}else
		echo "
		<script>
		alert('data gagal di hapus');
		document.location.href='lat.php';
		</script>";
?>