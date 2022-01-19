<html>
	<head>
		<title> TIKET BUS MGI</title>
	</head>
	<body>
		<div align="center">
			<table border="2" width="86%" cellpadding="5" cellspacing="0">
						<font face="calibri" color="black"><h4>PT. MGI Sukabumi</h4></font>
						<font face="cambria" color="black"><h1>TIKET BUS MGI</h1></font>						
				<tr align="center">
					<td width="104"><a href="index.php">Home</a></td>
					<td width="149"><a href="tampil.php">Tampilkan Bokingan</a></td>
					<td width="137"><a href="pesan-tiket.php">Pesan Tiket</a></td>
					<td width="137"><a href="about.php">ABOUT</a></td>
					</tr>
				</table>
<?php
if(isset($_GET['id'])){
include('koneksi.php');
$id=$_GET['id'];
$cek=mysql_query("select id_tiket from tb_etiketbus where id_tiket='$id'") or die (mysql_error());
if(mysql_num_rows($cek)==0){
	
}else{
	$del=mysql_query("delete from tb_etiketbus where id_tiket='$id'");
	if($del){
		echo '<br><br>Berhasil Dihapus';
	}else{
		echo 'Gagal Menghapus';
	}
}
}else{
	
}
?>
</body>
</html>
