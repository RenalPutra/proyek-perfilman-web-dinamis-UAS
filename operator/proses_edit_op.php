<?php
session_start();


require(__DIR__.'/../vendor/autoload.php');
require_once(__DIR__.'/../config_film.php');
require_once(__DIR__.'/../model_twig.php');

$id = $_GET['id_op'];

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
	$nama_op = $_POST['nama_op'];
	$tugas_op = $_POST['tugas_op'];

	$opdb = operator::find($id);
	$opdb->nama_op = $nama_op;
	$opdb->tugas_op = $tugas_op;

	$opdb->save();
	
}

echo $twig->render('proses_edit_op.twig', ['opdb' => $opdb]);
?>

