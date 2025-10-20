<?php
class Reserva {
    public function registrarReserva($data) {
        $conexion = new Conexion();
        $conexion->conectar();

        $userId = $_SESSION['id'];

        $query = "INSERT INTO reservations (
            user_id, room_id, date_reservation, checkin, checkout, special_request, status_id
        ) VALUES (
            $userId,
            '$data[room_id]',
            CURDATE(),
            '$data[checkin]',
            '$data[checkout]',
            '$data[special_request]',
            1
        )";

        $conexion->query($query);
        $resp = $conexion->getFilasAfectadas();        
        $conexion->desconectar();
        return $resp; 
    }

    public function obtenerReservas($userId) {
        $conexion = new Conexion();
        $conexion->conectar();

        $query = "SELECT r.id, r.checkin, r.checkout, r.special_request, s.name AS estado, tr.name AS tipo_habitacion
                FROM reservations r
                INNER JOIN status_reservations s ON r.status_id = s.id
                INNER JOIN rooms ro ON r.room_id = ro.id
                INNER JOIN type_rooms tr ON ro.type_id = tr.id
                WHERE r.user_id = $userId";

        $result = $conexion->query($query);

        $reservas = [];
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $reservas[] = $row;
            }
        }
        print_r($reservas);
        $conexion->desconectar();
        return $reservas;
    }
}
?>
