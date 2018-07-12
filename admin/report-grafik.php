<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Grafik Laporan</h1>
    </div>
    <!--End Page Header -->
</div>

<div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Grafik Penjualan
                        </div>
                        <div class="panel-body">

                            <div class="row">
                              <div class="col-sm-12">
                                <div class="well">

                                  <script src="../assets/js/jquery.min.js" type="text/javascript"></script>
                                  <script src="../assets/js/highcharts.js" type="text/javascript"></script>
                                  <script type="text/javascript">
                                  var chart1; // globally available
                                  $(document).ready(function() {
                                    chart1 = new Highcharts.Chart({
                                      chart: {
                                        renderTo: 'container',
                                        type: 'column'
                                      },   
                                      title: {
                                        text: 'Grafik Penjualan Ayam Bakar Rina'
                                      },
                                      xAxis: {
                                        categories: ['Bulan']
                                      },
                                      yAxis: {
                                        title: {
                                          text: 'Pendapatan'
                                        }
                                      },
                                      series:             
                                      [

                                      <?php 

                                      include('../config/koneksi.php');

                                      
                                       

                                        $sql   = "SELECT tgl_pesan FROM pembelian";
                                        $query = mysqli_query($konek, $sql )  or die(mysql_error($konek));
                                        while( $ret = mysqli_fetch_array( $query ) ){
                                          $merek=$ret['tgl_pesan'];  


                                          $sql_jumlah   = "SELECT  totalcek FROM pembelian where tgl_pesan='$merek'";

                                          $query_jumlah = mysqli_query($konek,$sql_jumlah ) or die(mysql_error($konek));
                                          while( $data = mysqli_fetch_array($query_jumlah) ){
                                            $jumlah = number_format($data['totalcek']);                 
                                          }             
                                          ?>
                                          {
                                            name: '<?php echo $merek; ?>',
                                            data: [<?php echo $jumlah; ?>]
                                          },
                                          <?php } ?>
                                          ]
                                        });
                                  });  
                                  
                                    
                                  </script>

                          <div id='container'></div>    
                                </div>
                              </div>
                            </div>

                        </div>
                    </div>
                </div>
</div>
