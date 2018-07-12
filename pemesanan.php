<?php
date_default_timezone_set('Asia/Jakarta');


?>

      <header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(assets/images/a.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="display-t js-fullheight">
                <div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
                  <h1> Detail Pemesanan</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>

      <div class="container">
          <hr>  
          <h2 class="modal-title" align="center" style="font-family: Kristen ITC; color: white; font-size: 45px;">Pemesanan</h2>
          <p align="center"><i>detail</i></p>
          <br>
       

<div class="col-lg-12">
	<div class="col-sm-5" style="color:white;">
		<label> Tanggal Pesan :</label><br>
		<label type="tgl" name="tgl"><?php $tgl=date('d-m-Y : H:i:s'); echo $tgl;?></label>
	
	</div><br>

<form action="" method="POST">
<table class="table" style="width:1120px;" align="center">
<thead>
		<tbody style="color: black;">
	<tr>
		<th class="bg-info"><center>No</center></th>
		<th class="bg-info"><center>Nama Pembeli</center></th>
		<th class="bg-info"><center>Kode Menu</center></th>
		<th class="bg-info"><center>Nama Menu</center></th>
		<th class="bg-info"><center>Type Menu</center></th>
		<th class="bg-info"><center>Jenis Wadah</center></th>
		<th class="bg-info"><center>Harga Wadah</center></th>
		<th class="bg-info"><center>Jumlah Pesanan</center></th>
		<th class="bg-info"><center>Harga Menu</center></th>
		<th class="bg-info"><center>Free Buah</center></th>
		<th class="bg-info"><center>Total</center></th>
		<th class="bg-info"><center>Aksi</center></th>
				
	</tr>

<?php
include'config/koneksi.php';

	$username = $_SESSION['username'];
	$query 	= "SELECT * FROM pembelian WHERE nama_pembeli =  '$username' AND fixed = '0' ";
	$tampil = mysqli_query($konek,$query)or die(mysqli_error($konek));
	$no=1;
	while ($data=mysqli_fetch_array($tampil)) { ?>
	
	<tr style="color: white;">
		<td><center><?php echo $no++; ?></center></td>
		<td><center><?php echo $data['nama_pembeli']; ?></center></td>
		<td><center><?php echo $data['kode_menu']; ?></center></td>
		<td><center><?php echo $data['nama_menu']; ?></center></td>
		<td><center><?php echo $data['type']; ?></center></td>
		<td><center><?php echo $data['jenis_wadah']; ?></center></td>
		<td><center><?php echo 'Rp. '.number_format($data['harga']); ?></center></td>
		<td><center><?php echo $data['jumlah']; ?></center></td>
		<td><center><?php echo 'Rp. '.number_format($data['hargamenu']); ?></center></td>
		<td><center><?php echo $data['buah']; ?></center></td>
		<td><center><?php echo 'Rp. '.number_format($data['total']); ?></center></td>
		<td><center><a href="config/hapus_pemesanan.php?id=<?php echo $data['id_pembelian']; ?>" class="btn btn-danger">Batal</a></center></td>

	</tr>
	

<?php
}
?>

<?php

	$username = $_SESSION['username'];

	$sum 	= "SELECT SUM(total) as tot FROM pembelian WHERE nama_pembeli = '$username' AND fixed = '0' ";
	$query 	= mysqli_query($konek,$sum);
	$data 	= mysqli_fetch_array($query);

?>

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

<?php
	$money 	   = new moneyFormat;
	$rupiah    = $money->rupiah($data['tot']);
	$terbilang = $money->terbilang($data['tot']);
	 
?>

<tr>
 <td colspan="10" style="color: white;"> Sub Total : <br> <font style="color: yellow;">Terbilang <?php echo $terbilang; ?> Rupiah</font></td>
 <td><label style="color:white;">Rp.</label></td>
 <td colspan="2"><input style="color: black; background-color: white;" type="int" name="tot"  class="form-control" id="tot" value="<?php echo $data['tot']; ?>" readonly></td>
</tr>
</tbody>
</thead>

<table>
	<?php
	if(!isset($_POST['cal'])){ ?>
	<center>
		<button type="submit" name="cal" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Belanja Selesai">Belanja Selesai</button>
		<a href="index.php?halaman=Menu" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Belanja Lagi">Belanja Lagi</a>
	</center>
	</form>
	<?php } ?>

	<?php
	if(isset($_POST['cal'])){ 

		$invoice  = mt_rand(10,1000);
		$totalcek = $_POST['tot'];

	$updateInvoice = "UPDATE pembelian set invoice = '$invoice', fixed = '1', totalcek = '$totalcek', tgl_pesan = '$tgl'  WHERE fixed = '0' ";
	$query = mysqli_query($konek,$updateInvoice); 

	}?>
<?php
$query2 = "SELECT * FROM pembelian where invoice = '$invoice'";
$tampil2 = mysqli_query($konek, $query2) or die (mysqli_error($konek));
$d1 = mysqli_fetch_array($tampil2);
$inv = mysqli_num_rows ($query2);

?>
<br>
<center>
    <?php
    if (isset($d1)) {
      if ($d1['fixed']==0 ){ ?>
      <?php 
      } elseif ($d1['fixed']==1){ ?>
   		<button type="button" class="btn btn-warning">Pesanan Selesai | Menuggu Pembayaran</button>
      	<hr><center><label style="color: white;"> Pesanan Berhasil di Pesan :) Silahkan <a href="index.php?halaman=Konfirmasi" data-toggle="tooltip" data-placement="top" title="Upload Bukti Pembayaran" style="color: red;">Upload Bukti Pembayaran</a> Secepatnya. Jika Dalam Waktu 2 x 24 Jam Tidak Meng Upload Bukti Pembayaran Maka Pesanan Akan Otomatis di Hapus atau di Cancel Oleh Admin !!  </label></center><hr>
      <?php 
      } 
    } 	?>
</table>
</table>
</div>
</div>