

<div>
    <h3 class="active" style="color: white;" align="center"><b>TULIS PERTANYAAN / KOMENTAR</b></h3><hr>
</div>
      <form class="form-horizontal" action="config/tambahkomen2.php" method="POST">
        <div class="form-group">
            <label class="col-sm-3" style="text-align: left;">Nama</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-3">
                <input style="color: black;" class="form-control" name="nama" type="text" value="<?php echo $_SESSION['username']; ?>" readonly>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3" style="text-align: left;">Pertanyaan / Komentar</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-5">
                <textarea class="form-control" name="pertanyaan" placeholder="Masukkan Pertanyaan atau Komentar Anda" type="text" required></textarea>
            </div>
        </div>
        <input type="hidden" name="tgl" value="<?php $tgl=date('d-M-Y:h:i:s'); echo $tgl; ?>">
        <input type="hidden" name="id_menu" value="<?php echo $data['id_menu']; ?>">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        <input type="hidden" name="nama_menu" value="<?php echo $data['nama_menu']; ?>">
        <input type="hidden" name="type" value="Satuan">
        <div class="form-group">

            <div class="col-sm-10" align="right">
                <button type="submit" class="btn btn-danger">Kirim</button>
            </div>
        </div>
        <br><br>

    <form class="form-horizontal" method="POST">

      <table class="table">
        <thead>
          <tr style="color: white;">
            <th><center>Nama</ceter></th>
            <th><center>Pertanyaan / Komentar</center></th>
            <th><center>Tanggal</center></th>
            <th><center>Balasan Kami</center></th>
          </tr>
        </thead>
        <tbody style="color: white;">
          <?php

            include 'config/koneksi.php';

            $query = mysqli_query($konek, "SELECT nama, pertanyaan, balasan FROM komentar WHERE id_menu='$id_menu' And type='Satuan'")or die(mysqli_error());
                    if(mysqli_num_rows($query) == 0){ 
                      echo '<td colspan="4" align="center"><i>Belum ada pertanyaan / komentar!</i></td>';    
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){
                        echo '<tr>';
                        echo '<td><center><b>'.$data['nama'].'</b></center></td>';
                        echo '<td><center><i>'.$data['pertanyaan'].'</i></center?</td>';
                        echo '<td><center><i>'.$tgl=date('d-M-Y').'</i></center></td>';
                        echo '<td><center><i>'.$data['balasan'].'</i></center></td>';   
                      }
                    }
              
                ?>
                    
        </tbody>
      </table>
    </form>