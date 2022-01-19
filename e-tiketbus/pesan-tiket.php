<html>
	<head>
		<title> TIKET BUS MGI</title>
	</head>
	<body>
		<div align="center">
			<table border="2" width="78%" cellpadding="5" cellspacing="0">
						<font face="calibri" color="black"><h4>PT. MGI Sukabumi</h4></font>
						<font face="cambria" color="black"><h1>TIKET BUS MGI</h1>						
				<tr align="center">
					<td width="104"><a href="index.php">Home</a></td>
					<td width="149"><a href="tampil.php">Tampilkan Bokingan</a></td>
					<td width="137"><a href="pesan-tiket.php">Pesan Tiket</a></td>
					<td width="137"><a href="about.php">ABOUT</a></td>
					</tr>
				</table>
	<form method="post" action="pesan-proses.php" enctype="multipart/form-data">
		<table border="2" width="78%" cellpadding="10" bgcolor="FEECE9">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>
					<input type="text" name="nama" style="width:80%">
				</td>
			</tr>
			<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>
				<input type="radio" name="jenis_kelamin" value="L"> Laki-laki
				<input type="radio" name="jenis_kelamin" value="P"> Perempuan
			</td>									
			</tr>
			<tr>
				<td>E-Mail</td>
				<td>:</td>
				<td><font size="2"><i>*Isilah E-mail dengan benar dan masih aktif</i></font>
					<input type="text" name="email" style="width:80%">
				</td>
			</tr>
			<tr>
				<td>No Telepon</td>
				<td>:</td>
				<td><font size="2"><i>*Berikanlah nomor yang aktif</i></font><br>
					<input type="text" name="notelepon" style="width:40%">
				</td>
			</tr>
			<tr>
				<td>Kelas Bus</td>
				<td>:</td>
				<td>
					<select name="kelasbus">
						<option value="-">- Kelas Bus -</option>
						<option value="EKONOMI">Ekonomi</option>
						<option value="VIP">VIP</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Kota Asal</td>
				<td>:</td>
				<td>
					<select name="kotaasal">
						<option value="-">- Kota Asal -</option>
						<option value="Sukabumi">Sukabumi</option>
						<option value="Kp.Rambutan">Kp.Rambutan</option>
						<option value="Palabuhanratu">Palabuhanratu</option>
						
					</select>
				</td>
			</tr>
			<tr>
				<td>Kota Tujuan</td>
				<td>:</td>
				<td>
					<select name="kotatujuan">
						<option value="-">- Kota Tujuan -</option>
						<option value="Sukabumi">Sukabumi</option>
						<option value="Kp.Rambutan">Kp.Rambutan</option>
						<option value="Palabuhanratu">Palabuhanratu</option>
						
					</select>
				</td>
			</tr>
			<tr>
				<td>Tanggal Berangkat</td>
				<td>:</td>
				<td>
					<select name="tgl">
						<option value="-">Tanggal</option>
					<?php 
						for($i=1;$i<=31;$i++)
							{
								?>
								<option value="<?php echo"$i";?>"><?php echo"$i";?></option>
								<?php
							}
					?>
					</select>
					-
					<select name="bln" id="bln">
						  <?
						  if ($bln<>"")
							{
								if ($bln==01){
									$ket="Januari";
								}
								elseif($bln==02){
									$ket="Februari";
								}
								elseif($bln==03){
									$ket="Maret";
								}
								elseif($bln==04){
									$ket="April";
								}
								elseif($bln==05){
									$ket="Mei";
								}
								elseif($bln==06){
									$ket="Juni";
								}
								elseif($bln==07){
									$ket="Juli";
								}
								elseif($bln==08){
									$ket="Agustus";
								}
								elseif($bln==09){
									$ket="September";
								}
								elseif($bln==10){
									$ket="Oktober";
								}
								elseif($bln==11){
									$ket="Nopember";
								}
								elseif($bln==12){
									$ket="Desember";
								}
								else
								{
								}
							echo "<option value='$bln'>$ket</option>";
							}
						  ?>
						  <option>Bulan</option>
						  <option value="01">Januari</option>
						  <option value="02">Februari</option>
						  <option value="03">Maret</option>
						  <option value="04">April</option>
						  <option value="05">Mei</option>
						  <option value="06">Juni</option>
						  <option value="07">Juli</option>
						  <option value="08">Agustus</option>
						  <option value="09">September</option>
						  <option value="10">Oktober</option>
						  <option value="11">Nopember</option>
						  <option value="12">Desember</option>
					</select>
					-
					<select name="thn">
						<option value="-">Tahun</option>
					<?php 
						for($i=2016;$i<=2022;$i++)
							{
								?>
								<option value="<?php echo"$i";?>"><?php echo"$i";?></option>
								<?php
							}
					?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Jam Berangkat</td>
				<td>:</td>
				<td><font size="2"><i>*Format Waktu 13:00:00</i></font><br>
					<input type="text" name="jamberangkat" style="width:30%">
				</td>
			</tr>
		</table>
					<br>
					<input type="submit" name="tbpros" value="Pesan Sekarang">
					<input type="reset" name="tbreset" value="Reset Data">
	</form>
</div>
</font>
</body>
</html>