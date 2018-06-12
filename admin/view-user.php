<?php
session_start();
?>

<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Manajemen User</h1>
    </div>
    <!--End Page Header -->
</div>

<a href="index.php?halaman=tambah-user"><button type="button" class="btn btn-info"><span class="fa fa-plus"></span> Tambah</button></a>
<br><br>

<div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data User
                        </div>
                        <div class="panel-body">
                          
                          <div class="row space-form ">
                             <div class="col-lg-4">
                              <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                <input class="form-control" id="myInput" type="text" placeholder="Search..">
                              </div>
                            </div>
                          </div><br>

                              <div class="table-responsive" style="overflow-x: auto">
                                <table class="table table-bordered" style="width:auto">
                                  <thead>
                                    <tr align="center">
                                      <th><center>No.</th>
                                      <th><center>Nama</th>
                                      <th><center>Username</th>
                                      <th><center>Password</th>
                                      <th><center>Jenis Kelamin</th>
                                      <th><center>Provinsi</th>
                                      <th><center>Kota</th>
                                      <th><center>Kecamatan</th>
                                      <th><center>Alamat</th>
                                      <th><center>Email</th>
                                      <th><center>No. Telepon</th>
                                      <th><center>Level</th>
                                      <th><center>Action</th>
                                    </tr>
                                  </thead>
                                      <?php
                                      $no = 1;
                                      include '../config/koneksi.php';
                                      $query = mysqli_query($konek, "SELECT * FROM user") or die(mysqli_error());
                                        if(mysqli_num_rows($query) == 0){
                                          echo '<tr><td collspan="4" align="center">Tidak ada data!</td></tr>';
                                        }
                                        else{
                                          while ($data = mysqli_fetch_array($query)) {
                                            ?>
                                  <tbody myTable>
                                      <tr>
                                          <td><center><?php echo $no++; ?></td>
                                          <td><center><?php echo $data['nama_lengkap']; ?></td>
                                              <td><center><?php echo $data['username']; ?></td>
                                              <td><center><?php echo $data['password']; ?></td>
                                              <td><center><?php echo $data['jk']; ?></td>
                                              <td><center><?php echo $data['provinsi']; ?></td>
                                              <td><center><?php echo $data['kota']; ?></td>
                                              <td><center><?php echo $data['kecamatan']; ?></td>
                                              <td><center><?php echo $data['alamat']; ?></td>
                                              <td><center><?php echo $data['email']; ?></td>
                                              <td><center><?php echo $data['no_tlp']; ?></td>
                                              <td><center><?php echo $data['level']; ?></td>

                                              <td><center>
                                                <a href="index.php?halaman=edit-user&id=<?php echo $data['id_user'];?>"><span class="fa fa-edit"></span></a>
                                               &nbsp;
                                                <a href="../config/delete_user.php?id=<?php echo $data['id_user'];?>" title="Hapus User" onclick="return confirm('Hapus User ini?');"><span class="fa fa-trash-o"></span></a>
                                              </td>
                                      </tr>
                                        <?php
                                        
                                      }
                                      }
                                      ?>
                                  </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
      </div>

