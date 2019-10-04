<?php

class Security extends Database{

    public function validateLogin($email){
        try{
            $result = parent::connect()->prepare("SELECT * FROM usuarios WHERE correo = ?");
            $result->bindParam(1, $email, PDO::PARAM_STR);
            $result->execute();
            return $result->fetch();
        }catch (Exception $e){
            die($e->getMessage());
        }
    }

    public static function verifyUser(){
        if(! isset($_SESSION['user'])) header('location:?method=login');
    }
//
    public function verifyRole($rol_id){
        if(! $rol_id == $_SESSION['user']['rol_id']) header('location:?method=login');
    }

}
?>
