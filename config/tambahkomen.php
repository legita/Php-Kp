<?php
  error_reporting(0);
  include 'koneksi.php';

  $id_menu     = $_POST["id_menu"];
  $nama_menu   = $_POST["nama_menu"];
  $nama        = $_POST["nama"];
  $pertanyaan  = $_POST["pertanyaan"];
  $balasan     = $_POST["balasan"];
  $tgl         = $_POST["tgl"];
  $type        = $_POST["type"];
 

  $insert     = "INSERT INTO komentar VALUES ('','$id_menu','$nama_menu','$nama','$pertanyaan','$balasan','$tgl','$type')";

  $simpan     = mysqli_query($konek, $insert)or die(mysqli_error($konek));

      print"
      <script>
      history.back(-1);
      </script>"


?>
