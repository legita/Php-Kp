<?php
session_start();
?>

      <header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(assets/images/a.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="display-t js-fullheight">
                <div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
                  <h1> Please SignUp</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>

<style type="text/css">
  input.form-control,
  select.form-control{
    background-color: #303030;
  }
</style>


      <div class="container">
          <hr>  
          <h2 class="modal-title" align="center" style="font-family: Kristen ITC; color: white; font-size: 45px;">SignUp Member</h2>
          <p align="center"><i>isilah</i></p>
          <br>
       
       <section class="col-md-12 col-md-push-1 animate-box">    

      <!--   </div>
        <div class="modal-body"> -->
         <form action="config/prosesdaftar.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
            <div class="form-group">
              <label class="col-sm-3">Name</label>
              <label class="col-sm-1">:</label>
              <div class="col-sm-6">
                <input type="nama_lengkap" name="nama_lengkap" class="form-control" placeholder="Enter your full name" required>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3">Username</label>
              <label class="col-sm-1">:</label>
              <div class="col-sm-6">
                <input type="username" name="username" class="form-control" placeholder="Enter your username" required>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3">Password</label>
              <label class="col-sm-1">:</label>
              <div class="col-sm-6">          
                <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
              </div>
            </div>
             <div class="form-group">
                <label class="col-sm-3">Jenis Kelamin</label>
                <label class="col-sm-1">:</label>
                <div class="col-sm-6">
                <select class="form-control" id="jk" name="jk" required>
                  <option>-- Jenis Kelamin --</option>
                  <option>Laki-laki</option>
                  <option>Perempuan</option>
                </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3">Provinsi</label>
                <label class="col-sm-1">:</label>
                <div class="col-sm-6">
                  <select class="form-control" id="provinsi" name="provinsi" aria-describedby="basic-addon1" required>
                   <option>-- Pilih Provinsi --</option>
                      <?php
                        include 'config/koneksi.php';
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
                <label class="col-sm-3">Kota</label>
                <label class="col-sm-1">:</label>
                <div class="col-sm-6">
                <select class="form-control" name="kota" id="kota" aria-describedby="basic-addon1" required>
                    <option>--Pilih Kota--</option>
                </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3">Kecamatan</label>
                <label class="col-sm-1">:</label>
                <div class="col-sm-6">
                <select class="form-control" name="kecamatan" id="kecamatan" aria-describedby="basic-addon1" required>
                    <option>--Pilih Kecamatan--</option>
                </select>
                </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3">Alamat</label>
              <label class="col-sm-1">:</label>
              <div class="col-sm-6">
                <textarea type="alamat" name="alamat" class="form-control" placeholder="Enter your address" required></textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3">Email</label>
              <label class="col-sm-1">:</label>
              <div class="col-sm-6">
                <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3">Telephon</label>
              <label class="col-sm-1">:</label>
              <div class="col-sm-6">
                <input type="no_telepon" name="no_telepon" class="form-control" placeholder="Enter your telephon number" required>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2"></label>
              <label class="col-sm-4"></label>
              <div class="col-sm-6">
                <button type="submit" class="btn btn-success">Submit</button> 
              </div>
            </div>
        </form>
</section>
</div>
<hr>

<script src="assets/js/jquery.min.js"></script>
<script type="text/javascript">
    $( "#provinsi" ).change(function() {
      var provinsi = $( "#provinsi" ).val();
      console.log(provinsi);
      $.ajax({
        url: "config/ajax_provinsi.php?provinsi=" + provinsi,
        success: function(result){
          $("#kota").html(result);
        }
      });
    });

    $( "#kota" ).change(function() {
      var kota = $("#kota").val();
      console.log(kota);
      $.ajax({
        url: "config/ajax_kecamatan.php?kota=" + kota,
        success: function(result){
            console.log(result);
          $("#kecamatan").html(result);
        }
      });
    });
</script>