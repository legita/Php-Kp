<?php

include'../config/koneksi.php';
$id      = $_GET['id'];
$id_user = $_GET['id_user'];

?>

<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Rekap Penjualan</h1>
    </div>
    <!--End Page Header -->
</div>

<div class="row">
    <div class="col-lg-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                 Rekap Penjualan Rumah Makan Ayam Bakar Rina
            </div>
            <div class="panel-body">
 
              <div class="table-responsive">
                <form action="" method="POST">
                <table class="table table-striped table-bordered table-hover" id="myTable">
                  <thead>
                    <tbody>

                      <tr>
                      <td>
                        <select name="bln" class="form-control">
                                        <option>--Pilih--</option>
                                        <option value="01">Januari</option>
                                        <option value="02">Februari</option>
                                        <option value="03">Maret</option>
                                        <option value="04">april</option>
                                        <option value="05">Mei</option>
                                        <option value="06">Juni</option>
                                        <option value="07">Juli</option>
                                        <option value="08">agustus</option>
                                        <option value="09">September</option>
                                        <option value="10">Oktober</option>
                                        <option value="11">November</option>
                                        <option value="12">Desember</option>
                                      </select>
                      </td>
                      <td>
                      <select name="thn" class="form-control">
                      <?php
                      $mulai= date('Y') - 50;
                      for($i = $mulai;$i<$mulai + 100;$i++){
                          $sel = $i == date('Y') ? ' selected="selected"' : '';
                          echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
                      }
                      ?>
                      </select>
                      </td>

                      <td align="center"><button type="submit" class="btn btn-primary btn-block" name="cari">Pilih</button></td>
                      </tr>
                      </table>
                      <br>
                      <br>
                      </div>

                      <?php

                        if(isset($_POST['cari'])){

                          $bln = $_POST['bln'];
                          $thn = $_POST['thn'];
                        
                      ?>


                        <script>

                        window.location = 'index.php?halaman=report-penjualan&&bln=<?php echo $bln; ?>&&thn=<?php echo $thn; ?>';

                        </script>


                        <?php
                        }
                        
                        ?>

                      <?php
                        if(isset($_GET['bln'])&& isset($_GET['thn'])){
                       
                        ?>

                      <table class="table" style="width:800px;">
                          <thead>
                            <tbody>
                          <tr>
                              <th class="bg-info"><center>No</center></th>
                              <th class="bg-info"><center>Tanggal</center></th>
                              <th class="bg-info"><center>Kode Menu</center></th>
                              <th class="bg-info"><center>Nama Menu</center></th>
                              <th class="bg-info"><center>Total</center></th>
                              <th class="bg-info"><center>Jumlah Menu</center></th>
                          </tr>

                      <?php

                      $bln = $_GET['bln'];
                      $thn = $_GET['thn'];

                      include '..config/koneksi.php'; 

                      $no = 1;
                      $query1 = "SELECT * FROM transaksi join pembelian where 
                                transaksi.invoice=pembelian.invoice and transaksi.konfirmasi='1' and month(transaksi.tanggal) = '$bln' and year(transaksi.tanggal) = '$thn'";

                      $tampil1 = mysqli_query($konek, $query1);


                      ?>


                      <?php
                      if(!mysqli_num_rows($tampil1)) {
                        echo "No posts yet";

                      } else {
                      while($row = mysqli_fetch_array($tampil1)) { ?>
                          <tr>
                              <td><center><?php echo $no++; ?></center></td>
                              <td><center><?php echo $row['tanggal']; ?></center></td>
                              <td><center><?php echo $row['kode_menu']; ?></center></td>
                              <td><center><?php echo $row['nama_menu']; ?></center></td>
                              <td><center><?php echo Rp. number_format($row['totalcek']); ?></center></td>
                              <td><center><?php echo $row['jumlah']; ?></center></td>   
                          </tr>


                      <?php }

                      ?>
                    
                        <a href="cetak-report-penjualan.php?print=1&bln=<?php echo $_GET['bln'];?>&thn=<?php echo $_GET['thn']; ?>" target ="_blank" role="button" class="btn btn-primary pull-right" style="margin-right:16px;margin-bottom:10px;width:150px"><span class="fa fa-print"></span> Cetak Report</a>

                      <?php }
                      ?>


                      <?php }
                      ?>

                    </tbody>
                    <?php

                    $bln = $_GET['bln'];
                    $thn = $_GET['thn'];

                    $sum = "SELECT SUM(transaksi.totalcek) as tot FROM transaksi join pembelian where 
                            transaksi.invoice=pembelian.invoice and transaksi.konfirmasi='1' and month(transaksi.tanggal) = '$bln' 
                            and year(transaksi.tanggal) = '$thn'";
                    $tampil3 = mysqli_query($konek,$sum) or die (mysqli_error($konek));
                    $row1 = mysqli_fetch_array($tampil3);

                    ?>

                    <tr>
                        <td colspan="6">Total Pendapatan Bulan <?php echo $bln; ?> : </td>
                        <td><?php echo 'Rp'. number_format($row1['tot']); ?></td>
                    </tr>
                  </thead>
                </table>
              </tbody>
            </thead>
          </table>
        </form>
      </div>
    </div>
  </div>
</div>
</div>