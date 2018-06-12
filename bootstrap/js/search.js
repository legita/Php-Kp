(function($) {
	// fungsi dijalankan setelah seluruh dokumen ditampilkan
	$(document).ready(function(e) {

		// deklarasikan variabel
		var kd_menu = 0;
		var main = "data_produk.php";

		// tampilkan data menu dari berkas data_menu.php
		// ke dalam <div id="data-menu"></div>
		$("#data-produk").load(main);

		
		// ketika inputbox pencarian diisi
		$('input:text[name=search]').on('input',function(e){
			var v_cari = $('input:text[name=search]').val();
			
			if(v_cari!="") {
				$.post(main, {cari: v_cari} ,function(data) {
					// tampilkan data menu yang sudah di perbaharui
					// ke dalam <div id="data-menu"></div>
					$("#data-produk").html(data).show();
				});
			} else {
				// tampilkan data menu dari berkas data_menu.php
				// ke dalam <div id="data-menu"></div>
				$("#data-produk").load(main);
			}
		});
		// ketika tombol halaman ditekan
		$('.halaman').live("click", function(event){
			// mengambil nilai dari inputbox
			kd_hal = this.id;

			$.post(main, {halaman: kd_hal} ,function(data) {
				// tampilkan data mahasiswa yang sudah di perbaharui
				// ke dalam <div id="data-menu"></div>
				$("#data-produk").html(data).show();
			});
		});
		
	});
}) (jQuery);
