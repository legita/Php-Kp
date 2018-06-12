<?php

  error_reporting();

  include '../config/koneksi.php';

  $id = $_GET['id'];

  $edit    = "SELECT * FROM komentar WHERE id = '$id'";
  $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
  $data    = mysqli_fetch_array($hasil);

?>

<!-- Trigger/Open The Modal -->
<br>
<br>
<label><a href= "index.php?halaman=komentar"> Komentar Menu </a> | Edit Komentar Menu </label>

<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Edit Komentar</h1>
    </div>
    <!--End Page Header -->
</div>

<div class="row">
       
       <section class="col-lg-12 animate-box">
        <form class="form-horizontal" action="../config/update_komentar.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id?>">
        <div class="form-group">
            <label class="col-sm-1"></label>
            <label class="col-sm-2">Nama Menu</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-7">
                <input class="form-control" name="nama_menu" type="text" value="<?php echo $data['nama_menu'];?>" readonly>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-1"></label>
            <label class="col-sm-2">Nama</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-7">
                <input class="form-control" name="nama" type="text" value="<?php echo $data['nama'];?>" readonli>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-1"></label>
            <label class="col-sm-2">Email</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-7">
                <input class="form-control" name="email" type="email" value="<?php echo $data['email'];?>" readonly>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-1"></label>
            <label class="col-sm-2">Pertanyaan / Komentar</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-7">
                <input class="form-control" name="pertanyaan" type="text" value="<?php echo $data['pertanyaan'];?>" readonly>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-1"></label>
            <label class="col-sm-2">Waktu</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-7">
                <input class="form-control" name="tgl" type="text" value="<?php echo $data['tgl'];?>" readonly>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-1"></label>
            <label class="col-sm-2">Balasan</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-7">
                <input class="form-control" name="balasan" type="text" value="<?php echo $data['balasan']; ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4"></label>
            <div class="col-sm-7" align="right">
                <button class="btn btn-primary">Update</button>
            </div>
        </div>
        </form>
       </section>
   
</div>
