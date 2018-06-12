<?php

  error_reporting(0);

?>

<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(assets/images/a.jpg);" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="display-t js-fullheight">
          <div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
            <h1>See <em>Our</em> Menu</h1>
            <h2>Brought to you </h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<br>
<br>
<br>
<br>

<?php
include 'config/koneksi.php';
$id_user = $_SESSION['id_user'];

$query = "SELECT * FROM pembelian where nama_pembeli = '".$_SESSION['username']."' ORDER BY tgl desc";
$tampil = mysqli_query($konek, $query) or die (mysqli_error($konek));

?>

<div class="container">
  <ol class="breadcrumb">
    <li class="active"><a data-toggle="tooltip" data-placement="top" title="Click me!" href="index.php">SMK Mandalahayu II Bekasi</a> / <a href="#">Lainnya</a> / Cek Proses</li>
  </ol>
  <h3><b>&nbsp;&nbsp;Cek</b> Proses</h3>
  <hr>
  
  <div class="alert alert-info">
  <strong>Info!</strong> <i>Silahkan cek proses dengan memasukkan kode daftar yang anda dapatkan saat mendaftar.</i>
  </div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<form class="form-horizontal" action="" method="POST">
<div>
  <div class="form-group">
    <label class="col-sm-2"></label>
    <label class="col-sm-2">Kode Daftar</label>
    <label class="col-sm-1">:</label>
    <div class="col-sm-5">
      <select name="invoice" class="form-control" style="background-color: gray;">
        <option>--Invoice--</option>
         <?php
           while($tmp = mysqli_fetch_array($tampil)){
         ?>
       <option value="<?php echo $tmp['invoice']; ?>"><?php echo $tmp['invoice']; ?></option>
      
       <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4"></label>
      <div class="col-sm-6" align="right">
          <button style="background-color: maroon;" type="submit" class="btn btn-primary" name="cari">Cek Proses</button>
      </div>
  </div>
</div>
</form>
</div>
  
  <br>
  <br>


