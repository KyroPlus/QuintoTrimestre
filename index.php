<?php
session_start();
require_once 'controllers/controllersBase.php';
require_once 'config/config.php';
require_once 'models/conexion.php';
require_once 'models/users.php';

$controllerBase = new ControllerBase();


//enrutador
if(isset($_GET['action'])){
    if($_GET['action'] == "getFormRegisterUser"){
        $controllerBase->verPaginaInicio('views/html/auth/register.php');
    }
    if($_GET['action'] == 'registerUser'){
        $controllerBase->registerUser($_POST);
    }
    else if($_GET['action'] == 'getFormLogearUser'){
        $controllerBase->verPaginaInicio('views/html/auth/login.php');
    } 
    else if ($_GET['action'] == 'logearUser') {
        $controllerBase->logearUser($_POST);
    }
}
else{
    
    $controllerBase->verPaginaInicio('views/html/home.php');
}



?>