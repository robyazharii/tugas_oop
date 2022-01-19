<html>
	<head>
		<title> TIKET BUS SUKABUMI</title>
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
<?php
	include('koneksi.php');
	$id=$_GET['id'];
	$show=mysql_query("select * from tb_etiketbus where id_tiket='$id'");
		if(mysql_num_rows($show)==0){
		echo '<script>window.history.back()</script>';
		}
		else
		{
		$data=mysql_fetch_assoc($show);
		}
?>
<form action="edit-proses.php" method="POST">
<input type="hidden" name="id" value="<?php echo $id; ?>">
		<table border="1" width="78%" cellpadding="10" bgcolor="FEECE9">
			<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" value="<?php echo $data['nama']; ?>" style="width:80%" required> </td>
			</tr>
			<tr>
			<td>Jenis Kelamin </td>
			<td>:</td>
				<td>
					<select name="jenis_kelamin" required>
						<option value="">- Pilih Jenis Kelamin -</option>
						<option value="L" <?php if($data['jenis_kelamin']=='L'){echo 'selected';}?>>Laki-Laki</option>
						<option value="P" <?php if($data['jenis_kelamin']=='P'){echo 'selected';}?>>Perempuan</option>
					</select></td>
			</tr>
			<tr>
			<td>E-Mail</td>
			<td>:</td>
			<td><input type="text" name="email" value="<?php echo $data['email']; ?>" style="width:80%" required> </td>
			</tr>
			<tr>
			<td>No Telepon</td>
			<td>:</td>
			<td><input type="text" name="notelepon" value="<?php echo $data['notelepon']; ?>" style="width:40%" required> </td>
			</tr>
			<tr>
			<td>Kelas Bus</td>
			<td>:</td>
				<td>
					<select name="kelasbus" required>
						<option value="">- Kelas Bus -</option>
						<option value="EKONOMI" <?php if($data['kelasbus']=='EKONOMI'){echo 'selected';}?>>EKONOMI</option>
						<option value="VIP" <?php if($data['kelasbus']=='VIP'){echo 'selected';}?>>VIP</option>
					</select></td>
			</tr>
			<tr>
			<td>Kota Asal</td>
			<td>:</td>
				<td>
					<select name="kotaasal" required>
							<option value="">- Kota Asal -</option>
						<option value="Sukabumi" <?php if($data['kotaasal']=='Sukabumi'){echo 'selected';}?>>Sukabumi</option>
						<option value="Kp.Rambutan" <?php if($data['kotaasal']=='Kp.Rambutan'){echo 'selected';}?>>Kp.Rambutan</option>
						<option value="Palabuhanratu" <?php if($data['kotaasal']=='Palabuhanratu'){echo 'selected';}?>>Palabuhanratu</option>
					</select></td>
			</tr>
			<tr>
			<td>Kota Tujuan</td>
			<td>:</td>
				<td>
					<select name="kotatujuan" required>
						<option value="">- Kota Tujuan -</option>
						<option value="Sukabumi" <?php if($data['kotatujuan']=='Sukabumi'){echo 'selected';}?>>Sukabumi</option>
						<option value="Kp.Rambutan" <?php if($data['kotatujuan']=='Kp.Rambutan'){echo 'selected';}?>>Kp.Rambutan</option>
						<option value="Palabuhanratu" <?php if($data['kotatujuan']=='Palabuhanratu'){echo 'selected';}?>>Palabuhanratu</option>
						
				</select></td>
			</tr>
			<tr>
			<td>Tanggal Berangkat</td>
			<td>:</td>
				<td><input type="text" name="tglberangkat" value="<?php echo $data['tglberangkat']; ?>" required> </td>
			</tr>
			<tr>
			<td>Jam Berangkat</td>
			<td>:</td>
			<td><font size="2"><i>*Format Waktu 13:00:00</i></font><br>
				<input type="text" name="jamberangkat" value="<?php echo $data['jamberangkat']; ?>" required> </td>
			</tr>
	</table>
<br>
<td><input type="submit" name="simpan" value="SIMPAN"></td>
</form>
</font>	
</body>
</html>