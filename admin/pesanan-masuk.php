<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Data Pesanan Masuk</h1>
    </div>
    <!--End Page Header -->
</div>

<div class="row">
	<div class="col-lg-12">
	    <!-- Advanced Tables -->
	    <div class="panel panel-default">
	        <div class="panel-heading">
	           Pesanan Masuk
	        </div>
	        <div class="panel-body">
	          
	          <div class="row space-form ">
	             <div class="col-sm-4">
	              <div class="input-group">
	                <span class="input-group-addon"><i class="fa fa-search"></i></span>
	                <input class="form-control" id="myInput" onkeyup="myFunction()" type="text" placeholder="Search.." title="Type in a name">
	              </div>
	            </div>
	          </div><br>

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

                                $query="SELECT * FROM transaksi join pembelian WHERE transaksi.invoice=pembelian.invoice and transaksi.konfirmasi= '0' ";

                                $tampil=mysqli_query($konek,$query)or die(mysqli_error($konek));
                                $no=1;
                                while ($data=mysqli_fetch_array($tampil)) { ?>
                                	<tr>
                                		<td><center><?php echo $no++; ?></center></td>
                                		<td><center><?php echo date('d-M-Y', strtotime($data['tanggal'])); ?></center></td>
                                		<td><center><?php echo date('d-M-Y', strtotime($data['tgl_butuh'])); ?></center></td>
                                		<td><center><?php echo $data['kode_menu']; ?></center></td>
                                		<td><center><?php echo $data['nama_pembeli']; ?></center></td>
                                		<td><center><?php echo $data['nama_menu']; ?></center></td>
                                		<td><center><?php echo $data['type']; ?></center></td>
                                		<td><center><?php echo $data['jumlah']; ?></center></td>
                                		<td><center><?php echo $data['invoice']; ?></center></td>
                                		<td><center><a data-toggle="tooltip" data-placement="right" title="Lihat Gambar" href="<?php echo $data['upload'] ?>" target="_blank"><img src ="<?php echo $data['upload']; ?>" width="113px"; height="152px";></a></td>
                                		</center><td>		
                                		<?php if ($data['konfirmasi']==0){ ?>
                                		<a href="../config/proses_konfirmasi.php?id=<?php echo $data['id_transaksi']; ?>" class="btn btn-warning">Konfirmasi</a>
                                			<?php }
                                		else { ?>
                                			<button type="button"  class="btn btn-danger">Sukses Konfirmasi</button>
                                		<?php } ?>
                                        <hr>
                                            <a href="index.php?halaman=detail-pesanan-masuk&id=<?php echo $data['id_transaksi'];?>" class="btn btn-info">Detail</a>&nbsp;&nbsp;&nbsp;
                                            <a href="../config/delete_konfirmasi.php?id=<?php echo $data['id_transaksi'];?>" title="Hapus Data" onclick="return confirm('Hapus Data ini?');"><span class="fa fa-trash-o" style="color: red;"></span></a>     
                                		</td>
                                	</td>
                                </tr>
                                	
                                <?php
                                }
                                ?>
                            </tbody>
                        </thead>
                    </table>

                    <a href="?halaman=data-konfirmasi" class="btn btn-primary" style="text-align: right;">Data Konfirmasi</a>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
