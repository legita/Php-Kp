<?php

	include 'koneksi.php';

	$id_transaksi = $_GET ['id'];

	$hapus 	 = "DELETE FROM transaksi WHERE id_transaksi='$id_transaksi'";
	$query	 = mysqli_query($konek, $hapus);

	if ($query)
	    {
	    	echo "<strong><center>Data Berhasil Dihapus";
	    	echo "<META HTTP-EQUIV='REFRESH' CONTENT ='1; URL=../admin/index.php?halaman=pesanan-masuk'>";
	    }
	else {
	    	echo "<strong><center>Data Gagal Diubah";
	    	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/index.php?halaman=pesanan-masuk">';
	    	
	    }
?>