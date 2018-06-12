<?php
    
	include 'koneksi.php';

    $id_menu        = $_POST['id_menu'];
	$kode_menu 		= $_POST['kode_menu'];
	$jenis_menu	 	= $_POST['jenis_menu'];
    $kode_menu      = $_POST['nama_menu'];
    $gambar_menu    = $_POST['gambar_menu'];
    $hargamenu      = $_POST['hargamenu'];
    $keterangan     = $_POST['keterangan'];


	$update 	= "UPDATE menu SET keterangan='$keterangan', hargamenu='$hargamenu', gambar_menu='$gambar_menu', nama_menu='$nama_menu', jenis_menu='$jenis_menu', kode_menu='$kode_menu' WHERE id_menu='$id_menu'";
	$updatemenu	= mysqli_query($konek, $update)or die(mysqli_error());

	if ($updatemenu)
    	{
    		echo "<br><br><br><strong><center><i>Data Berhasil Diubah!";
    		echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/index.php?halaman=edit-menu">';
    	}
	else {
    		print"
    			<script>
    				alert(\"Data Gagal Diubah!\");
    				history.back(-1);
    			</script>";
    	}
?>