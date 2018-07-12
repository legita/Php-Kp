<?php

  error_reporting();
  include 'config/koneksi.php';

  $id_menu = $_GET['id_menu'];

  $query    = "SELECT * FROM menu ORDER BY id_menu ";
  $hasil   = mysqli_query($konek, $query)or die(mysql_error());
  $data    = mysqli_fetch_array($hasil);

?>


<style>
  /* Style the buttons */
.btn {
  padding: 12px 16px;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}


</style>

  
     <form class="form-horizontal" method="POST">

          <?php
            $menu = $_GET['menu'];
            include 'config/koneksi.php';

            $query = mysqli_query($konek, "SELECT * FROM menu")or die(mysqli_error());
                    if(mysqli_num_rows($query) == 0){ 
                      echo '<center><i>';
                      echo 'Belum ada post Menu Makanan!';
                      echo '</i></center>';    
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        
                        //Gambar Menu Makanan
                        // echo '<span class="embed-responsive embed-responsive-16by9">';
                        echo '<div class="col-sm-4">';
                        echo '<div class="thumbnail">';
                      ?>
                        <center><font color="black">
                        

                        <center><p style="font-size: 28px;"><?php echo $data['nama_menu'] ?></p></center>
                        <p><img src="makanan/<?php echo $data['gambar_menu'] ?>" width="328px" height="230px"></p><hr>
                        <table>
                        <td><center>Kode Makanan : <?php echo $data['kode_menu'] ?><br>
                        Harga Paket  : Rp.<?php echo $data['hargamenu'] ?><br>
                        Harga Satuan : Rp.<?php echo $data['hargasatuan'] ?><br>
                        Ketengan     : <?php echo $data['keterangan'] ?></center></td>
                        </table></center><hr>

                        <!-- <a data-toggle="tooltip" style="color: white;" data-placement="right" title="Order!"> -->
                        
                        </font>

                        <?php
                        if(isset($_SESSION['id_user'])){ ?>
                          <center><a data-toggle="tooltip" data-placement="left" title="Pesan Paket" href="?halaman=order&&id_menu=<?php echo $data['id_menu'] ?>">
                            <button type="button" class="btn btn-warning">Paket</button>
                          </a>
                          <a data-toggle="tooltip" data-placement="left" title="Pesan Satuan" href="?halaman=pesan&&id_menu=<?php echo $data['id_menu'] ?>">
                            <button type="button" class="btn btn-info">Satuan</button>
                          </a>
                          </center>

                          <?php }else{ ?>

                          <?php } ?>
                      <?php  
                        echo '<hr>';
                        echo '</div>';
                        echo '</div>';
                        $no++;  
                      }
                    }
                 
                ?>
                    
         </tbody>
       </table>
    </form>
   
