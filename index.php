<?php
session_start();
require_once 'controllers/controllersBase.php';
require_once 'controllers/controllerReservas.php';
require_once 'config/config.php';
require_once 'models/conexion.php';
require_once 'models/users.php';
require_once 'models/reservas.php';

$controllerBase = new ControllerBase();
$controllerReservas = new controllerReservas();

// enrutador
if (isset($_GET['action'])) {
    if ($_GET['action'] == "getFormRegisterUser") {
        $controllerBase->verPaginaInicio('views/html/auth/register.php');
    }
    if ($_GET['action'] == 'registerUser') {
        $controllerBase->registerUser($_POST);
    } else if ($_GET['action'] == 'getFormLogearUser') {
        $controllerBase->verPaginaInicio('views/html/auth/login.php');
    } else if ($_GET['action'] == 'logearUser') {
        $controllerBase->logearUser($_POST);
    } else if ($_GET['action'] == "logoutUser") {
        $controllerBase->logoutUser();
    } else if ($_GET['action'] == "getFormReservas") {
        $controllerReservas->verPaginaInicio('views/html/reservas/reservas.php');
    } else if ($_GET['action'] == "processReservation") {
        $controllerReservas->registerReserva($_POST);
    } else if ($_GET['action'] == "editarReserva") {
        $controllerReservas->editarReserva($_GET['id']);
    } else if ($_GET['action'] == "actualizarReserva") {
        $controllerReservas->actualizarReserva($_POST);
    } else if ($_GET['action'] == "eliminarReserva") {
        $controllerReservas->eliminarReserva($_POST['id']);
    }


} else {

    if (isset($_SESSION['id'])) {
        $controllerReservas->verMisReservas();
    }
    $controllerBase->verPaginaInicio('views/html/home.php');
}

?>