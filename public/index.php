<?php 
define('ROOT', dirname(__DIR__));
require ROOT . '/app/App.php';
App::load();

/*
Test page login

if(!isset($_SESSION['auth'])){
	$pwd = 'login';
}*/

if(isset($_GET['pwd'])){
	$pwd = $_GET['pwd'];
} else {
	header('Location: http://localhost/quoma/public/index.php?pwd=home');
}

if(!isset($_SESSION['auth'])){
	$pwd = 'login';
}

ob_start();
if ($pwd === 'home'){
	require ROOT . '/page/home.php';
} elseif ($pwd === 'customer'){
	require ROOT . '/page/customer/Customer.php';
} elseif ($pwd === 'quotation'){
	require ROOT . '/page/quotation/QuotationCreation.php';
} elseif ($pwd === 'login'){
	require ROOT . '/page/login.php';
}

$content = ob_get_clean();
require ROOT . '/page/template/default.php';

 ?>