<?php

include'../config/koneksi.php';
$id      = $_GET['id'];
$id_user = $_GET['id_user'];

?>

<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Detail Pesanan </h1>
    </div>
    <!--End Page Header -->
</div>

<div class="row">
    <div class="col-lg-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Pesanan Masuk | Detail Pesanan
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
                                <th class="bg-info"><center>Id Pemesan</center></th>
                                <th class="bg-info"><center>Nama Pemesan</center></th>
                                <th class="bg-info"><center>Nama Menu</center></th>
                                <th class="bg-info"><center>Type Menu</center></th>
                                <th class="bg-info"><center>Harga Menu</center></th>
                                <th class="bg-info"><center>Wadah</center></th>
                                <th class="bg-info"><center>Buah</center></th>
                                <th class="bg-info"><center>Total Pemesanan</center></th>
                                <th class="bg-info"><center>Invoice</center></th>
                              </tr>

                            <?php
                            include'../config/koneksi.php';

                            $query = "SELECT * FROM transaksi
                                JOIN pembelian ON pembelian.invoice = transaksi.invoice
                                WHERE transaksi.konfirmasi= '0' and transaksi.id_transaksi='$id'";

                            $tampil=mysqli_query($konek,$query)or die(mysqli_error($konek));
                            $no=1;
                            while ($data=mysqli_fetch_array($tampil)) { ?>
                              <tr>
                                <td><center><?php echo $no++; ?></center></td>
                                <td><center><?php echo date('d-m-Y', strtotime($data['tanggal'])); ?></center></td>
                                <td><center><?php echo date('d-m-Y', strtotime($data['tgl_butuh'])); ?></center></td>
                                <td><center><?php echo $data['kode_menu']; ?></center></td>
                                <td><center><?php echo $data['id_user']; ?></center></td>
                                <td><center><?php echo $data['nama_pembeli']; ?></center></td>
                                <td><center><?php echo $data['nama_menu']; ?></center></td>
                                <td><center><?php echo $data['type']; ?></center></td>
                                <td><center><?php echo $data['hargamenu']; ?></center></td>
                                <td><center><?php echo $data['jenis_wadah']; ?></center></td>
                                <td><center><?php echo $data['buah']; ?></center></td>
                                <td><center><?php echo $data['jumlah']; ?></center></td>
                                <td><center><?php echo $data['invoice']; ?></center></td>
                              </tr>
                              
                            <?php
                            }
                            ?>
                        </tbody>
                    </thead>
                </table> 

                    <a href="?halaman=pesanan-masuk" class="btn btn-danger">Kembali</a>

                    </div>
                </div>
            </div>
        </div>
    </div>                           


                                