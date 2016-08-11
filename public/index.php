<?php 
use app\auth\Session;
define('ROOT', dirname(__DIR__));
require ROOT . '/app/App.php';
App::load();

Session::getInstance();
if(isset($_GET['pwd'])){
	$pwd = $_GET['pwd'];
} else {
	header('Location: http://localhost/quoma/public/index.php?pwd=home');
}
// Gestion du login 
use app\auth\Auth;
if(!Auth::isAuth()){
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