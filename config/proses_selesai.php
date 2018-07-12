<?php

include 'koneksi.php';

$id 	 = $_GET['id'];


$updateConfirm = "UPDATE transaksi SET selesai = '1' WHERE id_transaksi = '$id'";

$query = mysqli_query($konek,$updateConfirm);

	echo "<strong><center>Konfirmasi Berhasil";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/index.php?halaman=data-konfirmasi">'; 


?>
