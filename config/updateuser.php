<?php

	include 'koneksi.php';
	
	$id_user		 = $_POST['id_user'];
	$nama_lengkap	 = $_POST['nama_lengkap'];
	$pj				 = $_POST['pj'];
	$username 		 = $_POST['username'];
	$password 		 = ($_POST['password']);
	$passwordkonfirm = md5($_POST['passwordkonfirm']);	
	$jk				 = $_POST['jk'];
	$provinsi		 = $_POST['provinsi'];
	$kota			 = $_POST['kota'];
	$kecamatan 		 = $_POST['kecamatan'];
	$alamat 		 = $_POST['alamat'];
	$email 		 	 = $_POST['email'];
	$no_tlp			 = $_POST['no_tlp'];
	$level 			 = $_POST['level'];
	

		$update = "UPDATE user SET nama_lengkap 	= '$nama_lengkap',
									pj 			 	= '$pj',
									username 		= '$username',
									password 		= '$passwordkonfirm',
									jk 				= '$jk',
									provinsi 		= '$provinsi',
									kota 			= '$kota',
									kecamatan 		= '$kecamatan',
									alamat 			= '$alamat',
									email 			= '$email',
									no_tlp 			= '$no_tlp'
									WHERE id_user 	= '$id_user'";

		$updateuser	= mysqli_query($konek, $update)or die(mysqli_error());

	if ($updateuser)
    	{
    		echo "<br><br><br><strong><center><i>Data Berhasil Diubah!";
    		echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/index.php?halaman=view-user">';
    	}
	else {
    		print"
    			<script>
    				alert(\"Data Gagal Diubah!\");
    				history.back(-1);
    			</script>";
    	}
?>