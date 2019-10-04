<?php

class securityController extends Security {

public function login(){

        $user = parent::validateLogin($_POST['email']);

        if(!is_object($user)) die('Ingreso incorrecto.');
            
            if(password_verify($_POST['password'], $user->password)){  
                $rol = $user->rol_id;
                switch($rol){
                case 1:
                    header('location: ?controller=administrador');
                break;

                case 2:
                header('location: ?controller=user');
                break;
                }
            } else {
                echo 'contraseñas incorrectas';
            }
           
 
}
  
public function logout(){
        unset($_SESSION['user']);
        session_destry();
        header('location:?controller=index');
    }

}

?>