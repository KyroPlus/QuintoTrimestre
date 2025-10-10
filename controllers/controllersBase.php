<?php
    class ControllerBase{

        public function verPaginaInicio($pagina){
            include_once $pagina;
        }


        public function registerUser($data){
            unset($_SESSION['errores']);
            $this->validarCampos($data);
            
            if (!empty($_SESSION['errores'])) {
            header('Location: '.SITE_URL.'index.php?action=getFormRegisterUser');
            exit;
            }

            $user = new User();            
            // validar email que no exista            
            $usuarioExiste = $user->validarEmail($data['email']);
            if($usuarioExiste > 0){
                $_SESSION['errores'] = ['email' => "el usuario ya existe"];                
                header('Location: '.SITE_URL.'index.php?action=getFormRegisterUser');
                exit;
            }


            $data['contrasena'] = password_hash($data['contrasena'], PASSWORD_DEFAULT);


            // registrar usuario


            $registroUsuario = $user->registrarUsuario($data);
            if($registroUsuario > 0){
                $pass = password_hash($data['contrasena'], PASSWORD_DEFAULT);
                $data['contrasena'] = $pass;
                $_SESSION['success'] = "usuario creado exitosamente!";
                header('Location: '.SITE_URL.'index.php?action=getFormLogearUser');
            }
            else{
                header('Location: '.SITE_URL.'index.php?action=getFormRegisterUser');
            }

        }

        public function validarCampos($data){
            if(empty($data['num_doc'])) {
                $_SESSION['errores'] = ['num_doc' => "El numero de documento es obligatorio"];
            } 
            elseif(!is_numeric($data['num_doc'])) {
                $_SESSION['errores'] = ['num_doc'=> "El numero de documento debe ser con numeros"];

            }

            if(empty($data['nombre'])){
                $_SESSION['errores'] = ['nombre' => "El nombre es obligatorio"];

            }
            if(empty($data['apellido'])){
               $_SESSION['errores'] = ['apellido' => "El apellido es obligatorio"];

            }
            if(empty($data['telefono'])){
               $_SESSION['errores'] = ['telefono' => "El telefono es obligatorio"];

            }          
            if(empty($data['email'])){
                $_SESSION['errores'] = ['email' =>"El correo es obligatorio"];

            }
            if(empty($data['contrasena'])){
                $_SESSION['errores'] = ['contrasena' => "La contraseña es obligatoria" ];
            }
            elseif(strlen($data['contrasena']) < 8){
                $_SESSION['errores'][] = "La contraseña debe tener al menos 8 caracteres";
            }
            elseif(!preg_match('/[^a-zA-Z0-9]/', $data['contrasena'])){
            $_SESSION['errores'][] = "La contraseña debe incluir al menos un caracter especial
            [^a-zA-Z0-9]";
            }
            else{

            }

        }

        public function logearUser($data){
            
            if (empty($data['email']) || empty($data['contrasena'])) {
                $_SESSION['errores'] = ['login' => "Ambos campos son obligatorios"];
                header('Location: '.SITE_URL.'index.php?action=getFormLogearUser');
                exit;
            }

            $user = new User();
            $usuarioExiste2 = $user->logearUsuario($data['email']);
            if($usuarioExiste2){
                if (password_verify($data['contrasena'], $usuarioExiste2["password"])) {
                    unset($_SESSION['errores']);
                    unset($_SESSION['succes']);
                    $_SESSION['correo'] = $usuarioExiste2["email"];
                    $_SESSION['nombre'] = $usuarioExiste2["name"];
                    $_SESSION['id'] = $usuarioExiste2["id"];

                    header('Location: ' . SITE_URL . 'index.php');
                    exit;
                
                }
                 else {
                    $_SESSION['errores'] = ['login' => "Contraseña incorrecta"];
                    header('Location: ' . SITE_URL . 'index.php?action=getFormLogearUser');
                    exit;
                }
            } 
            else {
                $_SESSION['errores'] = ['login' => "El usuario no existe"];
                header('Location: ' . SITE_URL . 'index.php?action=getFormLogearUser');
                exit;
            }

        }

        public function logoutUser(){
            session_unset();
            session_destroy();
            header('Location: ' . SITE_URL . 'index.php');
            exit;




        }

        
    }


?>