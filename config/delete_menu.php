<?php
error_reporting();

	include 'koneksi.php';

	$id_menu = $_GET['id'];

	$hapus 	 = "DELETE FROM menu WHERE id_menu='$id_menu'";
	$query	 = mysqli_query($konek, $hapus);

	if ($query)
	    {
	    	echo "<strong><center>Data Berhasil Dihapus";
	    	echo "<META HTTP-EQUIV='REFRESH' CONTENT ='1; URL=../admin/index.php?halaman=menu-makanan'>";
	    }
	else {
	    	print"
	    		<script>
	    			alert(\"Data Gagal Diubah!\");
	    			history.back(-1);
	    		</script>";
	    	
	    }
?>