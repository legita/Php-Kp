<style>

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}


.btn {
    color: white;
    float: center;
    font-size: 15px;
    font-weight: bold;
}

.btn:hover,
.btn:focus {
    color: green;
    cursor: pointer;
}

</style>

<!-- Trigger/Open The Modal -->
<button class="btn btn-info btn-md center" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span> Tambah</button>
<br>

<!-- The Modal -->
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
      <!-- Modal content -->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <!-- <span class="close">&times;</span> <br> -->
          <font color="darkblue"><h2 class="modal-title" align="center">Tambah Menu</h2>
          <p align="center"><sup><i>Insert</i></sup></p></font>
        </div>
        <!-- Modal Menu -->
        <div class="modal-body" align="center">
          <form action="../config/tambahmenu.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
            <div class="form-group">
                <label class="col-sm-3">Kode Menu</label>
                <label class="col-sm-1">:</label>
                <div class="col-sm-8">
                  <input type="text" name="kode_menu" class="form-control" id="kode_produk" placeholder="Kode menu" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3">Jenis Menu</label>
                <label class="col-sm-1">:</label>
                <div class="col-sm-8">
                  <select class="form-control" id="jenis_menu" name="jenis_menu">
                    <option>--Pilih Jenis Produk--</option>
                    <option value="Ayam">Ayam</option>
                    <option value="Ikan">Ikan</option>
                    <option value="Sop">Sop</option>
                </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3">Nama Menu</label>
                <label class="col-sm-1">:</label>
                <div class="col-sm-8">
                  <input type="text" name="nama_menu" class="form-control" id="nama_menu" placeholder="Nama menu" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3">Gambar Menu</label>
                <label class="col-sm-1">:</label>
                <div class="col-sm-8">
                  <input type="file" name="fileToUpload" id="fileToUpload" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3">Harga Paket</label>
                <label class="col-sm-1">:</label>
                <label class="col-sm-1">Rp.</label>
                <div class="col-sm-7">
                  <input type="text" name="hargamenu" class="form-control" id="hargamenu" placeholder="Harga paket" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3">Harga Satuan</label>
                <label class="col-sm-1">:</label>
                <label class="col-sm-1">Rp.</label>
                <div class="col-sm-7">
                  <input type="text" name="hargasatuan" class="form-control" id="hargasatuan" placeholder="Harga satuan" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3">Keterangan</label>
                <label class="col-sm-1">:</label>
                <div class="col-sm-8">
                  <input type="text" name="keterangan" class="form-control" id="keterangan" placeholder="Keterangan" required>
                </div>
            </div>  
          </div>
         
            <div class="modal-footer">
                  <button type="submit" class="btn btn-success">Submit</button>
            </div>
            <br>
          </form>
      </div>
    </div>
  
  </div>
