<?php

	include 'koneksi.php';

    $id_komen       = $_POST['id_komen'];
	$nama    		= $_POST['nama'];
    $email          = $_POST['email'];
    $pertanyaan     = $_POST['pertanyaan'];
	$tgl       		= $_POST['tgl'];
    $balas          = $_POST['balas'];



	$update 	= "UPDATE komenweb SET nama='$nama', email='$email', pertanyaan='$pertanyaan', tgl='$tgl', balas='$balas' WHERE id_komen='$id_komen'";
	$updatefaq	= mysqli_query($konek, $update)or die(mysqli_error());

	if ($updatefaq)
    	{
    		echo "<br><br><br><strong><center><i>Balasan berhasil ditambah!";
    		echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/index.php?halaman=komentar">';
    	}
	else {
    		print"
    			<script>
    				alert(\"Balasan gagal ditambah!\");
    				history.back(-1);
    			</script>";
    	}
?>