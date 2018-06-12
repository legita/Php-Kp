<?php
error_reporting();
	include 'koneksi.php';

	$id_user = $_GET['id'];

	$hapus 	 = "DELETE FROM user WHERE id_user='$id_user'";
	$query	 = mysqli_query($konek, $hapus);

	if ($query)
	    {
	    	echo "<strong><center>Data Berhasil Dihapus";
	    	echo "<META HTTP-EQUIV='REFRESH' CONTENT ='1; URL=../admin/index.php?halaman=view-user'>";
	    }
	else {
	    	echo "<strong><center>Data Gagal Diubah";
	    	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/index.php?halaman=view-user">';
	    	
	    }
?>