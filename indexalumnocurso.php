<?php
//usuario
//setcookie ("usuario", "codestudiante", time() + 84600);
//echo $_COOKIE["usuario"];
//setcookie ("usuario", "codestudiante", time() - 84600);
//echo $_COOKIE["usuario"];
//contraseña
//setcookie ("password", "contraseña", time() + 84600);
//echo $_COOKIE["password"];
//setcookie ("password", "contraseña", time() - 84600);
//echo $_COOKIE["password"];
require_once 'model/database.php';



$controller = 'curso';

// Todo esta lógica hara el papel de un FrontController
$controller = 'alumnocurso';

// Todo esta lógica hara el papel de un FrontController
if(!isset($_REQUEST['c']))
{
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    $controller->Index();    
}
else
{
    // Obtenemos el controlador que queremos cargar
    $controller = strtolower($_REQUEST['c']);
    $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';
    
    // Instanciamos el controlador
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    
    // Llama la accion
    call_user_func( array( $controller, $accion ) );
}
