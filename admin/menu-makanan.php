<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Menu Makanan</h1>
    </div>
    <!--End Page Header -->
</div>

<br>
<?php
  include 'modmkn.php';
?>
<br>

<div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Menu
                        </div>
                        <div class="panel-body">
                          
                          <div class="row space-form ">
                             <div class="col-sm-4">
                              <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                <input class="form-control" id="myInput" type="text" placeholder="Search..">
                              </div>
                            </div>
                          </div><br>

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th><center>No</th>
                                            <th><center>Kode Menu</th>
                                            <th><center>Jenis Menu</th>
                                            <th><center>Nama Menu</th>
                                            <th><center>Gambar Menu</th>
                                            <th><center>Harga Paket</th>
                                            <th><center>Harga Satuan</th>
                                            <th><center>Keterangan</th>
                                            <th><center>Fungsi</th>
                                        </tr>
                                        <?php
                                        $no = 1;
                                        include '../config/koneksi.php';
                                        $query = mysqli_query($konek, "SELECT * FROM menu") or die(mysqli_error());
                                          if(mysqli_num_rows($query) == 0){
                                            echo '<tr><td collspan="4" align="center">Tidak ada data!</td></tr>';
                                          }
                                          else{
                                            while ($data = mysqli_fetch_array($query)) {
                                              ?>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><center><?php echo $no++; ?></td>
                                            <td><center><?php echo $data['kode_menu']; ?></td>
                                                <td><center><?php echo $data['jenis_menu']; ?></td>
                                                <td><center><?php echo $data['nama_menu']; ?></td>
                                                <td><center><a data-toggle="tooltip" data-placement="right" title="Lihat Gambar" href="<?php echo $data['gambar_menu'] ?>" target="_blank"><img src ="<?php echo $data ['gambar_menu']; ?>" width="100px" height="50px"/></a></td>
                                                <td><center>Rp <?php echo number_format($data['hargamenu']); ?></td>
                                                <td><center>Rp <?php echo number_format($data['hargasatuan']); ?></td>
                                                <td><center><?php echo $data['keterangan']; ?></td>

                                                <td><center>
                                                  <a href="index.php?halaman=edit-menu&id=<?php echo $data['id_menu'];?>"><span class="fa fa-edit"></span></a>
                                                 &nbsp;
                                                  <a href="../config/delete_menu.php?id=<?php echo $data['id_menu'];?>" title="Hapus Menu" onclick="return confirm('Hapus Menu ini?');"><span class="fa fa-trash-o"></span></a>
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
                    <!--End Advanced Tables -->
                </div>
            </div>

