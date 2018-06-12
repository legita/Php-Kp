<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(assets/images/a.jpg);" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="display-t js-fullheight">
          <div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
            <h1> Konfirmasi Pemesanan</h1>
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

<script type="text/javascript">
    function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))

        return false;
      return true;
    }
</script>
<?php
$perintah="SELECT * FROM pembeli";
$hasil=mysql_query($query);
while($baris=mysql_fetch_array($hasil)){
      echo $baris['totalcek']. "<br>";
}

?>

<div class="container">
  <ol class="breadcrumb">
    <li class="active"><a data-toggle="tooltip" data-placement="top" title="Click me!" href="index.php">SMK Mandalahayu II Bekasi</a> / <a href="#">Lainnya</a> / Konfirmasi Pembayaran</li>
  </ol>
  <h3><b>&nbsp;&nbsp;Konfirmasi</b> Pembayaran</h3>
  <hr>
      <div class="alert alert-info">
      <strong>Info!</strong><i> Bagi anda yang telah melakukan konfirmasi pembayaran silahkan tunggu sampai pembayaran dikonfirmasi oleh tata usaha. Klik <a data-toggle="tooltip" data-placement="top" title="Cek proses!" href="index.php?content=cek-proses">disini</a> untuk mengecek.</i>
      </div>
  <br>
  <br>
  <br>
  <br>

  <form class="form-horizontal" action="config/add-konfirmasi-pesan.php" method="POST" enctype="multipart/form-data">

        <input type="hidden" name="id_pembayaran">
        <div class="form-group">
            <label class="col-sm-2"></label>
            <label class="col-sm-3">Invoice Pemesanan</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-5">
                <input onkeypress="return hanyaAngka(event)"  class="form-control" name="invoice" type="text" id="invoice" placeholder="Masukkan invoice pembayaran anda" required>
            </div>
        </div>
        <div class="form-group">
                  <label class="col-sm-2"></label>
                  <label class="col-sm-3">Total Pembayaran</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-5">
                    <input class="form-control" type="text" name="totalcek" id="totalcek" readonly>
                  </div>
                </div>
        <div class="form-group">
            <label class="col-sm-2"></label>
            <label class="col-sm-3">Bukti Pembayaran</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-5">
                <input type="file" name="fileToUpload" id="fileToUpload">
            </div>
        </div>
        <input type="hidden" name="fixed" value="0">
        <div class="form-group">
            <label class="control-label col-sm-4"></label>
            <div class="col-sm-6" align="right">
                <button class="btn btn-primary" type="submit" name="submit" value="Konfirmasi Pembayaran">Konfirmasi Pembayaran</button>
            </div>
        </div>
</div>

<br>
<br>
