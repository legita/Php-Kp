<?php

include'../config/koneksi.php';
$id      = $_GET['id'];
$id_user = $_GET['id_user'];

?>

<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Detail Alamat Pesanan</h1>
    </div>
    <!--End Page Header -->
</div>

<div class="row">
    <div class="col-lg-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                 Data Konfirmasi | Detail Alamat Pesanan
            </div>
            <div class="panel-body">
 
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="myTable">
                      <thead>
                          <tbody>
                        <tr>
                          <th class="bg-info"><center>Pemesan</center></th> 
                          <th class="bg-info"><center>Nama Pemesan</center></th> 
                          <th class="bg-info"><center>Alamat</center></th>
                          <th class="bg-info"><center>Kecamatan</center></th>
                          <th class="bg-info"><center>Kota</center></th>
                          <th class="bg-info"><center>Provinsi</center></th>
                          <th class="bg-info"><center>No Telepon</center></th>
                          <th class="bg-info"><center>Email</center></th>
                          <th class="bg-info"><center>Jenis Kelamin</center></th>
                        </tr>

                      <?php
                      include'koneksi.php';

                      $query = "SELECT * FROM transaksi
                          JOIN user ON user.id_user = transaksi.id_user
                          WHERE transaksi.konfirmasi= '1' and transaksi.id_transaksi='$id'";

                      $tampil=mysqli_query($konek,$query)or die(mysqli_error($konek));
                      $no=1;
                      while ($data=mysqli_fetch_array($tampil)) { ?>
                        <tr>
                          <td><center><?php echo $data['nama_lengkap']; ?></center></td>
                          <td><center><?php echo $data['pj']; ?></center></td>
                          <td><center><?php echo $data['alamat']; ?></center></td>
                          <td><center><?php echo $data['kecamatan']; ?></center></td>
                          <td><center><?php echo $data['kota']; ?></center></td>
                          <td><center><?php echo $data['provinsi']; ?></center></td>
                          <td><center><?php echo $data['no_tlp']; ?></center></td>
                          <td><center><?php echo $data['email']; ?></center></td>
                          <td><center><?php echo $data['jk']; ?></center></td>
                        </tr>
                        
                      <?php
                      }
                      ?>

                    </tbody>
                  </thead>
                </table> 

                  <a href="?halaman=data-konfirmasi" class="btn btn-danger">Kembali</a>

                </div>
              </div>
            </div>
          </div>
        </div>
              