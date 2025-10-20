<?php
class controllerReservas {
    public function verPaginaInicio($pagina){
        include_once $pagina;
    }

    public function registerReserva($data){
        unset($_SESSION['errores']);
        $this->validarCamposReserva($data);
        $this->verMisReservas();


        if (!empty($_SESSION['errores'])) {
            header('Location: ' . SITE_URL . 'index.php?action=getFormReservas');
            exit;
        }

        $reserva = new Reserva();  
        $registroReserva = $reserva->registrarReserva($data);

        if($registroReserva > 0){
            header('Location: '.SITE_URL.'index.php');
            exit;
        } else {
            $_SESSION['errores'] = "Error al crear la reserva";
            header('Location: '.SITE_URL.'index.php?action=getFormReservas');
            exit;
        }
    }

    public function validarCamposReserva($data){
        if(empty($data['room_id'])){
            $_SESSION['errores']['room_id'] = "Debes seleccionar un tipo de habitacion";
        }

        if(empty($data['checkin'])){
            $_SESSION['errores']['checkin'] = "La fecha de entrada es obligatoria";
        }
        if(empty($data['checkout'])){
            $_SESSION['errores']['checkout'] = "La fecha de salida es obligatoria";
        }

        if(!empty($_SESSION['errores'])){
            return;
        }

        $fechaActual = new DateTime();
        $checkin = new DateTime($data['checkin']);
        $checkout = new DateTime($data['checkout']);

        if($checkin < $fechaActual){
            $_SESSION['errores']['checkin'] = "La fecha de entrada no puede ser antes de hoy";
        }

        if($checkout < $fechaActual){
            $_SESSION['errores']['checkout'] = "La fecha de salida no puede ser antes de hoy";
        }

        if($checkout <= $checkin){
            $_SESSION['errores']['checkout'] = "La fecha de salida debe ser posterior a la de entrada";
        }
    }

    public function verMisReservas() {
        $userId = $_SESSION['id'];
        $reserva = new Reserva();
        $reservas = $reserva->obtenerReservas($userId);
        $_SESSION['reservas_usuario'] = $reservas;
        header('Location: '.SITE_URL.'index.php');
        return($_SESSION['reservas_usuario']);
    }
}
?>
