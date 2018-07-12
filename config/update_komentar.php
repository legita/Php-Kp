<?php

	include 'koneksi.php';

    $id             = $_POST['id'];
    $nama_menu      = $_POST['nama_menu'];
	$nama    		= $_POST['nama'];
    $pertanyaan     = $_POST['pertanyaan'];
	$balasan        = $_POST['balasan'];
    $tgl       		= $_POST['tgl'];



	$update 	= "UPDATE komentar SET nama='$nama', nama_menu='$nama_menu', pertanyaan='$pertanyaan', balasan='$balasan', tgl='$tgl' WHERE id='$id'";
	$updatefaq	= mysqli_query($konek, $update)or die(mysqli_error());

	if ($updatefaq)
    	{
    		echo "<br><br><br><strong><center><i>Balasan berhasil ditambah!";
    		echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/index.php?halaman=komentarmenu">';
    	}
	else {
    		print"
    			<script>
    				alert(\"Balasan gagal ditambah!\");
    				history.back(-1);
    			</script>";
    	}
?>