<html>
	<head>
		<title> TIKET BUS SUKABUMI</title>
	</head>
	<body>
		<div align="center">
			<table border="2" width="78%" cellpadding="5" cellspacing="0">
						<font face="calibri" color="black"><h4>PT. MGI Sukabumi</h4></font>
						<font face="cambria" color="black"><h1>TIKET BUS SUKABUMI</h1></font>						
				<tr align="center">
					<td width="104"><a href="index.php">Home</a></td>
					<td width="149"><a href="tampil.php">Tampilkan Bokingan</a></td>
					<td width="137"><a href="pesan-tiket.php">Pesan Tiket</a></td>
					<td width="137"><a href="about.php">ABOUT</a></td>
					</tr>
				</table>
<?php
if(isset($_POST['simpan'])){
	include('koneksi.php');
	$id=$_POST['id'];
	$nama=$_POST['nama'];
	$jenis_kelamin=$_POST['jenis_kelamin'];
	$email=$_POST['email'];
	$notelepon=$_POST['notelepon'];
	$kelasbus=$_POST['kelasbus'];
	$kotaasal=$_POST['kotaasal'];
	$kotatujuan=$_POST['kotatujuan'];
	$tglberangkat=$_POST['tglberangkat'];
	$jamberangkat=$_POST['jamberangkat'];
	$ongkos=0;
	if($kotaasal =="Sukabumi" && $kotatujuan =="Kp.Rambutan" && $kelasbus =="EKONOMI"){  
		$ongkos = 80000;  
		}
	   if($kotaasal =="Sukabumi" && $kotatujuan =="Kp.Rambutan" && $kelasbus =="VIP"){  
		$ongkos = 80000;  
		}  		 
	   else if($kotaasal == "Sukabumi" && $kotatujuan =="Palabuhanratu" && $kelasbus =="EKONOMI"){  
		$ongkos = 45000;  
		}
		else if($kotaasal == "Sukabumi" && $kotatujuan =="Palabuhanratu" && $kelasbus =="VIP"){  
		$ongkos = 45000;  
		}
		else if($kotaasal == "Palabuhanratu" && $kotatujuan =="Sukabumi" && $kelasbus =="EKONOMI"){  
		$ongkos = 45000;  
		}
	   else if($kotaasal == "Palabuhanratu" && $kotatujuan =="Sukabumi" && $kelasbus =="VIP"){  
		$ongkos = 45000;  
		}		 	
	$update=mysql_query("UPDATE tb_etiketbus SET nama='$nama', jenis_kelamin='$jenis_kelamin', email='$email', notelepon='$notelepon', kelasbus='$kelasbus', kotaasal='$kotaasal', kotatujuan='$kotatujuan', tglberangkat='$tglberangkat', jamberangkat='$jamberangkat', ongkos='$ongkos' WHERE id_tiket='$id'") or die (mysql_error());
	if($update){
		echo '<br><br><br>Berhasil Disimpan';
	}
	else
	{
		echo 'Gagal Disimpan';
		echo '<a href="edit.php?id='.$id.'">Coba Lagi</a>';
	}
	}
	else
	{
	echo'<script>window.history.back()</script>';
	}
?>
</body>
</html>