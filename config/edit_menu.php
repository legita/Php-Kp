<?php
    
	include 'koneksi.php';

    $id_menu        = $_POST['id'];
	$kode_menu 		= $_POST['kode_menu'];
	$jenis_menu	 	= $_POST['jenis_menu'];
    $nama_menu      = $_POST['nama_menu'];
    $hargamenu      = $_POST['hargamenu'];
    $hargasatuan    = $_POST['hargasatuan'];
    $keterangan     = $_POST['keterangan'];


    $target_dir = "../makanan/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" && $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG"
    && $imageFileType != "GIF" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    $insert         = "INSERT INTO menu VALUES ('','$kode_menu','$jenis_menu','$nama_menu','$target_file','$hargamenu','$hargasatuan','$keterangan')";

    $simpan         = mysqli_query($konek, $insert)or die(mysqli_error($konek));


        $update     = "UPDATE menu set kode_menu='$kode_menu', jenis_menu='$jenis_menu', 
                         nama_menu='$nama_menu', hargamenu='$hargamenu', hargasatuan='$hargasatuan', keterangan='$keterangan' where id_menu='$id_menu'";
        $update  = mysqli_query($konek, $update)or die(mysqli_error());
 

   
    echo "<br><br><br><strong><center><i>Data Berhasil Diubah!";
    echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/index.php?halaman=menu-makanan">';

?>