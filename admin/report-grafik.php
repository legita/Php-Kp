<div class="container">
  <div class="col-sm-12">
      <div class="module-head">
        <h3><large>DASHBOARD</large></h3><hr><br>
      </div>
      
      <h1><center><i><b>Selamat Datang di Halaman Admin</b></i></center></h1><br>

      <div class="row">
        <div class="col-sm-12">
          <div class="well">
            <a href="#">
              <span class="fa fa-edit"></span>
            </a>
            <a href="#">
              <span class="fa fa-print"></span>
            </a>
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
                  text: 'Grafik Penjualan Per Bulan'
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


                    $sql_jumlah   = "SELECT  total FROM pembelian where tgl_pesan='$merek'";

                    $query_jumlah = mysqli_query($konek,$sql_jumlah ) or die(mysql_error($konek));
                    while( $data = mysqli_fetch_array($query_jumlah) ){
                      $jumlah = number_format($data['total']);                 
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