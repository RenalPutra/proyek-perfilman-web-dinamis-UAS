<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		Program inputan X PHP
	</title>
</head>
<body>
	<form action="" method="post">
		<ul style="list-style:none;">
			<li>
				<label for="nama">Nama</label>
				<input type="text" name="nama" id="nama" value="<?= isset($_POST['nama']) ? $_POST['nama'] : "" ?>">
			</li>
			<li>
				<label for="nim">NIM</label>
				<input type="text" name="nim" id="nim" value="<?= isset($_POST['nim']) ? $_POST['nim'] : "" ?>">
			</li>
			<li>
				<label>Jenis Kelamin :</label>
				<?php $jenisKelamin = ["L" => "Laki-Laki", "P" => "Perempuan" ] ?>
				<?php foreach ($jenisKelamin as $key => $value) :?>
					<?php $option = @$_POST['jenis_kelamin'] == $key ? 'checked="checked"' : '' ?>
					<?php if (isset($_POST[$option])) {
						$option = '';
					} ?>
					<input type="radio" name="jenis_kelamin" value="<?= $value ?>"> <?= $value ?></option>

			<?php endforeach; ?>
			</li>
			<li>
				<label>Bahasa Pemrograman Favorit: </label>
				<?php $program = ["HTML", "PHP", "JAVA", "PYTHON", "JAVASCRIPT"]; ?>
				<?php foreach ($program as $isi) :?>
					<label style="display: flex;">
					<input type="checkbox" name="listku[]" value="<?= $isi ?>"><?= $isi ?>
					</label> 
				<?php endforeach; ?>
			</li>
			<li>
				<label>IPK	</label>
				<select name="IPK">	
					<?php $UIPK = ["1.00", "2.00", "3.00", "4.00"]; ?>
					<?php foreach ($UIPK as $nilai) :?>
						<option value="<?= $nilai ?>"><?= $nilai ?></option>

					<?php endforeach ; ?>
				</select>
			</li>
			<li>
				<label for="capek">keluhan</label>
				<textarea style="display: flex;" name="capek" id="capek"></textarea>
			</li>
			<li>
				<button type="submit" name="submit">submit</button>
			</li>
		</ul>
	</form>

	<?php if (isset($_POST['submit'])) :?>
		<h1>HASIL INPUTAN</h1>

		<ul style="list-style:none";>

			<li>Nama : <?= $_POST['nama'] ?></li>
			<li>nim : <?= $_POST['nim'] ?></li>
			<li>Jenis Kelamin : <?= $_POST['jenis_kelamin'] ?></li>
			<?php if (empty($_POST['listku'])) {
				echo "<li>anda belum memilih</li>";
			}else{
				echo "<li>Pilihan anda : </li>";
				foreach ($_POST['listku'] as $item) {
					echo "<li>$item", " ", "<br></li>";
				}
			} 
			?>
			<li>IPK : <?= $_POST['IPK']  ?></li>
			<li>Keluhan anda : <?= $_POST['capek'] ?></li>

		</ul>

	<?php endif ; ?>
</body>
</html>