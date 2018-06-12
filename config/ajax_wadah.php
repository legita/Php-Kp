<?php

	include "koneksi.php";

	$jenis_wadah = $_GET["jenis_wadah"];

	$query = "SELECT * FROM wadah WHERE jenis_wadah = '$jenis_wadah' GROUP BY harga";
	$sql = mysqli_query($konek, $query)or die(mysqli_error($konek));

	while ($data = mysqli_fetch_array($sql)) { ?>
		<option value="<?php echo $data['harga']; ?>"><?php echo $data['harga']; ?> </option>
	<?php
	}
	?>
?>
