<?php
session_start();

  error_reporting();
  include 'config/koneksi.php';

  $id_menu = $_GET['id_menu'];

  $query    = "SELECT * FROM menu where id_menu='$id_menu'";
  $hasil   = mysqli_query($konek, $query)or die(mysql_error());
  $data    = mysqli_fetch_array($hasil);

?>

<script>
  function kali() {
      var hargasatuan  = document.getElementById('hargasatuan').value;
      var jumlah = document.getElementById('jumlah').value;
      
      var result = ( parseInt(jumlah) * parseInt(hargasatuan) ) ;
      if (!isNaN(result)) {
         document.getElementById('total').value = result;
      }
}
</script>

<script type="text/javascript">
    function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))

        return false;
      return true;
    }
</script>

<style>

/*line*/
  .vl {
      border-left: 4px solid red;
      height: 1008px;
      position: absolute;
      left: 39%;
      margin-left: -3px;
      top: 5;
  }

  .form-control{
    background: dimgray;
    height: 50px;
    font-size: 15px;
  }

  .control-label{
    font-size: 14px;
  }
   
</style>

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

<div class="container-fluid bg-3 text-center">   

    <br>
  <div class="col-sm-12">
    <div class="alert alert-danger">
      <i><strong>Notice!</strong></i> Pesanan Akan Di Proses Setelah Melakukan Bukti Transfer Pembayaran.
      <i><strong>Notice!</strong></i> Pesanan Akan Di Proses 2 x 24 Jam Setelah Bukti Transfer Sudah Di Upload.
    </div>
    <div class="alert alert-info">
      <i><strong>Info Menu Paket!</strong></i> Nasi + Lauk (Ayam, Ikan, Atau Sop) + Lalaban + Sambal + Buah + Wadah.
    </div>
  <div class="row">
     <div class="col-md-4">
      <br><br><br><br><br><br>
       <div class="thumbnail">
           <div class="caption">
             <p><img src="makanan/<?php echo $data['gambar_menu'] ?>" width="380px" height="280px"></p>
             <p><h2 style="font-family: Kristen ITC;"><?php echo $data['nama_menu'] ?></h2></p>
           </div>
       </div>
     </div>

    <div class="vl"></div>
    <div class="col-sm-1"></div>
    
    <div class="col-sm-7">
      <form class="form-horizontal" role="form" name="autoSumForm" action="config/prosespesanan_s.php" method="POST">

        
        <br>
        
          <input type="hidden" name="id_user" value="<?php echo $_SESSION['id_user']; ?>">
          <input type="hidden" name="tgl" value="<?php $tgl=date('d-m-Y'); echo $tgl;?>">
          <input type="hidden" name="id_menu" value="<?php echo $data['id_menu']; ?>">   
   
        <hr><i style="color:white;"><sub><span class="label label-danger">Penting</span> Nama Pemesan dapat di ganti dengan nama Perusahaan atau Nama Penanggung Jawab !</sub></i><hr>  
        <div class="form-group">
        <label class="control-label col-sm-3" for="nama_pembeli" style="text-align: left;">Nama Pemesan</label>
        <label class="control-label col-sm-1">:</label>
          <div class="col-sm-6">
        <input type="text" class="form-control" id="nama_pembeli" name="nama_pembeli" value="<?php echo $_SESSION['username']; ?>">
          </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-3" for="kode_menu" style="text-align: left;">Kode Menu</label>
        <label class="control-label col-sm-1">:</label>
          <div class="col-sm-6">
            <input style="color: black;" class="form-control" name="kode_menu" id="kode_menu" type="text" value="<?php echo $data['kode_menu']; ?>" readonly>
          </div>
        </div>    
        <div class="form-group">
        <label class="control-label col-sm-3" for="nama_menu" style="text-align: left;">Nama Menu</label>
        <label class="control-label col-sm-1">:</label>
          <div class="col-sm-6">
            <input style="color: black;" class="form-control" name="nama_menu" id="nama_menu"  type="text" value="<?php echo $data['nama_menu']; ?>" readonly>   
          </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-3" for="type" style="text-align: left;">Type Menu</label>
        <label class="control-label col-sm-1">:</label>
          <div class="col-sm-6">
            <input style="color: black;" class="form-control" name="type" id="type"  type="text" value="Satuan" readonly>   
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="jumlah" style="text-align: left;">Jumlah Menu</label>
          <label class="control-label col-sm-1">:</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="jumlah" onkeyup="kali();" / onkeypress="return hanyaAngka(event)" name="jumlah" placeholder="Jumlah" required>
            </div>
        </div>  
        <div class="form-group">
          <label class="control-label col-sm-3" for="hargamenu" style="text-align: left;">Harga Menu</label>
          <label class="control-label col-sm-1">:</label>
            <div class="col-sm-1"><h3 style="color:white;">Rp.</h3></div>
            <div class="col-sm-5">
             <input style="color: black;" class="form-control" name="hargasatuan" id="hargasatuan"  onkeyup="kali();" / type="text" value="<?php echo $data['hargasatuan']; ?>" readonly>
            </div>
        </div>  
        <div class="form-group">
          <label class="control-label col-sm-3" for="total" style="text-align: left;">Total Pembayaran</label>
          <label class="control-label col-sm-1">:</label>
          <label class="control-label col-sm-1">Rp.</label>
            <div class="col-sm-5">
              <input style="color: black;" input class="form-control" name="total" id="total" type="text" value="<?php echo $data['total']; ?>" placeholder="Total Bayar" readonly>
            </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-3" for="date" style="text-align: left;">Tanggal Pesanan Di Butuhkan &nbsp;&nbsp;&nbsp;&nbsp;</label>
        <label class="col-sm-1">:</label> 
          <div class="col-sm-1">
          <div class="date input-group input-append date" id="datePicker">
            <input type="date" class="form-control" name="date" id="date" value="<?php $date=date('d-m-Y'); echo $date;?>">  
          </div>
          </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-3" for="pertanyaan" style="text-align: left;">Catatan</label>
        <label class="control-label col-sm-1">:</label>
          <div class="col-sm-6">
            <textarea type="text" class="form-control" name="catatan" placeholder="Isi Catatan Anda" required></textarea>
            <br>
            <button type="submit" value="submit" name="tombol" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-ok"></span> Send</button>
          </div>
        </div>  
        <div class="form-group">
        <label class="control-label col-sm-2" for="art_id"></label>
          <div class="col-sm-8">
            <input type="hidden" value="1" class="form-control" name="art_id">
          </div>
        </div>  
        
      </form>
    </div>
    </div>
  </div>
</div>
<hr><br>

<div class="container">
  <?php
    include 'komenmenu2.php';
  ?>
</div>


<script src="assets/js/jquery.min.js"></script>
<script type="text/javascript">
    $( "#jenis_wadah" ).change(function() {
      var jenis_wadah = $( "#jenis_wadah" ).val();
      console.log(jenis_wadah);
      $.ajax({
        url: "config/ajax_wadah.php?jenis_wadah=" + jenis_wadah,
        success: function(result){
          $("#harga").html(result);
        }
      });
    });
</script>