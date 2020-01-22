<?php
//VAmos a tener la sesion iniciada
session_start();
require_once 'autoload.php';
require_once 'config/config.php';
require_once 'config/DataBase.php';
require_once 'helpers/Util.php';
require_once 'libs/Model.php';
require_once 'views/layout/header.php';
require_once 'views/layout/aside.php';
require_once 'views/layout/footer.php';




function showError(){
	$error = new ErrorController();
	$error->index();
}
if(isset($_GET['controller'])){
	$nombre_controlador = $_GET['controller'].'Controller';
	var_dump($nombre_controlador);
}
else if (!isset($_GET['controller']) && !isset($_GET['action'])) {
	$nombre_controlador = controller_default;
}
else{
	showError();
	echo "1";
	exit();
}

if(class_exists($nombre_controlador)){	
	$controlador = new $nombre_controlador();
	
	if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
		$action = $_GET['action'];
		$controlador->$action();
	}
	else if (!isset($_GET['controller']) && !isset($_GET['action'])) {
		//se cargara por defecto
		$action_default = action_default;
		$controlador->$action_default();
	}
	else{
		//aqui coloamos el controlador Error Controller
		showError();
		echo "2";
	}
}else{
	showError();
	echo "3";
}

?>