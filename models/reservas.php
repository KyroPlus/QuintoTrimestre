<?php
class Reserva
{
    public function registrarReserva($data)
    {
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

    public function obtenerReservas($userId)
    {
        $conexion = new Conexion();
        $conexion->conectar();

        $query = "SELECT 
                r.id, 
                r.checkin, 
                r.checkout, 
                r.special_request, 
                s.name AS estado, 
                tr.name AS tipo_habitacion
            FROM reservations r
            LEFT JOIN status_reservations s ON r.status_id = s.id
            LEFT JOIN rooms ro ON r.room_id = ro.id
            LEFT JOIN type_rooms tr ON ro.type_id = tr.id
            WHERE r.user_id = $userId";

        $conexion->query($query);
        $result = $conexion->getResult();

        $reservas = [];
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $reservas[] = $row;
            }
        }

        $conexion->desconectar();
        return $reservas;
    }

    public function obtenerReservaPorId($id)
    {
        $conexion = new Conexion();
        $conexion->conectar();

        $query = "SELECT * FROM reservations WHERE id = $id";
        $conexion->query($query);
        $result = $conexion->getResult();

        $reserva = $result ? $result->fetch_assoc() : null;
        $conexion->desconectar();
        return $reserva;
    }

    public function actualizarReserva($data)
    {
        $conexion = new Conexion();
        $conexion->conectar();

        $query = "UPDATE reservations SET 
                    checkin = '$data[checkin]',
                    checkout = '$data[checkout]',
                    special_request = '$data[special_request]',
                    status_id = '$data[estado_id]'
                  WHERE id = $data[id]";

        $conexion->query($query);
        $resp = $conexion->getFilasAfectadas();
        $conexion->desconectar();
        return $resp;
    }

    public function eliminarReserva($id)
    {
        $conexion = new Conexion();
        $conexion->conectar();

        $query = "UPDATE reservations SET status_id = 3 WHERE id = $id";
        $conexion->query($query);

        $resp = $conexion->getFilasAfectadas();
        $conexion->desconectar();
        return $resp;
    }



}
?>