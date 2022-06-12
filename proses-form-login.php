<?php
session_start();
require(__DIR__.'/vendor/autoload.php');
require_once(__DIR__.'/config_film.php');
require_once(__DIR__.'/model_film.php');
require_once(__DIR__.'/model_twig.php');
$conn = mysqli_connect("localhost", "root", "", "db_dinamis");


$username = $_POST['username'];
$password = $_POST['password'];
$sql_login = mysqli_query($conn, "SELECT * FROM info_log WHERE username = '$username' AND password = '$password'");


// if(info_log::where('username', $username)->where('password', $password)->first()){
//     echo $twig->render('test-guest.twig');
//     $_SESSION['username'] = $username;
//     $_SESSION['login'] = true;
// } else {
//     echo $twig->render('form-login.twig');
// }

if(mysqli_num_rows($sql_login) > 0){
    $data_login = mysqli_fetch_array($sql_login);
    $_SESSION['username'] = $username;
    $_SESSION['login'] = true;
    $_SESSION["status"] = $data_login['id_statusakun'];
    if ($_SESSION["status"] == "1") {
        $queryString =  $_SERVER['QUERY_STRING'];
	    header('Location: test.php'. $queryString);
    }
    elseif ($_SESSION["status"] == "2"){
        $queryString =  $_SERVER['QUERY_STRING'];
	    header('Location: guest/test-guest.php'. $queryString);
    }
    else {
        $queryString =  $_SERVER['QUERY_STRING'];
	    header('Location: form-login.php'. $queryString);
    }
} else {
    $queryString =  $_SERVER['QUERY_STRING'];
	    header('Location: form-login.php'. $queryString);
}

?>