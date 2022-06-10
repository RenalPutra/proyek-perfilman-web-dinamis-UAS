<?php 
session_start();
require(__DIR__.'/../vendor/autoload.php');
require_once(__DIR__.'/../config_film.php');
require_once(__DIR__.'/../model_twig.php');

$id = $_GET['id_op'];
$data = operator::find($id);

if (!isset($_SESSION['login'])) {
	$queryString =  $_SERVER['QUERY_STRING'];
	header('Location: ../form-login.php'. $queryString);
	exit();
}

echo $twig->render('detail_op.twig', ['data' => $data]);




?>