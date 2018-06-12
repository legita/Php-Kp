<?php

//error_reporting(0);

include "koneksi.php";
include "fungsi_thumb.php";


$id 	 		= $_POST['id'];
$kode_produk 	= $_POST['kode_produk'];
$jenis_produk 	= $_POST['jenis_produk'];
$ukuran 		= $_POST['ukuran'];
$harga 			= $_POST['harga'];
$warna			= $_POST['warna'];
$stok			= $_POST['stok'];


  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(1,99);
  $nama_file_unik = $acak.$nama_file; 
  
  
if (!empty($lokasi_file)){
UploadBanner($nama_file);
		mysqli_query($connect,"update produk set kode_produk='$kode_produk', jenis_produk='$jenis_produk', 
					 ukuran='$ukuran', harga='$harga', warna='$warna', stok='$stok', gambar='$nama_file' where id_produk='$id' ");
			
	}
else
	{
		mysqli_query($connect,"update produk set kode_produk='$kode_produk', jenis_produk='$jenis_produk', 
					 ukuran='$ukuran', harga='$harga', warna='$warna', stok='$stok' where id_produk='$id'");
	}

header("location:admin.php?menu=data_produk");

?>