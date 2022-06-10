<?php
session_start();

require(__DIR__.'/vendor/autoload.php');
require_once(__DIR__.'/config_film.php');
require_once(__DIR__.'/model_twig.php');
if (!isset($_SESSION['login'])) {
	header("Location: form-login.php");
	exit();
}

$id = $_GET['id'];
$data = film_ku::find($id);
$genre = json_decode($data->genre);
$hasil = implode(", ", $genre);
echo $twig->render('detail_film.twig', ['data' => $data, 'genre' => $hasil]);
?>


