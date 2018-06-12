<div>
    <h3 class="active" style="color: white;" align="center"><b>TULIS PERTANYAAN / KOMENTAR</b></h3><hr>
</div>
      <form class="form-horizontal" action="config/tambahkomen.php" method="POST">
        <div class="form-group">
            <label class="col-sm-3">&nbsp;&nbsp;&nbsp;&nbsp;Nama</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-8">
                <input class="form-control" name="nama" placeholder="Masukkan Nama Anda" type="text" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3">&nbsp;&nbsp;&nbsp;&nbsp;Email</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-8">
                <input class="form-control" name="email" placeholder="Masukkan Email Anda" type="email" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3">Pertanyaan / Komentar</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-8">
                <textarea class="form-control" name="pertanyaan" placeholder="Masukkan Pertanyaan atau Komentar Anda" type="text" required></textarea>
            </div>
        </div>
        <input type="hidden" name="tgl" value="<?php $tgl=date('d-m-Y:h:i:s'); echo $tgl; ?>">
        <input type="hidden" name="id_menu" value="<?php echo $data['id_menu']; ?>">
        <input type="hidden" name="nama_menu" value="<?php echo $data['nama_menu']; ?>">
        <div class="form-group">

            <div class="col-sm-12" align="right">
                <button type="submit" class="btn btn-danger">Kirim</button>
            </div>
        </div>
        <br><br>

    <form class="form-horizontal" method="POST">

      <table class="table">
        <thead>
          <tr style="color: white;">
            <th>Nama</th>
            <th>Pertanyaan / Komentar</th>
            <th>Tanggal</th>
            <th>Balasan Kami</th>
          </tr>
        </thead>
        <tbody style="color: white;">
          <?php

            include 'config/koneksi.php';

            $query = mysqli_query($konek, "SELECT nama, pertanyaan, balasan FROM komentar WHERE id_menu='$id_menu' ")or die(mysqli_error());
                    if(mysqli_num_rows($query) == 0){ 
                      echo '<td colspan="4" align="center"><i>Belum ada pertanyaan / komentar!</i></td>';    
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){
                        echo '<tr>';
                        echo '<td><b>'.$_SESSION['username'].'</b></td>';
                        echo '<td><i>'.$data['pertanyaan'].'</i></td>';
                        echo '<td><i>'.$tgl=date('d-m-Y').'</i></td>';
                        echo '<td><i>'.$data['balasan'].'</i></td>';    
                      }
                    }
              
                ?>
                    
        </tbody>
      </table>
    </form>