<?php
require(__DIR__.'/vendor/autoload.php');
require_once(__DIR__.'/config_film.php');
require_once(__DIR__.'/model_twig.php');

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
	$username = $_POST["username"];
    $password = $_POST["password"];
    $status = $_POST["id_statusakun"];

    $logindb = new info_log();
    $logindb -> username = $username;
    $logindb -> password = $password;
    $logindb -> id_statusakun = $status;

    $logindb -> save();
	
}
echo $twig->render('form-login.twig');
?>

