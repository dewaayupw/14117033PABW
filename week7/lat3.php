<!DOCTYPE html>
<html>
<head>
	<title>faktorial</title>
</head>
<body>
	<?php 
		function faktorial(&$a){
			$hasil=1;
			for ($i=$a; $i>0 ; $i--) { 
				$hasil = $hasil * $i;
			}
			return $hasil;
		}
		echo "input angka faktorial : 10
		<br><br>";
		$fak = 10;
		$jadi = faktorial($fak);
		echo "Hasilnya : $jadi";
	 ?>
</body>
</html>