<?php
session_start();
require(__DIR__.'/../vendor/autoload.php');
require_once(__DIR__.'/../config_film.php');
require_once(__DIR__.'/../model_twig.php');

$data = film_ku::all();
$op = operator::all();
$tr = teater::all();

if (!isset($_SESSION['login'])) {
	$queryString =  $_SERVER['QUERY_STRING'];
	header('Location: ../form-login.php'. $queryString);
	exit();
}

echo $twig->render('input_jadwal.twig', ['data' => $data, 'op' => $op, 'tr' => $tr]);

?>