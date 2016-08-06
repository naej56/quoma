<?php 
define('ROOT', dirname(__DIR__));
require ROOT . '/app/App.php';
App::load();

if(isset($_GET['pwd'])){
	$pwd = $_GET['pwd'];
}

ob_start();
if ($pwd === 'home'){
	require ROOT . '/page/home.php';
} elseif ($pwd === 'customer'){
	require ROOT . '/page/customer/Customer.php';
} elseif ($pwd === 'quotation'){
	require ROOT . '/page/quotation/QuotationCreation.php';
}


$content = ob_get_clean();
require ROOT . '/page/template/default.php';

 ?>