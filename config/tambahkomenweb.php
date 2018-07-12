<?php

  error_reporting(0);
  
  include 'koneksi.php';

  $nama        = $_POST["nama"];
  $email       = $_POST["email"];
  $pertanyaan  = $_POST["pertanyaan"];
  $tgl         = $_POST["tgl"];
  $balas       = $_POST["balas"];
  

  $insert     = "INSERT INTO komenweb VALUES ('','$nama','$email','$pertanyaan', '$tgl','$balas')";

  $simpan     = mysqli_query($konek, $insert)or die(mysqli_error($konek));

  echo "<br><br><br><strong><center><i>Berhasil Menambahkan Komentar!";
  echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index.php?halaman=Pertanyaan">';  

?>
