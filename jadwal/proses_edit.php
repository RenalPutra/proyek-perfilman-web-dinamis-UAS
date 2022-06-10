<?php
session_start();


require(__DIR__.'/../vendor/autoload.php');
require_once(__DIR__.'/../config_film.php');
require_once(__DIR__.'/../model_twig.php');

$id = $_GET['id'];

if (!isset($_SESSION['login'])) {
	$queryString =  $_SERVER['QUERY_STRING'];
	header('Location: ../form-login.php'. $queryString);
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
	$tanggal_tayang = $_POST['tanggal_tayang'];
	$jam_tayang = $_POST['jam_tayang'];
    $id_film = $_POST['id'];
	$id_op = $_POST['id_op'];
	$id_teater = $_POST['id_teater'];

	$jadwaldb = jadwal::find($id);
	$jadwaldb->tanggal_tayang = $tanggal_tayang;
	$jadwaldb->jam_tayang = $jam_tayang;
    $jadwaldb->id = $id_film;
	$jadwaldb->id_op = $id_op;
	$jadwaldb->id_teater = $id_teater;

	$jadwaldb->save();
	
}

echo $twig->render('proses_edit_jadwal.twig', ['jadwaldb' => $jadwaldb]);
?>

