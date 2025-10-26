<?php
class controllerReservas
{
    public function verPaginaInicio($pagina)
    {
        include_once $pagina;
    }

    public function registerReserva($data)
    {
        unset($_SESSION['errores']);
        $this->validarCamposReserva($data);


        if (!empty($_SESSION['errores'])) {
            header('Location: ' . SITE_URL . 'index.php?action=getFormReservas');
            exit;
        }

        $reserva = new Reserva();
        $registroReserva = $reserva->registrarReserva($data);

        if ($registroReserva > 0) {
            // actualizar reservas del usuario en sesión
            $this->verMisReservas();
            header('Location: ' . SITE_URL . 'index.php');
            exit;
        } else {
            $_SESSION['errores'] = "Error al crear la reserva";
            header('Location: ' . SITE_URL . 'index.php?action=getFormReservas');
            exit;
        }
    }

    public function validarCamposReserva($data)
    {
        if (empty($data['room_id'])) {
            $_SESSION['errores']['room_id'] = "Debes seleccionar un tipo de habitacion";
        }

        if (empty($data['checkin'])) {
            $_SESSION['errores']['checkin'] = "La fecha de entrada es obligatoria";
        }
        if (empty($data['checkout'])) {
            $_SESSION['errores']['checkout'] = "La fecha de salida es obligatoria";
        }

        if (!empty($_SESSION['errores'])) {
            return;
        }

        $fechaActual = new DateTime();
        $checkin = new DateTime($data['checkin']);
        $checkout = new DateTime($data['checkout']);

        if ($checkin < $fechaActual) {
            $_SESSION['errores']['checkin'] = "La fecha de entrada no puede ser antes de hoy";
        }

        if ($checkout < $fechaActual) {
            $_SESSION['errores']['checkout'] = "La fecha de salida no puede ser antes de hoy";
        }

        if ($checkout <= $checkin) {
            $_SESSION['errores']['checkout'] = "La fecha de salida debe ser posterior a la de entrada";
        }
    }

    public function verMisReservas()
    {
        $userId = $_SESSION['id'];
        $reserva = new Reserva();
        $reservas = $reserva->obtenerReservas($userId);
        $_SESSION['reservas_usuario'] = $reservas;
        return $_SESSION['reservas_usuario'];
    }

    public function editarReserva($id) {
        $modelo = new Reserva();
        $reserva = $modelo->obtenerReservaPorId($id);
        require 'views/html/reservas/editarreservas.php';

    }

    public function actualizarReserva($data) {
        $modelo = new Reserva();
        $modelo->actualizarReserva($data);
        header("Location: index.php");
        exit();
    }

    public function eliminarReserva($id) {
        $modelo = new Reserva();
        $modelo->eliminarReserva($id);
        header("Location: index.php");
        exit();
    }

    public function generateReport() {
        $user_id = $_SESSION['id']; 
        $reserva = new Reserva();
        $reservas = $reserva->obtenerReservaPorId($user_id);
        $postData = [
            'reservas' => $reservas
        ];

        require_once 'views/reports/reportBase.php';
    }
}
?>