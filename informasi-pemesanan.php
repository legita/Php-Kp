<?php
  error_reporting()
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

<div class="container">
    <hr>  
    <h2 class="modal-title" align="center" style="font-family: Kristen ITC; color: white; font-size: 45px;">Status Pemesanan</h2>
    <p align="center"><i>detail</i></p>
    <br>
       
   
<?php
include 'config/koneksi.php';
$id_user = $_SESSION['id_user'];

$query = "SELECT * FROM pembelian where nama_pembeli = '".$_SESSION['username']."' ORDER BY tgl desc";
$tampil = mysqli_query($konek, $query) or die (mysqli_error($konek));

?>

<div class="container" align="center">
  <form action="" method="POST">
    <div class="col-sm-1"></div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="buah">Invoice Pembelian</label>
      <label class="control-label col-sm-1">:</label>
        <div class="col-sm-6">
          <select name="invoice" class="form-control" style="background-color: gray;">  
              <option value="">--Invoice--</option>  
                <?php
                  while($tmp = mysqli_fetch_array($tampil)){
                ?>
              <option value="<?php echo $tmp['invoice']; ?>"><?php echo $tmp['invoice']; ?></option>
                <?php } ?>  
          </select>
        </div>
      </div><br><br><br>
      <div class="form-group">
          <div class="col-sm-10" align="right">
            <button type="submit" class="btn btn-primary" name="cari">Cek Proses</button>
          </div>
      </div>
  </form>
</div><hr>

<?php

  if(isset($_POST['cari'])){

    $invoice = $_POST['invoice'];
  
?>


  <script>

  window.location = 'index.php?halaman=informasi-pemesanan&&invoice=<?php echo $invoice; ?>';

  </script>


  <?php
  }
  
  ?>


<?php

  if(isset($_POST['cetak'])){

    $invoice = $_POST['invoice'];
  
?>


<script>

  window.location = 'kwitansi.php?invoice=<?php echo $invoice; ?>';

</script>


  <?php
  }
  
  ?>


<?php
  if(isset($_GET['invoice'])){
 


  ?>


<?php

$invoice = $_GET['invoice'];
$id_user = $_SESSION['id_user'];

include 'config/koneksi.php'; 

$no = 1;
$query1 = "SELECT * FROM pembelian  WHERE invoice = '$invoice' and id_user = '$id_user'";
$tampil1 = mysqli_query($konek, $query1);


?>

<table class="table" align="center" id="konfirmasi">
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
  <form action= "config/transaksi_pembayaran.php" method= "POST" enctype="multipart/form-data" >

<?php

  $username = $_SESSION['username'];


  $sum  = "SELECT SUM(total) as tot FROM pembelian WHERE nama_pembeli = '$username' And invoice='$invoice'";
  $query  = mysqli_query($konek,$sum);
  $data   = mysqli_fetch_array($query);

?>
<td colspan="9"><h2 style="color: white;"> Total Seluruh : </h2></td>
<td colspan="4"><input style="color: black;" type="text" name="tot"  class="form-control" id="tot" value="<?php echo 'Rp. '.number_format($data['tot']); ?>" readonly></td>



<tr>
<td style="color:white;"><b><i> Status : </i></b> 
<?php
$query2 = "SELECT * FROM transaksi where invoice = '$invoice'";
$tampil2 = mysqli_query($konek, $query2) or die (mysqli_error($konek));
$d1 = mysqli_fetch_array($tampil2);
$inv = mysqli_num_rows ($query2);

?>
<br><br>
    <?php
    if (isset($d1)) {
      if ($d1['konfirmasi']==0 ){ ?>
      <button type="button" class="btn btn-info">Menunggu Konfirmasi</button>
      <?php 
      } elseif ($d1['konfirmasi']==1){ ?>
        <a href="kwitansi.php?invoice=<?php echo $invoice; ?>" target ="_blank" class="btn btn-danger">Cetak Kwitansi</a></button>
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

<hr>
<center><h1 style="color: white; font-family: Kristen ITC;">Upload Bukti Pembayaran</center></h1><br>
<div class="form-group">
    <label class="col-sm-2"></label>
    <label class="col-sm-3">Bukti Pembayaran</label>
    <label class="col-sm-1">:</label>
    <div class="col-sm-5">
        <input type="file" name="fileToUpload" id="fileToUpload">
    </div>
</div><br>
<input type="hidden" name="validasi_daftar" value="0">
<div class="form-group">
    <label class="control-label col-sm-4"></label>
    <div class="col-sm-10" align="right">
        <button class="btn btn-primary" type="submit" name="submit" value="Konfirmasi Pembayaran">Konfirmasi Pembayaran</button>
    </div>
</div>

<?php }
?>
</center>
</form>
</div>