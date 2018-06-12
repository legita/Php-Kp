<?php

error_reporting();

date_default_timezone_set('Asia/Jakarta');

include 'koneksi.php';

$iduser 		= $_POST['id_user'];
$tgl 		  	= $_POST['tgl'];
$nama_pembeli 	= $_POST['nama_pembeli'];
$kode_menu  	= $_POST['kode_menu'];
$nama_menu  	= $_POST['nama_menu'];
$type		  	= $_POST['type'];
$jenis_wadah 	= $_POST['jenis_wadah'];
$harga 		  	= $_POST['harga'];
$jumlah		  	= $_POST['jumlah'];
$hargamenu 		= $_POST['hargamenu'];
$buah 		  	= $_POST['buah'];
$total	  		= $_POST['total'];
$tgl_pesan	  	= $_POST['tgl'];
$tgl_butuh	  	= $_POST['date'];
$catatan	  	= $_POST['catatan'];


$insert = "INSERT INTO pembelian (id_pembelian,id_user,nama_pembeli,tgl,kode_menu,nama_menu,type,jenis_wadah,harga,hargamenu,buah,jumlah,total,tgl_pesan,tgl_butuh,catatan) VALUES ('','$iduser','$nama_pembeli','$tgl','$kode_menu','$nama_menu','$type','$jenis_wadah','$harga','$hargamenu','$buah','$jumlah','$total','$tgl_pesan','$tgl_butuh','$catatan')";

$simpan = mysqli_query($konek,$insert) or die (mysqli_error($konek));



	echo "<br><br><br><strong><center><i>Anda Berhasil Memesan!";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index.php?halaman=Pemesanan">'; 


?>