<?php
error_reporting(0);

include'koneksi.php';

$nama_lengkap 	= $_POST['nama_lengkap'];
$username 		= $_POST['username'];
$password 		= md5($_POST['password']);
$jk				= $_POST['jk'];
$provinsi		= $_POST['provinsi'];
$kota			= $_POST['kota'];
$kecamatan		= $_POST['kecamatan'];
$alamat 		= $_POST['alamat'];
$email 			= $_POST['email'];
$no_tlp 		= $_POST['no_tlp'];

$input = "INSERT INTO user (id_user,nama_lengkap,username,password,jk,provinsi,kota,kecamatan,alamat,email,no_tlp,level) values ('','$nama_lengkap','$username','$password','$jk','$provinsi','$kota','$kecamatan','$alamat','$email','$no_tlp','user')";
$data = mysqli_query($konek,$input) or die (mysqli_error($konek));

if($data){
 	echo "<strong><center>Anda Berhasil Mendaftar";
 	echo '<META HTTP-EQUIV = "REFRESH" CONTENT = "1;URL=../index.php?halaman=index">';
}

?>