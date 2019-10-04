<?php
//Herencia
class publication extends Database{

    public function all(){
        $result = parent::connect()->prepare("SELECT * FROM publicaciones");
        $result->execute();
        return $result->fetchAll();
    }
    public function register($data){
        try{
            $result = parent::connect()->prepare("INSERT INTO publicaciones (titulo, contenido, fecha) VALUES (?,?,?)");
            $result->bindParam(1, $data['titulo'], PDO::PARAM_STR);
            $result->bindParam(2, $data['contenido'], PDO::PARAM_STR);
            $result->bindParam(3, $data['fecha'], PDO::PARAM_STR);
            $result->bindParam(3, $data['fecha'], PDO::PARAM_STR);
            $result->bindParam(3, $data['fecha'], PDO::PARAM_STR);
            return $result->execute();
        }catch (Exception $e){
           die("Error User->register() " . $e->getMessage());
        }
    }
    public function delete(){

    }
    
    
}
