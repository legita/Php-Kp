<?php
session_start();

  error_reporting();
  include '../config/koneksi.php';

  $id_menu = $_GET['id'];

  $query  = mysqli_query($konek, " SELECT * FROM menu where id_menu='$id_menu'") or die(mysqli_error());
  $data   = mysqli_fetch_array($query)

?>


<br>
<br>
<label><a href= "index.php?halaman=menu-makanan"> Menu Makanan </a> | Edit Menu </label>

<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Edit Menu</h1>
    </div>
    <!--End Page Header -->
</div>

<div class="row">
       
       <section class="col-lg-12 animate-box">
       	<form action= "../config/edit_menu.php" method= "POST" class="form-horizontal" enctype="multipart/form-data">
       	  <input type="hidden" name="id_menu" value="<?php echo $data['id_menu'];?>">
       	<br>
       	  <div class="form-group">
       	    <label class="col-md-2">Kode Menu</label>
       	    <label class="col-md-1">:</label>
       	    <div class="col-md-6">
       	    	<input class="form-control" type="text" name="kode_menu" id="kode_menu" value="<?php echo $data['kode_menu']; ?>">
       	  	</div>
       	  </div>
       	  <div class="form-group">
       	    <label class="col-md-2">Gambar Menu</label>
       	    <label class="col-md-1">:</label>
       	    <div class="col-md-6">
       	      <input class="form-control" type="file" name="fileToUpload" id="fileToUpload" value="<?php echo $data['gambar_menu']; ?>">
       	  	</div>
       	  </div>    
       	  <div class="form-group">
       	    <label class="col-md-2">Jenis Menu</label>
       	    <label class="col-md-1">:</label>
       	    <div class="col-md-6">
       	      <select class="form-control" id="jenis_menu" name="jenis_menu" value="<?php echo $data['jenis_menu']; ?>" required>
       	        <option><?php echo $data['jenis_menu']; ?></option>
       	        <option value="Ayam">Ayam</option>
       	        <option value="Ikan">Ikan</option>
       	        <option value="Sop">Sop</option>
       	      </select>
       	  	</div>
       	  </div>
       	  <div class="form-group">
       	    <label class="col-md-2">Nama Menu</label>
       	    <label class="col-md-1">:</label>
       		<div class="col-md-6">
       	      <input class="form-control" type="text" class="form-control" id="nama_menu" name="nama_menu" value="<?php echo $data['nama_menu']; ?>" >
       	    </div>
       	  </div>
       	  <div class="form-group">
       	    <label class="col-md-2">Harga Paket</label>
       	    <label class="col-md-1">:</label>
       	    <div class="col-md-6">
       	      <input class="form-control" type="text" class="form-control" id="hargamenu" name="hargamenu" value="<?php echo $data['hargamenu'] ?>" required>
       	    </div>
          </div>
          <div class="form-group">
            <label class="col-md-2">Harga Satuan</label>
            <label class="col-md-1">:</label>
            <div class="col-md-6">
              <input class="form-control" type="text" class="form-control" id="hargasatuan" name="hargasatuan" value="<?php echo $data['hargasatuan'] ?>" required>
              </div>
          </div> 
       	  <div class="form-group">
       	    <label class="col-md-2">Keterangan</label>
       	    <label class="col-md-1">:</label>
       	    <div class="col-md-6">
       	      <input class="form-control" type="text" class="form-control" id="keterangan" name="keterangan" value="<?php echo $data['keterangan'] ?>" required>
       	    </div>
       	  </div>

       	  <div class="form-group" align="right">
       	      	<button type="submit" class="btn btn-info" style="color:black;"> Simpan </button>
       	        <button class="btn btn-info"><a href="index.php?halaman=menu-makanan" style="color:black;"> Batal </a></button>
       	  </div>
       	</form>
       </section>
   
</div>
