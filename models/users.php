<?php

class User {
    public function validarEmail($email){
        $conexion = new Conexion();
        $conexion->conectar();
        $query = "SELECT * FROM users WHERE email = '$email'";
        $conexion->query($query);
        $resp = $conexion->getResult();        
        $conexion->desconectar();
        if($resp->num_rows > 0){
            return 1;
        }
        return 0;        
    }

    public function registrarUsuario($data){
        $conexion = new Conexion();
        $conexion->conectar();
        $query = "INSERT INTO users (name, lastname, password, phone, email, roles_id, document_number) VALUES ('$data[nombre]', '$data[apellido]', '$data[contrasena]', '$data[telefono]', '$data[email]', 2, '$data[num_doc]')";
        $conexion->query($query);
        $resp = $conexion->getFilasAfectadas();        
        $conexion->desconectar();
        return $resp; 
    }


    public function logearUsuario($email){
        $conexion = new Conexion();
        $conexion->conectar();
        $query = "SELECT * FROM users WHERE email = '$email'";
        $conexion->query($query);
        $resp = $conexion->getResult();        
        $conexion->desconectar();
        
        if ($resp && $resp->num_rows > 0) {
        return $resp->fetch_assoc(); 
        }
        return null;
    }
}


