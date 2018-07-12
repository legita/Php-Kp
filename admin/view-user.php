
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
                                      <th><center>No.</center></th>
                                      <th><center>Pemesan</center></th>
                                      <th><center>Nama PJ</center></th>
                                      <th><center>Username</center></th>
                                      <th><center>Password</center></th>
                                      <th><center>Jenis Kelamin</center></th>
                                      <th><center>Provinsi</center></th>
                                      <th><center>Kota</center></th>
                                      <th><center>Kecamatan</center></th>
                                      <th><center>Alamat</center></th>
                                      <th><center>Email</center></th>
                                      <th><center>No. Telepon</center></th>
                                      <th><center>Level</center></th>
                                      <th><center>Action</center></th>
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
                                          <td><center><?php echo $no++; ?></center></td>
                                          <td><center><?php echo $data['nama_lengkap']; ?></center></td>
                                          <td><center><?php echo $data['pj']; ?></center></td>
                                          <td><center><?php echo $data['username']; ?></center></td>
                                          <td><center><?php echo $data['password']; ?></center></td>
                                          <td><center><?php echo $data['jk']; ?></center></td>
                                          <td><center><?php echo $data['provinsi']; ?></center></td>
                                          <td><center><?php echo $data['kota']; ?></center></td>
                                          <td><center><?php echo $data['kecamatan']; ?></center></td>
                                          <td><center><?php echo $data['alamat']; ?></center></td>
                                          <td><center><?php echo $data['email']; ?></center></td>
                                          <td><center><?php echo $data['no_tlp']; ?></center></td>
                                          <td><center><?php echo $data['level']; ?></center></td>

                                          <td><center>
                                            <a href="index.php?halaman=edit-user&id=<?php echo $data['id_user'];?>"><span class="fa fa-edit"></span></a>
                                           &nbsp;
                                            <a href="../config/delete_user.php?id=<?php echo $data['id_user'];?>" title="Hapus User" onclick="return confirm('Hapus User ini?');"><span class="fa fa-trash-o"></span></a></center>
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

