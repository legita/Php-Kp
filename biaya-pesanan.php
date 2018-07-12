<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(assets/images/a.jpg);" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="display-t js-fullheight">
          <div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
            <h1>Biaya Pemesanan</h1>
            <h2>Detail</h2>
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

$id_user = $_SESSION['username'];

$query1   = "SELECT * DISTINCT FROM transaksi join pembelian  WHERE 
            transaksi.invoice=pembelian.invoice and pembeli.id_user = '$id_user'";
$tampil1  = mysqli_query($konek, $query1);

?>

<div class="container">
  <hr>  
  <h2 class="modal-title" align="center" style="font-family: Kristen ITC; color: white; font-size: 45px;">Biaya Pesanan Anda</h2>
  <p align="center"><i>detail</i></p>
  <br>

  <div style="overflow-x:auto;">
<table class="table table-bordered table-responsive">
<thead>
    <tbody style="color: black;">
      <tr>
          <th class="bg-info"><center>No</center></th>
          <th class="bg-info"><center>Kode Menu</center></th>
          <th class="bg-info"><center>Nama Menu</center></th>
          <th class="bg-info"><center>Type</center></th>
          <th class="bg-info"><center>Wadah</center></th>
          <th class="bg-info"><center>Jumlah</center></th>
          <th class="bg-info"><center>Invoice</center></th>
          <th class="bg-info"><center>Harga</center></th>
          <th class="bg-info"><center>Buah</center></th>
          <th class="bg-info"><center>Tgl. Pemesanan</center></th>
          <th class="bg-info"><center>Tgl. Dibutuhkan</center></th>
          <th class="bg-info"><center>Total</center></th>
      </tr>  
<?php
if(!mysqli_num_rows($tampil1)) {
  echo "No posts yet";

} else {
while($row = mysqli_fetch_array($tampil1)) { ?>

  <tr style="color:white;">
      <td><center><?php echo $no++; ?></td>
      <td><center><?php echo $row['kode_menu']; ?></center></td>
      <td><center><?php echo $row['nama_menu']; ?></center></td>
      <td><center><?php echo $row['type']; ?></center></td>
      <td><center><?php echo $row['jenis_wadah']; ?></center></td>
      <td><center><?php echo $row['jumlah']; ?></center></td>
      <td><center><?php echo $row['invoice']; ?></center></td>
      <td><center><?php echo Rp. number_format($row['hargamenu']); ?></center></td>        
      <td><center><?php echo $row['buah']; ?></center></td>        
      <td><center><?php echo $row['tgl_pesan']; ?></center></td>        
      <td><center><?php echo $row['tgl_butuh']; ?></center></td>        
      <td><center><?php echo Rp. number_format($row['total']); ?></center></td>        
  </tr>

<?php }
}

?>
<div class="container" >
  <table>
    <thead>
    <tbody style="color: black;">
  <form action= "config/transaksi_pembayaran.php" method= "POST" enctype="multipart/form-data" >

<?php

  $username = $_SESSION['username'];


  $sum  = "SELECT SUM(total) as tot FROM pembelian WHERE nama_pembeli = '$username' And invoice='$invoice'";
  $query  = mysqli_query($konek,$sum);
  $data   = mysqli_fetch_array($query);

?>
<hr>
<td colspan="9"><label style="color: white;"> Total Seluruh :</label></h3></td>
<td colspan="4"><input style="color: black;" type="text" name="tot"  class="form-control" id="tot" value="<?php echo 'Rp. '.number_format($data['tot']); ?>" readonly></td>



<tr>
<td style="color:white;"><b><i> Status : </i></b> 
<?php
$query2   = "SELECT * FROM transaksi where invoice = '$invoice'";
$tampil2  = mysqli_query($konek, $query2) or die (mysqli_error($konek));
$d1       = mysqli_fetch_array($tampil2);
$inv      = mysqli_num_rows ($query2);

?>
<br><br>
<center>
    <?php
    if (isset($d1)) {
      if ($d1['konfirmasi']==0 ){ ?>
      <button type="button" class="btn btn-info">Menunggu Konfirmasi</button>
      <?php 
      } elseif ($d1['konfirmasi']==1){ ?>
        <td><a href="kwitansi.php?invoice=<?php echo $invoice; ?>" target ="_blank" class="btn btn-danger">Cetak Kwitansi</a></td>
        <td><button type="button" class="btn btn-info">Pesanan Sedang Di Proses</button></td>
      <?php 
      } elseif ($d1['konfirmasi']==NULL) { ?>
        <button type="button" class="btn btn-warning">Menunggu Pembayaran</button>
      <?php 
      }    
    } else { ?>
      <button type="button" class="btn btn-warning">Menunggu Pembayaran</button>
    <?php
    } 
    
?>
</center>

<input type="hidden" name="totalcek" value="<?php echo $data['tot']; ?>" >
<input type="hidden" name="invoice" value="<?php echo $invoice; ?>" >
<input type="hidden" name="id_user" value="<?php echo $_SESSION['id_user']; ?>" >
<input type="hidden" name="nama" value="<?php echo $_SESSION['username']; ?>" >


</td>
</tr>
</div>
</center>
</td>
</tr>
</tbody>
</thead>
</table>
</form>
</div>
