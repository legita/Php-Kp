<?php
include '../config/koneksi.php';
?>
<!-- Trigger/Open The Modal -->
<br>
<br>
<label> Manajemen User | Tambah User </label>

<div class="row">
      <div class="col-lg-12">
          <hr>  
          <h2 class="modal-title" align="center" style="font-size: 45px;">Tambah User</h2>
          <p align="center"><i>isilah</i></p>
          <br>
       
       <section class="animate-box">    

         <form action="../config/tambahuser.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
            <div class="form-group">
              <label class="col-md-2">Pemesan</label>
              <label class="col-md-1">:</label>
              <div class="col-md-6">
                <input type="nama_lengkap" name="nama_lengkap" class="form-control" placeholder="Enter your full name" required>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-2">Penanggung Jawab</label>
              <label class="col-md-1">:</label>
              <div class="col-md-6">
                <input type="pj" name="pj" class="form-control" placeholder="Enter your pj" required>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-2">Username</label>
              <label class="col-md-1">:</label>
              <div class="col-md-6">
                <input type="username" name="username" class="form-control" placeholder="Enter your username" required>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-2">Password</label>
              <label class="col-md-1">:</label>
              <div class="col-md-6">          
                <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
              </div>
            </div>
            <div class="form-group">
                <label class="col-md-2">Jenis Kelamin</label>
                <label class="col-md-1">:</label>
                <div class="col-md-6">
                <select class="form-control" id="jk" name="jk" required>
                  <option>-- Jenis Kelamin --</option>
                  <option>Laki-laki</option>
                  <option>Perempuan</option>
                </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2">Provinsi</label>
                <label class="col-md-1">:</label>
                <div class="col-md-6">
                  <select class="form-control" id="provinsi" name="provinsi" aria-describedby="basic-addon1" required>
                   <option>-- Pilih Provinsi --</option>
                      <?php
                        include '../config/koneksi.php';
                        $provinsi = "SELECT * FROM daerah GROUP BY provinsi";
                        $queryProv = mysqli_query($konek,$provinsi);
                        while ($tmpProv = mysqli_fetch_array($queryProv)) { ?>
                            <option value="<?php echo $tmpProv['provinsi']; ?>"><?php echo $tmpProv["provinsi"]; ?>
                            </option>
                        <?php
                        }
                        ?>
                   </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2">Kota</label>
                <label class="col-md-1">:</label>
                <div class="col-md-6">
                <select class="form-control" name="kota" id="kota" aria-describedby="basic-addon1" placeholder="-- Pilih Kota --" required>
                    <option>-- Pilih Kota --</option>
                </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2">Kecamatan</label>
                <label class="col-md-1">:</label>
                <div class="col-md-6">
                <select class="form-control" name="kecamatan" id="kecamatan" aria-describedby="basic-addon1" placeholder="-- Pilih Kecamatan --" required>
                    <option>-- Pilih Kecamatan --</option>
                </select>
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-2">Alamat</label>
              <label class="col-md-1">:</label>
              <div class="col-md-6">
                <input type="alamat" name="alamat" class="form-control" placeholder="Enter your address" required>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-2">Email</label>
              <label class="col-md-1">:</label>
              <div class="col-md-6">
                <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-2">Telephon</label>
              <label class="col-md-1">:</label>
              <div class="col-md-6">
                <input type="no_tlp" name="no_tlp" class="form-control" placeholder="Enter your telephon number" required>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-2" for="level">Level</label>
              <label class="col-md-1">:</label>
              <div class="col-md-6">
              <select class="form-control" id="level" name="level">
                <option>-- Pilih Level --</option>
                <option value="Admin">Admin</option>
                <option value="user">user</option>
              </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3"></label>
              <label class="col-md-3"></label>
              <div class="col-md-6">
                <button type="submit" class="btn btn-success">Submit</button> 
              </div>
            </div>
        </form>
</section>
</div>
</div>
<hr>

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