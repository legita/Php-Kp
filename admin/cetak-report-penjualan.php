<?php
  error_reporting()
?>

<!DOCTYPE html>

<html lang="en">

<head>
  <title>Print Laporan Penjualan Per-Bulan Ayam Bakar Rina</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="layout.css">
  <script src="../bootstrap/jquery-3.2.1.min.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>
</head>

<body onload="window.print()">

<div class="panel panel-default">
  <div class="panel-body">
    <div class="row-table-bordered">

            <div class="col-md-2">
                <img src="../makanan/ayam.png" class="img-responsive pull-left" style="max-height:150px;display:inline">
            </div>

                <font size="6"><b><p class="text-center">Rumah Makan Ayam Bakar Rina</p></b></font>
                <font size="3"><b><p class="text-center">Harapan Baru 2 Bekasi, Jl, Rajawali 5 No. 2 Kota Bekasi</p></b></font>
                <b><p class="text-center">Phone : 021 88960920 / 0897 9244 964</p></b>
      <br>
     <style type="text/css">
        hr.style2 {
        border-top: 3px double #8c8b8b;
        }
    </style>
  
  <hr class="style2">

  <?php

  include '../config/koneksi.php';
  $bln = $_GET['bln'];
  $thn = $_GET['thn'];

  $query = "SELECT * FROM transaksi
      JOIN pembelian ON pembelian.invoice = transaksi.invoice
      WHERE transaksi.konfirmasi= '1' and transaksi.id_transaksi and month(transaksi.tanggal) = '$bln' 
      and year(transaksi.tanggal) = '$thn'";

  $tampil = mysqli_query($konek, $query) or die (mysqli_error($konek));

  $no =1;

  ?>

  <hr>
  <h2 style="font-family: Kristen ITC;"><center>Kwitansi Pembelian</center></h2><br>
  <body>

      <div class="table-responsive">
      <table class="table table-striped table-bordered table-hover" id="myTable">
          <tr>
            <th><center>No</center></th>
            <th><center>Tanggal</center></th>
            <th><center>Kode Menu</center></th>
            <th><center>Jenis Menu</center></th>
            <th><center>Type Menu</center></th>
            <th><center>Jumlah Pesanan</center></th>
            <th><center>Total</center></th>
          </tr>
           
          <?php

          while($row = mysqli_fetch_array($tampil)) { ?>

            <tr>
                <td><center><?php echo $no++; ?></center></td>
                <td><center><?php echo $row['tanggal']; ?></center></td>
                <td><center><?php echo $row['kode_menu']; ?></center></td>
                <td><center><?php echo $row['nama_menu']; ?></center></td>
                <td><center><?php echo $row['type']; ?></center></td>
                <td><center><?php echo $row['jumlah']; ?></center></td>
                <td><center><?php echo 'Rp'. number_format($row['totalcek']); ?></center></td>
            </tr>

        <?php }

        ?>

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

        </table>



      </div>
    </div>
  </div>
  </body>
</html>