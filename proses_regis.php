<?php
session_start();


require(__DIR__.'/vendor/autoload.php');
require_once(__DIR__.'/config_film.php');
require_once(__DIR__.'/model_twig.php');

if (!isset($_SESSION['login'])) {
	header("Location: form-login.php");
	exit();
}

use Rakit\Validation\Validator;


$validator = new Validator;


// make it
$validation = $validator->make($_POST, [

]);

// then validate
$validation->validate();

if ($validation->fails()) {
    // handling errors
    $errors = $validation->errors();
    echo "<pre>";
    print_r($errors->firstOfAll());
    echo "</pre>";
    exit;
} else {
	// validation success
	$namafilm = $_POST['namaFilm'];
	$produser = $_POST['produser'];
	$genre = $_POST['list'];
	// foreach ($genre as $index => $value) {
	// 	$isi = $value;
	// }
	// global $isi;
	$tahun_rilis = $_POST['Tahun_rilis'];
	$sinopsi = $_POST["sinopsis"];
	$tayangan = $_POST["tayangan"];

	$filmdb = new film_ku();
	$filmdb->namafilm = $namafilm;
	$filmdb->produser = $produser;
	$filmdb->genre = json_encode($genre);
	$filmdb->tayangan = $tayangan;
	$filmdb->tahun_rilis = $tahun_rilis;
	$filmdb->sinopsis = $sinopsi;

	$filmdb->save();
	
}
$genre = json_decode($filmdb->genre);
$hasil = implode(", ", $genre);
echo $twig->render('proses_regis.twig', ['filmdb' => $filmdb, 'genre' => $hasil]);
?>

