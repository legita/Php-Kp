<?php
	error_reporting();
	include 'koneksi.php';

	$id_user = $_GET ['id'];

	$hapus 	 = "DELETE FROM konfirmasi WHERE id_user='$id_user'";
	$query	 = mysqli_query($konek, $hapus);

	if ($query)
	    {
	    	echo "<strong><center>Data Berhasil Dihapus";
	    	echo "<META HTTP-EQUIV='REFRESH' CONTENT ='1; URL=../admin/home-admin.php?page=konfirmasi'>";
	    }
	else {
	    	echo "<strong><center>Data Gagal Diubah";
	    	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index.php?paget=edit_konfirmasi">';
	    	
	    }
?>