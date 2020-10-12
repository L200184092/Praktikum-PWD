<html>
	<head>
		<title> Tugas 2 </title>
	</head>
	<body>
		<form method="POST" action="Tugas2.php">
			<p> Masukkan suatu angka : <input type="text" name="angka" size="10"> </p>
			<p> <input type="submit" value="Submit" name="submit"> </p>
		</form>

		<?php
			error_reporting(E_ALL^E_NOTICE);
			$angka = $_POST["angka"];
			$submit = $_POST["submit"];

			if($submit) {
				if($angka % 2 == "0") {
					echo "Angka $angka adalah genap";
				}
				if($angka % 2 == "1") {
					echo "Angka $angka adalah ganjil";
				}
			}
		?>
	</body>
</html>