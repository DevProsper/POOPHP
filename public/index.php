<?php 

require '../app/Autoloader.php';
App\Autoloader::register();

if (isset($_GET['p'])) {
	$p = $_GET['p'];
}else{
	$p = 'home';
}
//INITIALISATION DES OBJETS
$db = new App\Database('poo');

ob_start();
if ($p === 'home') {
	require '../pages/home.php';
}else if ($p === 'single') {
	require '../pages/single.php';
}else if ($p === 'categorie') {
	require '../pages/categorie.php';
}

$content = ob_get_clean();

require '../pages/templates/default.php';