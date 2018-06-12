<?php
error_reporting(0);
include'koneksi.php';

$username 		= $_POST['username'];
$email 			= $_POST['email'];
$no_tlp 		= $_POST['no_tlp'];
$cara			= $_POST['cara'];
$tanggal		= $_POST['tanggal'];

$input = "INSERT INTO konfirmasi (id,username,email,rekening,no_tlp,cara,tanggal) values ('','$username','$email','22-8282-6446','$no_tlp','$cara','$tanggal')";
$data = mysqli_query($konek,$input) or die (mysqli_error($konek));

if($data){
 	echo "<strong><center>Anda Berhasil Menkonfirmasi Pembayaran";
 	echo '<META HTTP-EQUIV = "REFRESH" CONTENT = "1;URL=../index.php?page=konfirmasi">';
}

?>