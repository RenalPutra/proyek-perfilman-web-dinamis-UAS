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
$id = $_GET['id_teater'];
$data = teater::destroy($id);

echo $twig->render('hapus_tr.twig');

?>


