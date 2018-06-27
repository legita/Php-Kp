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
		<th class="bg-info"><center>Type</center></th>
		<th class="bg-info"><center>Jenis Wadah</center></th>
		<th class="bg-info"><center>Harga</center></th>
		<th class="bg-info"><center>Jumlah</center></th>
		<th class="bg-info"><center>Harga Menu</center></th>
		<th class="bg-info"><center>Buah</center></th>
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
		<td><center><?php echo $data['harga']; ?></center></td>
		<td><center><?php echo $data['jumlah']; ?></center></td>
		<td><center><?php echo $data['hargamenu']; ?></center></td>
		<td><center><?php echo $data['buah']; ?></center></td>
		<td><center><?php echo 'Rp. '.number_format($data['total']); ?></center></td>
		<td><center><a href="config/hapus_pemesanan.php?id=<?php echo $data['id_pembelian']; ?>" class="btn btn-danger">Hapus</a></center></td>

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

<tr>
 <td colspan="11" style="color: white;"> Sub Total : </td>
 <td><input style="color: black;" type="text" name="tot"  class="form-control" id="tot" value="<?php echo 'Rp. '.number_format($data['tot']); ?>" readonly></td>

<table>

<?php
if(!isset($_POST['cal'])){ ?>
<center>	
	<button type="submit" value="submit" name="cal" id="cal" class="btn btn-primary">Calculate</button>
	<a href="index.php?halaman=Menu" class="btn btn-info">Belanja Lagi</a>
</center>

<?php } ?>

<?php

include 'config/koneksi.php';

	if(isset($_POST['cal'])){

	$invoice  = mt_rand(10,1000);
	$totalcek = $_POST['tot'];

	$updateInvoice = "UPDATE pembelian set invoice = '$invoice', fixed = '1', totalcek = '$totalcek', tgl_pesan = '$tgl'  WHERE fixed = '0' ";
	$query = mysqli_query($konek,$updateInvoice);
} ?>


</table>
</tr>
</tbody>
</thead>
</table>
</form>
</div>
</div>