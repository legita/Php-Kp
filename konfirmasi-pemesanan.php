<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(assets/images/a.jpg);" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="display-t js-fullheight">
          <div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
            <h1>Information</h1>
            <h2>Pemesanan Anda </h2>
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

$query = "SELECT DISTINCT invoice FROM pembelian where nama_pembeli = '".$_SESSION['username']."' ORDER BY tgl_pesan DESC";
$tampil = mysqli_query($konek, $query) or die (mysqli_error($konek));

?>

<div class="container">
  <form action="" method="POST">
    <div class="col-sm-1"></div>
    <div class="form-group">
      <br><hr><i style="color:white;"><sub><span class="label label-danger">Penting</span> Invoice yg ditampilkan bersifat berurut dari <font style="color: yellow;">pembelian terbaru sampai terlama</font> !</sub></i><hr> 
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

  window.location = 'index.php?halaman=Konfirmasi&&invoice=<?php echo $invoice; ?>';

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

  $query1 = "SELECT * FROM pembelian  WHERE invoice = '$invoice' and id_user = '$id_user'";
  $tampil1 = mysqli_query($konek, $query1);
  $no = 1;

  ?>

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

        <!--Koding Manggil Function Uang-->
        <?php

          $money     = new moneyFormat;
          $rupiah    = $money->rupiah($data['tot']);
          $terbilang = $money->terbilang($data['tot']);
           
        ?>

        <hr>
        <td colspan="9"><label style="color: white;"> Total Seluruh :</label></td>
        <td><label style="color:white;">Rp.</label> &nbsp;&nbsp;</td>
        <td colspan="3"><input style="color: black;" type="text" name="tot"  class="form-control" id="tot" value="<?php echo $rupiah; ?>" readonly></td>
        <br>
        <Label style="color: white;">Terbilang</Label>
        <h3 style="color: yellow;"><?php echo $terbilang; ?> Rupiah</h3>

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
                <a href="kwitansi.php?invoice=<?php echo $invoice; ?>" target ="_blank" class="btn btn-danger">Cetak Kwitansi</a>
                <button type="button" class="btn btn-info">Pesanan Sedang Di Proses</button>
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
      <input type="hidden" value="0">
      <div class="form-group">
          <label class="control-label col-sm-4"></label>
          <div class="col-sm-10" align="right">
              <button class="btn btn-primary" type="submit" name="submit" value="Konfirmasi Pembayaran">Konfirmasi Pembayaran</button>
          </div>
      </div>

  </div>

</tbody>
</thead>
</table>
 </form>
</div>

<?php
  }
?>
</div>

<!--koding Uang-->
<?php
class moneyFormat {

  public function rupiah ($angka) {
    $rupiah = number_format($angka ,2, ',' , '.' );
    return $rupiah;
  }

  public function terbilang ($angka) {
        
        $angka = (float)$angka;
        $bilangan = array('','Satu','Dua','Tiga','Empat','Lima','Enam','Tujuh','Delapan','Sembilan','Sepuluh','Sebelas');

        if ($angka < 12) {
            return $bilangan[$angka];
        } else if ($angka < 20) {
            return $bilangan[$angka - 10] . ' Belas';
        } else if ($angka < 100) {
            $hasil_bagi = (int)($angka / 10);
            $hasil_mod = $angka % 10;
            return trim(sprintf('%s Puluh %s', $bilangan[$hasil_bagi], $bilangan[$hasil_mod]));
        } else if ($angka < 200) {
            return sprintf('Seratus %s', $this->terbilang($angka - 100));
        } else if ($angka < 1000) {
            $hasil_bagi = (int)($angka / 100);
            $hasil_mod = $angka % 100;
            return trim(sprintf('%s Ratus %s', $bilangan[$hasil_bagi], $this->terbilang($hasil_mod)));
        } else if ($angka < 2000) {
            return trim(sprintf('Seribu %s', $this->terbilang($angka - 1000)));
        } else if ($angka < 1000000) {
            $hasil_bagi = (int)($angka / 1000); 
            $hasil_mod = $angka % 1000;
            return sprintf('%s Ribu %s', $this->terbilang($hasil_bagi), $this->terbilang($hasil_mod));
        } else if ($angka < 1000000000) {
            $hasil_bagi = (int)($angka / 1000000);
            $hasil_mod = $angka % 1000000;
            return trim(sprintf('%s Juta %s', $this->terbilang($hasil_bagi), $this->terbilang($hasil_mod)));
        } else if ($angka < 1000000000000) {
            $hasil_bagi = (int)($angka / 1000000000);
            $hasil_mod = fmod($angka, 1000000000);
            return trim(sprintf('%s Milyar %s', $this->terbilang($hasil_bagi), $this->terbilang($hasil_mod)));
        } else if ($angka < 1000000000000000) {
            $hasil_bagi = $angka / 1000000000000;
            $hasil_mod = fmod($angka, 1000000000000);
            return trim(sprintf('%s Triliun %s', $this->terbilang($hasil_bagi), $this->terbilang($hasil_mod)));
        } else {
            return 'Data Salah';
        }
    }
}
?>