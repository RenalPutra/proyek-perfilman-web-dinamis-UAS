<?php
session_start();


require(__DIR__.'/../vendor/autoload.php');
require_once(__DIR__.'/../config_film.php');
require_once(__DIR__.'/../model_twig.php');

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
	$via_transaksi = $_POST['via_transaksi'];
	$no_seat = $_POST['no_seat'];
	$id_jadwal = $_POST['id_jadwal'];

	$trandb = new transaksi();
	$trandb->via_transaksi = $via_transaksi;
	$trandb->no_seat = $no_seat;
	$trandb->id_jadwal = $id_jadwal;

	$trandb->save();
	
}

echo $twig->render('proses_transaksi.twig');
?>

