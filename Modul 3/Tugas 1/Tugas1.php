<html>
	<head>
		<title> Tugas 1 </title>
	</head>
	<body>
		<form method="POST" action="Tugas1.php">
			<p> Nilai A adalah <input type="text" name="A" size="10"> </p>
			<p> Nilai B adalah <input type="text" name="B" size="10"> </p>
			<p> <input type="submit" value="Jumlahkan" name="submit"> </p>
		</form>

		<?php
			error_reporting(E_ALL^E_NOTICE);
			$A = $_POST["A"];
			$B = $_POST["B"];
			$submit = $_POST["submit"];

			if($submit) {
				$X = $A+$B;

				echo "Nilai A adalah $A <br>";
				echo "Nilai B adalah $B <br>";
				echo "Jadi nilai A ditambah nilai B adalah $X.";
			}
		?>
	</body>
</html>