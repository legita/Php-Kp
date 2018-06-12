<?php

error_reporting();
include'koneksi.php';

$id=$_GET['id'];

	$sql = "DELETE FROM pembelian where id_pembelian='$id'";
	$query = mysqli_query($konek,$sql)or die(mysqli_error($konek));

	if($query){
	echo "<strong><center>Data Pemesanan Terhapus";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index.php?halaman=Pemesanan">'; 
	
	}

?>


