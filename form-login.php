<?php
require(__DIR__.'/vendor/autoload.php');
require_once(__DIR__.'/config_film.php');
require_once(__DIR__.'/model_film.php');
require_once(__DIR__.'/model_twig.php');

echo $twig->render('form-login.twig');
?>