<?php

  error_reporting();

  include '../config/koneksi.php';

  $id_komen = $_GET['id_komen'];

  $edit    = "SELECT * FROM komenweb WHERE id_komen = '$id_komen'";
  $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
  $data    = mysqli_fetch_array($hasil);

?>

<!-- Trigger/Open The Modal -->
<br>
<br>
<label><a href= "index.php?halaman=komentar"> Komentar Web </a> | Edit Komentar Web </label>

<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Edit Komentar</h1>
    </div>
    <!--End Page Header -->
</div>

<div class="row">
       
       <section class="col-lg-12 animate-box">
        <form class="form-horizontal" action="../config/update_komen.php" method="POST">
        <input type="hidden" name="id_komen" value="<?php echo $id_komen?>">
        <div class="form-group">
            <label class="col-sm-1"></label>
            <label class="col-sm-2">Nama</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-7">
                <input class="form-control" name="nama" type="text" value="<?php echo $data['nama'];?>" required>
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
            <label class="col-sm-2">Waktu</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-7">
                <input class="form-control" name="tgl" type="text" value="<?php echo $data['tgl'];?>" readonly>
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
            <label class="col-sm-2">Balasan</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-7">
                <input class="form-control" name="balas" type="text" value="<?php echo $data['balas']; ?>" required>
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
