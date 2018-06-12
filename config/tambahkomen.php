<?php

  error_reporting(0);
  
  include 'koneksi.php';

  $id_menu     = $_POST["id_menu"];
  $nama        = $_POST["username"];
  $email       = $_POST["email"];
  $pertanyaan  = $_POST["pertanyaan"];
  $balasan     = $_POST["balasan"];
  $tgl         = $_POST["tgl"];
  $nama_menu   = $_POST["nama_menu"];

  $insert     = "INSERT INTO komentar VALUES ('','$id_menu','$nama','$email','$pertanyaan','$balasan', '$tgl', '$nama_menu')";

  $simpan     = mysqli_query($konek, $insert)or die(mysqli_error($konek));

  echo "<br><br><br><strong><center><i>Berhasil Menambahkan Pertanyaan / Komentar!";
  echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index.php?halaman=order">';  

?>
