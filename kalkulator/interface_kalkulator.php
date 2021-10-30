<htmL>
<head>
<title>APP Kalkulator | OOP</title>
<!-- Panggil script CSS -->
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="kalkulator">
		<h2 class="judul">ALAT NGITUNG</h2>
		<a class="brand">versi 1.0</a>
		<form method="post" action="interface_kalkulator.php">
			<input type="number" name="bil1" class="bil" placeholder="Input bilangan 1">
			<input type="number" name="bil2" class="bil" placeholder="Input bilangan 2">
			<select class="opt" name="operasi">
				<option value="tambah">+</option>
				<option value="kurang">-</option>
				<option value="kali">*</option>
				<option value="bagi">/</option>
			</select>
			<input type="submit" name="hitung" value="Hitung" class="tombol">
			<input type="reset" value="Reset" class="tombol">
		</form>
		<?php
		// membuat percabangan IF ELSE
		if(isset($_POST['hitung'])){
			// include class operasiBilangan
			include "script_proses.php";
			$x = $_POST['bil1'];
			$y = $_POST['bil2'];
			$operasi = $_POST['operasi'];
			// buat object class operasi bilangan
			$hasil = new operasiBilangan($x, $y);
			// percabangan SWITCH
			switch ($operasi) {
				case 'tambah':
					// panggil fungsi jumlahkan
				echo "<input type='text' value=".$hasil->jumlahkan()." class='bil'";
				break;

				// panggil fungsi kurangkan
				case 'kurang':
				echo "<input type='text' value=".$hasil->kurangkan()." class='bil'";
				break;
				
				// panggil fungsi Kalikan
				case 'kali';
				echo "<input type='text' value=".$hasil->kalikan()." class='bil'";
				break;

				// panggil fungsi Bagikan
				case 'bagi';
				echo "<input type='text' value=".$hasil->bagikan()." class='bil'";
				break;
				default:
					// code...
					break;
			}
		} else {
			echo "<input type='text' value='0' class='bil'> ";
		}
		?>
	</div>

</body>
</html>