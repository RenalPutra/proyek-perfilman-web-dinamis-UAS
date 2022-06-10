<?php
session_start();
require(__DIR__.'/../vendor/autoload.php');
require_once(__DIR__.'/../config_film.php');
require_once(__DIR__.'/../model_twig.php');

$id = $_GET['id'];
$data = jadwal::find($id);

$all = film_ku::all();
$op = operator::all();

if (!isset($_SESSION['login'])) {
	$queryString =  $_SERVER['QUERY_STRING'];
	header('Location: ../form-login.php'. $queryString);
	exit();
}

echo $twig->render('edit_jadwal.twig', ['data' => $data, 'all' => $all, 'op' => $op]);

?>