

<?php

	include 'koneksi.php';

	$input ="UPDATE konfirmasi  SET validasi='ok'";
$data = mysqli_query($konek,$input) or die (mysqli_error($konek));

if($data){
 	echo "<strong><center>Anda Berhasil Update Konfirmasi";
 	echo '<META HTTP-EQUIV = "REFRESH" CONTENT = "1;URL=../admin/home-admin.php?page=konfirmasi">';
}
?>