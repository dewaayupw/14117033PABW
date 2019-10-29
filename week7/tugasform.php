<!DOCTYPE html>
<html>
<head>
	<title>Tugas 1</title>
</head>
<body>
	<form method="post" action="hasil.php" enctype="multipart/form-data">
		<label>Nama : </label><br>
		<input type="text" name="nama" required="required"><br><br>
		<label>Alamat : </label><br>
		<input type="text" name="alamat"><br><br>
		<label>Jenis Kelamin : </label><br>
		<input type="radio" name="jk" value="female">Perempuan<br>
		<input type="radio" name="jk" value="male">Laki-Laki<br><br>
		<label>Golongan Darah : </label><br>
		<select name="gd">
		  <option value="O">O</option>
		  <option value="A">A</option>
		  <option value="B">B</option>
		  <option value="AB">AB</option>
		</select>
		<br><br>
		<label>Hoby : </label><br>
		<input type="checkbox" name="hobi1" value="Berenang"> menyanyi<br>
		<input type="checkbox" name="hobi2" value="Bulutangkis"> melukis<br>
		<input type="checkbox" name="hobi3" value="Futsal"> membaca<br><br>
		<label>Keterangan : </label><br>
		<textarea name="keterangan" rows="7" cols="40"> </textarea>
		<br><br><br>
		<input type="submit" value="send" name="process">
	</form>
</body>
</html>