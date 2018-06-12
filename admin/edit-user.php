<?php

  error_reporting(0);

  include '../config/koneksi.php';

  $id_user = $_GET['id'];

  $edit    = "SELECT * FROM user WHERE id_user = '$id_user'";
  $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
  $data    = mysqli_fetch_array($hasil);

?>

<!-- Trigger/Open The Modal -->
<br>
<br>
<label><a href= "index.php?halaman=view-user"> Manajemen User </a> | Edit User </label>

<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Edit User</h1>
    </div>
    <!--End Page Header -->
</div>

<div class="row">
       
       <section class="col-lg-12 animate-box">    

        <form action="../config/updateuser.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
          <input type="hidden" name="id_user" value="<?php echo $data['id_user']; ?>">
         

          <div class="form-group">
            <label class="col-sm-2" for="nama_lengkap">Name</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-6">
              <input class="form-control" type="text" name="nama_lengkap" id="nama_lengkap" value="<?php echo $data['nama_lengkap']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-2" for="username">Username</label>
            <label class="col-md-1">:</label>
            <div class="col-md-6">
              <input class="form-control" type="text" name="username" id="username" value="<?php echo $data['username']; ?>" required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-2" for="password">Password</label>
            <label class="col-md-1">:</label>
            <div class="col-md-6">          
              <input class="form-control" type="password" name="password" id="password" value="<?php echo $data['password']; ?>" encrypt>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-2">Password Konfirmasi</label>
            <label class="col-md-1">:</label>
            <div class="col-md-6">
            	<input type="password" class="form-control" id="pwd" name="passwordkonfirm">
        	</div>
          </div>
          <div class="form-group">
              <label class="col-md-2" for="jk">Jenis Kelamin</label>
              <label class="col-md-1">:</label>
              <div class="col-md-6">
              <select class="form-control" id="jk" name="jk" value="<?php echo $data['jk'] ?>">
                <option><?php echo $data['jk']; ?></option>
                <option>Laki-laki</option>
                <option>Perempuan</option>
              </select>
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-2" for="provinsi">Provinsi</label>
              <label class="col-md-1">:</label>
              <div class="col-md-6">
                <select class="form-control" placeholder="-- Pilih Provinsi --" id="provinsi" name="provinsi" aria-describedby="basic-addon1" required>
               		<option><?php echo $data['provinsi']; ?></option>
                  	<?php
                    	include '../config/koneksi.php';
                      		$provinsi = "SELECT * FROM daerah GROUP BY provinsi";
                      		$queryProv = mysqli_query($konek,$provinsi);
                    	while ($tmpProv = mysqli_fetch_array($queryProv)) { ?>
                    <option value="<?php echo $tmpProv['provinsi']; ?>"><?php echo $tmpProv["provinsi"]; ?></option>
                       <?php
                         }
                       ?>
               </select>
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-2" for="kota">Kota</label>
              <label class="col-md-1">:</label>
              <div class="col-md-6">
              <select class="form-control" name="kota" id="kota" value="<?php echo $data['kota']; ?>" required>
                  <option><?php echo $data['kota']; ?></option>
              </select>
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-2" for="kecamatan">Kecamatan</label>
              <label class="col-md-1">:</label>
              <div class="col-md-6">
              <select class="form-control" name="kecamatan" id="kecamatan" aria-describedby="basic-addon1" required>
                  <option><?php echo $data['kecamatan']; ?></option>
              </select>
              </div>
          </div>
          <div class="form-group">
            <label class="col-md-2" for="alamat">Alamat</label>
            <label class="col-md-1">:</label>
            <div class="col-md-6">
              <textarea class="form-control" name="alamat" id="alamat" cols="40" rows="5" required><?php echo $data['alamat']; ?></textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-2" for="email">Email</label>
            <label class="col-md-1">:</label>
            <div class="col-md-6">
              <input class="form-control" type="text" name="email" id="email" value="<?php echo $data['email']; ?>" required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-2" for="no_tlp">Telephon</label>
            <label class="col-md-1">:</label>
            <div class="col-md-6">
              <input class="form-control" type="text" name="no_tlp" id="no_tlp" value="<?php echo $data['no_tlp']; ?>" required>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-6">
            	<input type="hidden" name="level" value="<?php echo $level ?>" encrypt>
            </div>
          </div>
          <br>
          <div class="form-group" align="right">
            <label class="col-sm-2"></label>
            <label class="col-sm-4"></label>
            <div class="col-sm-6">
              <button type="submit" class="btn btn-success">Submit</button> 
            </div>
          </div>
        </form>
    </section>

</div>

<script src="../assets/js/jquery.min.js"></script>
<script type="text/javascript">
    $( "#provinsi" ).change(function() {
      var provinsi = $( "#provinsi" ).val();
      console.log(provinsi);
      $.ajax({
        url: "../config/ajax_provinsi.php?provinsi=" + provinsi,
        success: function(result){
          $("#kota").html(result);
        }
      });
    });

    $( "#kota" ).change(function() {
      var kota = $("#kota").val();
      console.log(kota);
      $.ajax({
        url: "../config/ajax_kecamatan.php?kota=" + kota,
        success: function(result){
            console.log(result);
          $("#kecamatan").html(result);
        }
      });
    });
</script>