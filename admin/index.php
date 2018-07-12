<?php

session_start();
error_reporting(0);

$id1 = $_SESSION['id'];
$id2 = session_id();



if($id1!=$id2) //jika belum ke login
{
header("location: index.php");
}

$username   = $_SESSION['username'];
$level      = $_SESSION['level'];

if(isset($_GET['halaman'])) $halaman = $_GET['halaman']; else $halaman="home-admin-owner";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Owner</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />

    <!-- Page-Level CSS -->
    <link href="assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />


</head>

<?php
include '../config/koneksi.php';

    $queryNotif="SELECT * FROM transaksi join pembelian on transaksi.invoice=pembelian.invoice
                WHERE transaksi.konfirmasi= '0'";
    $sqlNotif = mysqli_query($konek,$queryNotif) or die (mysqli_error($konek));
    $countNotif = mysqli_num_rows($sqlNotif);

?>

<?php
include '../config/koneksi.php';

    $queryNotif="SELECT * FROM komentar";
    $sqlNotif = mysqli_query($konek,$queryNotif) or die (mysqli_error($konek));
    $Notif = mysqli_num_rows($sqlNotif);

?>

<?php
include '../config/koneksi.php';

    $queryNotif="SELECT * FROM komenweb";
    $sqlNotif = mysqli_query($konek,$queryNotif) or die (mysqli_error($konek));
    $Notif2 = mysqli_num_rows($sqlNotif);

?>

<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <h1 style="font-family: Kristen ITC; color: white;"><?php echo $level ?></h1>
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->

                <li>
                    <?php
                        if($level=="Admin")
                           {
                                include ('notif.php');  
                           }
                        ?>        
                </li>

                <li class="dropdown">
                    <a href="?halaman=komentarmenu">
                        <span class="top-label label label-danger"><?php echo $Notif; ?></span><i class="fa fa-envelope fa-3x"></i>
                    </a>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li> <a href="../config/logout.php" value="Click Me" onclick="return confirm('Apakah anda ingin logout?') "><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-info">
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <li class="sidebar-search">
                        <!-- search section-->
                        
                        <!--end search section-->
                    </li>
                    <li class="selected">
                        <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Home</a>
                    </li>
                    
                        <!-- Collect the nav links, forms, and other content for toggling -->
                    <li>
                        <?php
                            if($level=="Admin")
                               {
                                    include ('menu-admin.php');  
                               }
                            elseif($level=="Owner")
                                {
                                    include ('menu-owner.php');
                                }
                            ?>        
                    </li>
                    <li>
                        <a href="index.php?halaman=menu-makanan"><i class="fa fa-bar-chart-o fa-fw"></i> Menu Makanan</a>
                    </li>
                    <li>
                        <a href="../config/logout.php" value="Click Me" onclick="return confirm('Apakah anda ingin logout?') "><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->


<!--  page-wrapper -->
<div id="page-wrapper">

                <?php

                if($level=="Admin"){ 

                     if($halaman=="home-admin-owner")              include "home-admin-owner.php"; 
                        else if($halaman=="view-user")             include "view-user.php"; 
                        else if($halaman=="edit-user")             include "edit-user.php";
                        else if($halaman=="tambah-user")           include "tambah-user.php";  

                        else if($halaman=="menu-makanan")          include "menu-makanan.php";
                        else if($halaman=="edit-menu")             include "edit-menu.php";
                        else if($halaman=="tambah-menu")           include "tambah-menu.php";

                        else if($halaman=="data-konfirmasi")       include "data-konfirmasi.php";
                        else if($halaman=="detail-pesanan")        include "detail-pesanan.php";
                        else if($halaman=="detail-alamat-pesanan") include "detail-alamat-pesanan.php";

                        else if($halaman=="data-request")          include "data-request.php";
                        else if($halaman=="detail-request")        include "detail-request.php";

                        else if($halaman=="pesanan-masuk")         include "pesanan-masuk.php";
                        else if($halaman=="detail-pesanan-masuk")  include "detail-pesanan-masuk.php";


                        else if($halaman=="komentarmenu")          include "komentarmenu.php";
                        else if($halaman=="komentarweb")           include "komentarweb.php";
                        else if($halaman=="edit-komen")            include "edit-komen.php";
                        else if($halaman=="edit-komentar")         include "edit-komentar.php";

                }
                elseif($level=="Owner" ){

                        if($halaman=="home-admin-owner")           include "home-admin-owner.php";                 
                        else if($halaman=="menu-makanan")          include "menu-makanan.php";
                        else if($halaman=="edit-menu")             include "edit-menu.php";
                        else if($halaman=="tambah-menu")           include "tambah-menu.php";

                        else if($halaman=="report-penjualan")      include "report-penjualan.php";
                        else if($halaman=="report-grafik")         include "report-grafik.php"; 
                        else if($halaman=="reportpdf")             include "reportpdf.php";
                        else if($halaman=="cetak-report-penjualan")  
                             include "cetak-report-penjualan.php";

                        else if($halaman=="data-penjualan")        include "data-penjualan.php";
                        else if($halaman=="detail")                include "detail.php";
                        
                        else if($halaman=="komentarmenu")          include "komentarmenu.php";
                    
                }       
                  

                ?>
    
</div>
</div>


<div class="row copyright">
    <div class="col-md-12 text-center"><br>
        <div id="copyright" class="hoc clear center"> 
            <p>2018 &copy; Kerja Praktek - Gita Apriyani | 2015230019 </p>
            <p>Powered By <a target="_blank" href="index.php?halaman=index" title="Ayam Bakar Rina">Ayam Bakar Rina</a></p>
        </div>
    </div>
</div>
    <!-- /.container -->



    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/plugins/morris/morris.js"></script>
    <script src="assets/scripts/dashboard-demo.js"></script>

    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>

<script src="../assets/js/jquery.min.js"></script>
<script>
var last = 0;
function check(){
    var url = 'cek.php?last='+last;
    $.get(url, {}, function(resp){
        if(resp.result != false){
            $("#notif").html(resp.result);
            last = resp.last;
        }
        setTimeout("check()", 1000);
    }, 'json');
}
$(document).ready(function(){
    check();
});
</script>

</body>

</html>
