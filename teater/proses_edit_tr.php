<?php
session_start();


require(__DIR__.'/../vendor/autoload.php');
require_once(__DIR__.'/../config_film.php');
require_once(__DIR__.'/../model_twig.php');

$id = $_GET['id_teater'];

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
	$nama_tr = $_POST['nama_teater'];
	$sound_tr = $_POST['sound_teater'];
	$tingkat_tr = $_POST['tingkat_teater'];

	$trdb = teater::find($id);
	$trdb->nama_teater = $nama_tr;
	$trdb->sound_teater = $sound_tr;
	$trdb->tingkat_teater = $tingkat_tr;
	

	$trdb->save();
	
}

echo $twig->render('proses_edit_tr.twig', ['trdb' => $trdb]);
?>

