<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Home <?php echo $level ?> Ayam Bakar Rina</h1>
    </div>
    <!--End Page Header -->
</div>

<div class="row">
    <!-- Welcome -->
    <div class="col-lg-12">
     <div class="alert alert-info">        
       <i class="fa fa-folder-open"></i><b>&nbsp;Hello ! </b>Welcome Back <b><?php include ('status.php');?></b>
     </div>
     <div class="alert alert-danger">
       <p align="center">
           <?php
           date_default_timezone_set('Asia/Jakarta');
           echo "<b>Login hari ini: </b>" . date('l')."<br>";
           echo date("d-M-Y | H:i:s");
           ?>
       </p>
     </div>
    </div>
    <!--end  Welcome -->
</div>