<style>
.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

 .accordion:hover {
    background-color: #ccc; 
}

.panel {
    padding: 0 18px;
    display: none;
    background-color: white;
    overflow: hidden;
}
</style>

<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(assets/images/d.jpg);" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="display-t js-fullheight">
					<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
						<h1>See <em>Our</em> Question</h1>
						<h2>Brought to you </h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>

<br><hr>
<div  class="container text-left">
	<div style="color: white;">
	  <h2 style="color: white;">Pertanyaan yang sering diajukan</h2>
	  <p><i><sub>Pertanyaan yang sering diajukan, adalah daftar pertanyaan dan jawaban dari pertanyaan yang diajukan secara umum dalam beberapa konteks dan berkaitan dengan topik yang ada.</sub></i></p>

<button class="accordion">Bagaimana Cara Memesan di Ayam Bakar Rina ?</button>
<div class="panel" style="color: black;">
  <center><br><p>Kamu dapat meng-<b>Klik</b> <a href="index.php?halaman=About">Menu About</a>.</p></center>
</div>

<button class="accordion">Bisakah saya melakukan pembelian tanpa mendaftar atau Login terlebih dahulu ?</button>
<div class="panel" style="color: black;">
  <center><br><p>Tidak bisa. Jika ingin melakukan order catering wajib memiliki akun dan melakukan Login terlebih dahulu dengan cara <b>Klik</b> menu Login</p></center>
</div>

<button class="accordion">Kenapa pesanan catering saya belum sampai ? Apakah terjadi masalah ?</button>
<div class="panel" style="color: black;">
  <br><p>Anda bisa mengecek pesanan anda pada menu Lainnya, untuk melihat status pesanan dan upload bukti transfer.</p>
</div>
</div>
<br><hr>
	<div style="color: white;">
	  <h2 style="color: white;">Hubungi Kami</h2>
	  <h4 style="color: white;">Anda dapat mengisi pertanyaan Anda tentang Ayam Bakar Rina atau sesuatu dalam form di bawah ini.</h4>
	  <i><sub><span class="label label-danger">Penting</span> Kami akan membalas pertanyaan Anda namun jika pertanyaan yang diajukan mengandung sara kami akan melakukan blocking, jadi silakan isi formulir dengan benar. Terima Kasih !</sub></i><br><br>
	  <br>
	</div>
			<form class="form-horizontal" method="POST" action="config/tambahkomenweb.php">
				<div class="form-group">
				<label class="control-label col-sm-3" for="nama" style="text-align: left;"> Nama </label>
				<label class="control-label col-sm-1">:</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" name="nama" placeholder="Isi nama anda" required>
					</div>
				</div>
				<div class="form-group">
				<label class="control-label col-sm-3" for="email" style="text-align: left;"> Email </label>
				<label class="control-label col-sm-1">:</label>
					<div class="col-sm-6">
						<input type="email" class="form-control" name="email" placeholder="Isi email anda" required>
					</div>
				</div>		
				<div class="form-group">
				<label class="control-label col-sm-3" for="pertanyaan" style="text-align: left;"> Pertanyaan </label>
				<label class="control-label col-sm-1">:</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" name="pertanyaan" placeholder="Isi pertanyaan anda" required>
						<input type="hidden" class="form-control" name="tgl" value="<?php $tgl=date('d-M-Y:h:i:s'); echo $tgl; ?>">
						<br>
						<button type="submit" value="Kirim" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-ok"></span> Kirim</button>
					</div>
				</div>	
			</form>
		<br><hr>

	<div class="container">
		<table class="table table-striped table-responsive">
		 
		    <tbody align="center" style="color:black;">
		      <?php
		        include 'config/koneksi.php';

		        $query = mysqli_query($konek, "SELECT * FROM komenweb ORDER BY tgl") or die(mysqli_error());
		          if(mysqli_num_rows($query) == 0){
		            echo '<tr><td collspan="4" align="center">Tidak ada data!</td></tr>';
		          }
		          else{
		            while ($data = mysqli_fetch_array($query)) {
		              echo '<div class="media">
				    		<div class="media-left">
				      			<img src="img/us.png" class="media-object" style="width:45px">
				    		</div>';
		              echo '<div class="media-body">';
		              echo '<h4 class="media-heading" style="color:red;">'.$data[nama].' &nbsp;&nbsp;<small style="color:white;"><i>'.$data[tgl].'</i></small></h4>
		              		<p style="color:white;">'.$data[pertanyaan].'</p>';
		              echo '<div class="media">
				        	<div class="media-left">
				          		<img src="img/adm.png" class="media-object" style="width:45px">
				        	</div>';
		              echo '<div class="media-body">';
		              echo '<h4 class="media-heading" style="color:red;">Balasan</h4>
				          	<p style="color:white;">'.$data[balas].'.</p>';
		              echo '</div>';
		              echo '</div>';
		              echo '</div>';
		               $no++;
		            }
		          }
		      ?>
		    </tbody>
		  </table>
	</div><hr>

	<script>
	var acc = document.getElementsByClassName("accordion");
	var i;

	for (i = 0; i < acc.length; i++) {
	    acc[i].addEventListener("click", function() {
	        this.classList.toggle("active");
	        var panel = this.nextElementSibling;
	        if (panel.style.display === "block") {
	            panel.style.display = "none";
	        } else {
	            panel.style.display = "block";
	        }
	    });
	}
	</script>