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
				<br>
<table align="center" cellpadding="3" bgcolor="FEECE9" cellspacing="1" border="1">
<tr bgcolor="B762C1">
<th> No.</th>
<th> ID Tiket</th>
<th> Nama </th>
<th> L/P</th>
<th> E-Mail </th>
<th> No Telepon</th>
<th> Kelas Bus </th>
<th> Kota Asal</th>
<th> Kota Tujuan </th>
<th> Tgl Berangkat</th>
<th> Jam Berangkat</th>
<th> Ongkos</th>
<th> Opsi</th>
</tr>
<?php
include ('koneksi.php');
$query=mysql_query ("SELECT*FROM tb_etiketbus ORDER BY id_tiket ASC") or die (mysql_error());
if(mysql_num_rows($query)==0){
echo '<tr><td colspan="4"> Tidak Ada Data !</td></tr>';
}else{
$no=1;
while($data=mysql_fetch_assoc($query)){
echo '<tr>';
echo '<td>'. $no.'</td>';
echo '<td>DMN000' . $data['id_tiket'] .'</td>';
echo '<td>'. $data['nama'].'</td>';
echo '<td>'. $data['jenis_kelamin'].'</td>';
echo '<td>'. $data['email'].'</td>';
echo '<td>'. $data['notelepon'].'</td>';
echo '<td>'. $data['kelasbus'].'</td>';
echo '<td>'. $data['kotaasal'].'</td>';
echo '<td>'. $data['kotatujuan'].'</td>';
echo '<td>'. $data['tglberangkat'].'</td>';
echo '<td>'."at ".($data['jamberangkat']).'</td>';
echo '<td>'."Rp. ".number_format ($data['ongkos']).'</td>';
echo '<td><a href="edit.php?id='.$data['id_tiket'].'"> Edit </a>|<a href="hapus.php?id='.$data['id_tiket'].'" onclick="return confirm(\'YAKIN INGIN MENGHAPUS?\')"> Hapus </a></td>';
echo '</tr>';
$no++;

}
}
?>
</font>
</body>
</html>