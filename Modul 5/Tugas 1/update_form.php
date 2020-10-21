<?php
	$conn = mysqli_connect('localhost', 'root','','informatika');
	$nim = $_GET['NIM'];
	$cari = "select * from mahasiswa where NIM= '$nim'";
	$hasil_cari = mysqli_query($conn,$cari);
	$data = mysqli_fetch_array($hasil_cari);
	function active_radio_button($value,$input){
		$result = $value==$input? 'checked':'';
			return $result;
	}
			
	if($data > 0){
?>
		
<html>
	<head>
		<title>Data Mahasiswa</title>
	</head>
	<body>
		<center>
			<h3>Update Data Mahasiswa :</h3>
				<table border='0' width='30%'>
					<form method='POST' action = 'update.php'>
						<tr>
							<td width='25%'>NIM</td>
							<td width='5%'>:</td>
							<td width='65%'><input type='text' name='nim' size='10'value="<?php echo $data['NIM']?>"></td>
						</tr>
						<tr>
							<td width='25%'>Nama</td>
							<td width='5%'>:</td>
							<td width='65%'><input type='text' name='nama' size='30'value="<?=$data['Nama']?>"></td>
						</tr>
						<tr>
							<td width='25%'>Kelas</td>
							<td width='5%'>:</td>
							<td width='65%'><input type='radio' value='A' name='kelas'<?php echo active_radio_button('A', $data["Kelas"])?>>A
											<input type='radio' value='B' name='kelas'<?php echo active_radio_button('B', $data["Kelas"])?>>B
											<input type='radio' value='C' name='kelas'<?php echo active_radio_button('C', $data["Kelas"])?>>C</td>
						</tr>
						<tr>
							<td width='25%'>Alamat</td>
							<td width='5%'>:</td>
							<td width='65%'><input type='text' name='alamat' size='40'value="<?=$data['Alamat']?>"></td>
						</tr>
				</table>
						<input type='submit' value='Update Data' name='submit'>
					</form>
			<hr>
			<h3>Data Mahasiswa</h3>
			<table border='1' width='50%'>
				<tr>
					<td align='center' width='20%'><b>NIM</b></td>
					<td align='center' width='25%'><b>Nama</b></td>
					<td align='center' width='15%'><b>Kelas</b></td>
					<td align='center' width='20%'><b>Alamat</b></td>
					<td colspan= 2 align='center' width='20%'><b>Keterangan</b></td>
				</tr>
				<?php
					$cari = "select * from mahasiswa order by nim";
					$hasil_cari = mysqli_query($conn,$cari);
					while($data = mysqli_fetch_array($hasil_cari)){
						echo"
							<tr>
							<td>$data[NIM]</td>
							<td>$data[Nama]</td>
							<td>$data[Kelas]</td>
							<td>$data[Alamat]</td>
							<td><a href='update_form.php?NIM=$data[NIM]'>Ubah</a></td>
							<td><a href='delete_form.php?NIM=$data[NIM]'>Hapus</a></td>
						</tr>";
					}
				?>
			</table>
		</center>
<?php
	}
?>
	</body>
</html>