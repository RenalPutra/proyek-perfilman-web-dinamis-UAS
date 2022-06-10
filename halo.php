<?php
session_start();
require(__DIR__.'/vendor/autoload.php');
require_once(__DIR__.'/config_film.php');
require_once(__DIR__.'/model_twig.php');

if (!isset($_SESSION['login'])) {
	header("Location: form-login.php");
	exit();
}

echo $twig->render('halo.twig');

?>