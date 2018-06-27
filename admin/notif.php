<li class="dropdown">
    <a href="?halaman=pesanan-masuk">
        <i class="fa fa-bell fa-3x"></i>
        <span class="top-label label label-warning" id="notif"><?php echo $countNotif; ?></span>  
    </a>
</li>

<?php
include '../config/koneksi.php';

    $queryNotif="SELECT * FROM komenweb";
    $sqlNotif = mysqli_query($konek,$queryNotif) or die (mysqli_error($konek));
    $Notif = mysqli_num_rows($sqlNotif);

?>
<li class="dropdown">
    <a href="?halaman=komentar">
        <span class="top-label label label-danger"><?php echo $Notif; ?></span><i class="fa fa-envelope fa-3x"></i>
    </a>
</li>