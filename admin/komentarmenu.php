<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Komentar Pada Menu</h1>
    </div>
    <!--End Page Header -->
</div>

<div class="row">
    
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                 Data Komentar Menu
            </div>
            <div class="panel-body">
              
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                                  <tr>
                                    <th>No</th>
                                    <th>Id Menu</th>
                                    <th>Nama Menu</th>
                                    <th>Nama</th>
                                    <th>Pertanyaan</th>
                                    <th>Balasan</th>
                                    <th>Tanggal</th>
                                    <th colspan="2">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php

                                    include '../config/koneksi.php';

                                    $query = mysqli_query($konek, "SELECT * FROM komentar ORDER BY tgl DESC")or die(mysqli_error());
                                            if(mysqli_num_rows($query) == 0){ 
                                              echo '<tr><td colspan="7" align="center"><i>Belum ada pertanyaan / komentar!<i></td></tr>';    
                                            }
                                              else
                                            { 
                                              $no = 1;        
                                              while($data = mysqli_fetch_array($query)){  
                                                echo '<tr>';
                                                echo '<td>'.$no.'</td>';
                                                echo '<td>'.$data['id_menu'].'</td>';
                                                echo '<td>'.$data['nama_menu'].'</td>';
                                                echo '<td>'.$data['nama'].'</td>';
                                                echo '<td>'.$data['pertanyaan'].'</td>';
                                                echo '<td>'.$data['balasan'].'</td>';
                                                echo '<td>'.$data['tgl'].'</td>';
                                                echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Balas" href=index.php?halaman=edit-komentar&&id='.$data['id'].'><i class="fa fa-edit fa-fw"></i></a></td>';
                                                echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Hapus" href=../config/delete_komenmenu.php?id='.$data['id'].'><i class="fa fa-trash-o fa-fw"></i></a></td>';
                                                echo '</tr>';
                                                $no++;  
                                              }
                                            }
                                      
                                        ?>
                                            
                                </tbody>
                    </table>
                </div> 
            </div>
        </div>
    </div>
</div>