<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Konfirmasi Pesanan </h1>
    </div>
    <!--End Page Header -->
</div>

<div class="row">
    <div class="col-lg-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                 Data Pesanan Yang Di Konfirmasi
            </div>
            <div class="panel-body">
 
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="myTable">
                        <thead>
                            <tbody>
                                <tr>
                                    <th class="bg-info"><center>No</center></th>
                                    <th class="bg-info"><center>Tanggal Transfer</center></th>
                                    <th class="bg-info"><center>Tanggal Dibutuhkan</center></th>
                                    <th class="bg-info"><center>Kode Menu</center></th>
                                    <th class="bg-info"><center>Nama Pemesan</center></th>
                                    <th class="bg-info"><center>Nama Menu</center></th>
                                    <th class="bg-info"><center>Type Menu</center></th>
                                    <th class="bg-info"><center>Total Pemesanan</center></th>
                                    <th class="bg-info"><center>Invoice</center></th>
                                    <th class="bg-info"><center>Bukti Pembayaran</center></th>
                                    <th class="bg-info"><center>Fungsi</center></th>
                                </tr>

                        <?php
                        include'../config/koneksi.php';

                        $query="SELECT * FROM transaksi join pembelian WHERE 
                                transaksi.invoice=pembelian.invoice and transaksi.konfirmasi= '1' ";

                        $tampil=mysqli_query($konek,$query)or die(mysqli_error($konek));
                        $no=1;
                        while ($data=mysqli_fetch_array($tampil)) { ?>
                          <tr>
                            <td><center><?php echo $no++; ?></center></td>
                            <td><center><?php echo date('d-m-Y', strtotime($data['tanggal'])); ?></center></td>
                            <td><center><?php echo date('d-m-Y', strtotime($data['tgl_butuh'])); ?></center></td>
                            <td><center><?php echo $data['kode_menu']; ?></center></td>
                            <td><center><?php echo $data['nama_pembeli']; ?></center></td>
                            <td><center><?php echo $data['nama_menu']; ?></center></td>
                            <td><center><?php echo $data['type']; ?></center></td>
                            <td><center><?php echo $data['jumlah']; ?></center></td>
                            <td><center><?php echo $data['invoice']; ?></center></td>
                            <td><center><a data-toggle="tooltip" data-placement="right" title="Lihat Gambar" href="<?php echo $data['upload'] ?>" target="_blank"><img src ="<?php echo $data['upload']; ?>" width="113px"; height="152px";></a></td>
                            <td>
                                <a href="index.php?halaman=detail-pesanan&id=<?php echo $data['id_transaksi'];?>&id_user=<?php echo $data['id_user']; ?>" class="btn btn-primary">Detail Produk</a>
                                    <br><br>
                                <a href="index.php?halaman=detail-alamat-pesanan&id=<?php echo $data['id_transaksi'];?>&id_user=<?php echo $data['id_user']; ?>" class="btn btn-info">Detail alamat</a> 
                            </td>
                          </tr>
                          
                        <?php
                        }
                        ?>
                    </tbody>
                </thead>
            </table>
            </div>
        </div>
     </div>
  </div>
</div>                           

