<!DOCTYPE html>
<html>
<head>
	<title>tugas-migguan</title>
</head>
<body>
	<form method="post" action="TM_7hasil.php">
		<label>Nama :</label>
		<input type="text" name="nama"><br>
		<label>Alamat :</label>
		<input type="text" name="alamat"><br>
		<label>Jenis Kelamin</label>
		<input type="radio" name="jk" value="Laki-laki" checked>Laki-Laki
		<input type="radio" name="jk" value="Perempuan">Perempuan
		<br><label>Golongan Darah</label>
		<select name="gol">
			<option value=""></option>
			<option value="A">A</option>
			<option value="B">B</option>
			<option value="AB">AB</option>
			<option value="O">O</option>
		</select> <br>
		<label>Hoby :</label><br>
		<input type="checkbox" name="hoby[]" value="Belajar">Belajar
		<input type="checkbox" name="hoby[]" value="Musik">Musik
		<input type="checkbox" name="hoby[]" value="Olahraga">Olahraga <br>
		<input type="checkbox" name="hoby[]" value="Mancing">Mancing
		<input type="checkbox" name="hoby[]" value="Game">Game
		<input type="checkbox" name="hoby[]" value="Memasak">Memasak
		<br><label>Keterangan :</label><br>
		<textarea name="ket"></textarea><br>
		<input type="submit" name="ok" value="OK">
	</form>
</body>
</html>