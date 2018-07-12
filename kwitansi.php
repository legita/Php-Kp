<?php
  error_reporting()
?>

<!DOCTYPE html>

<html lang="en">

<head>
  <title>Print Kwitansi Pemesanan Ayam Bakar Rina</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="layout.css">
  <script src="bootstrap/jquery-3.2.1.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body onload="window.print()">

<div class="panel panel-default">
  <div class="panel-body">
    <div class="row-table-bordered">

            <div class="col-md-2">
                <img src="makanan/ayam.png" class="img-responsive pull-left" style="max-height:150px;display:inline">
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

include 'config/koneksi.php';

$invoice = $_GET['invoice'];

$query = "SELECT * FROM pembelian where invoice = '$invoice' ";
$tampil = mysqli_query($konek, $query) or die (mysqli_error($konek));

$query2 = "SELECT * FROM pembelian join user where invoice = '$invoice' and pembelian.id_user=user.id_user ";
$tampil2 = mysqli_query($konek, $query2) or die (mysqli_error($konek));
$d1 = mysqli_fetch_array($tampil2);

$query3 = "SELECT * FROM pembelian where invoice = '$invoice' ";
$tampil3 = mysqli_query($konek, $query3) or die (mysqli_error($konek));
$d2 = mysqli_fetch_array($tampil3);

$query4 = "SELECT * FROM pembelian where invoice = '$invoice' ";
$tampil4 = mysqli_query($konek, $query4) or die (mysqli_error($konek));
$d3 = mysqli_fetch_array($tampil4);

$sum = "SELECT SUM(total) as bayar FROM pembelian 
        WHERE invoice = '$invoice'";
$tampil3 = mysqli_query($konek,$sum) or die (mysqli_error($konek));
$row1 = mysqli_fetch_array($tampil3);



$no =1;

?>
<hr>
<h2 style="font-family: Kristen ITC;"><center>Kwitansi Pembelian</center></h2><br><br>
<h4>Invoice : <?php echo $d1['invoice']; ?></h4>
<h4>Tanggal Pesan : <?php echo date($d1['tgl_pesan']); ?></h4>
<h4>Pemesan    : <?php echo $d1['nama_lengkap']; ?></h4>
<h4>Penanggung Jawab    : <?php echo $d1['pj']; ?></h4><br>

<body>
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover" id="myTable">
  <tr>
    <th><center>No</center></th>
    <th><center>Kode Menu</center></th>
    <th><center>Nama Menu</center></th>
    <th><center>Type Menu</center></th>
    <th><center>Jumlah Pesanan</center></th>
    <th><center>Harga Menu</center></th>
    <th><center>Catatan</center></th>
    <th><center>Sub Total</center></th>
  </tr>
  <tr>
   
   <?php

  while($row = mysqli_fetch_array($tampil)) { ?>

  <tr>
        <td><center><?php echo $no++; ?></center></td>
        <td><center><?php echo $row['kode_menu']; ?></center></td>
        <td><center><?php echo $row['nama_menu']; ?></center></td>
        <td><center><?php echo $row['type']; ?></center></td>
        <td><center><?php echo $row['jumlah']; ?></center></td>
        <td><center><?php echo 'Rp &nbsp;'.number_format($row['hargamenu']); ?></center></td>
        <td><center><?php echo $row['catatan']; ?></center></td>
        <td><center><?php echo 'Rp'.number_format($row['total']); ?></center></td>
    </tr>

<?php }

?>

<tr>
 <td colspan="6">Total Biaya Pesanan : </td>
 <td colspan="2"><center><?php echo 'Rp &nbsp;'.number_format($row1['bayar']); ?></center>
  </td>

</tr>

</table>

<div style="text-align-last: right">
  <label>
    <?php
    echo date("l") . "&nbsp;:&nbsp;";
    echo date("d-M-Y");
    ?>
  </label><br>
  <label>
    <h5 color="red"><i>Kwitansi Pemesanan Wajib di Tunjukkan Kepada Kurir Pengantar Pesanan Untuk Menjadi Tanda Bukti Pemesanan</i></h5>
  </label>
</div>
</div>
</div>
</div>
</div>
</body>
</html>

