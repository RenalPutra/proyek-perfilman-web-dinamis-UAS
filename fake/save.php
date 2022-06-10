<p>Nama Film : <?= $_POST['namaFilm'] ?></p>
		<p>Produser : <?= $_POST['produser'] ?></p>
		<p>Jenis Tayangan : <?= $_POST['tayangan'] ?></p>
		<p>Genre : </p>
		<?php foreach ($_POST['list'] as $key => $value) :?>
			<p><?= $value ?></p>
		<?php endforeach; ?>
		<p>Tahun rilis<?= $_POST['Tahun_rilis'] ?></p>
		<p>Sinopsis : <?= $_POST['sinopsis']  ?></p>