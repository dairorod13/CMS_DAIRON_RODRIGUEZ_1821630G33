<?php
//Herencia
class administrador extends Database{
    
    public function all(){
        $result = parent::connect()->prepare("SELECT * FROM publicaciones");
        $result->execute();
        return $result->fetchAll();
    }
    
    public function all_users(){
        $result = parent::connect()->prepare("SELECT * FROM usuarios INNER JOIN roles ON usuarios.rol_id = roles.id_rol");
        $result->execute();
        return $result->fetchAll();
    }

    public function register_post($data){
        try{
            $result = parent::connect()->prepare("INSERT INTO publicaciones (titulo, contenido, fecha, imagen) VALUES (?,?,?, ?)");
            $result->bindParam(1, $data['titulo'], PDO::PARAM_STR);
            $result->bindParam(2, $data['contenido'], PDO::PARAM_STR);
            $result->bindParam(3, $data['fecha'], PDO::PARAM_STR);
            $result->bindParam(4, $data['imagen'], PDO::PARAM_STR);
            return $result->execute();
        }catch (Exception $e){
           die("Error User->register() " . $e->getMessage());
        }
    }
    

    public function register($data){
        try{
            $result = parent::connect()->prepare("INSERT INTO usuarios (nombre, apellido, correo, rol_id, password) VALUES (?,?,?, 2, ?)");
            $result->bindParam(1, $data['nombre'], PDO::PARAM_STR);
            $result->bindParam(2, $data['apellido'], PDO::PARAM_STR);
            $result->bindParam(3, $data['correo'], PDO::PARAM_STR);
            $result->bindParam(4, $data['password'], PDO::PARAM_STR);
            return $result->execute();
        }catch (Exception $e){
           die("Error User->register() " . $e->getMessage());
        }
    }
    public function find($id){
        try{
            $result = parent::connect()->prepare("SELECT * FROM publicaciones WHERE id_publicacion = ?");
            $result->bindParam(1, $id, PDO::PARAM_INT);
            $result->execute();
            return $result->fetch();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    public function find_user($id){
        try{
            $result = parent::connect()->prepare("SELECT * FROM usuarios WHERE id_user = ?");
            $result->bindParam(1, $id, PDO::PARAM_INT);
            $result->execute();
            return $result->fetch();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function update_post($update){
        try{
            $result = parent::connect()->prepare("UPDATE publicaciones SET titulo = ?, contenido = ?, fecha = ?, imagen = ? WHERE id_publicacion = ?");
            $result->bindParam(1, $update['titulo'], PDO::PARAM_STR);
            $result->bindParam(2, $update['contenido'], PDO::PARAM_STR);
            $result->bindParam(3, $update['fecha'], PDO::PARAM_STR);
            $result->bindParam(4, $update['imagen'], PDO::PARAM_STR);
            $result->bindParam(5, $update['id_publicacion'], PDO::PARAM_INT);
            return $result->execute();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    public function update_user($data){
        try{
            $result = parent::connect()->prepare("UPDATE usuarios SET nombre = ?, apellido = ?, correo = ?, rol_id = 2, password = ?  WHERE id_user = ?");
            $result->bindParam(1, $data['nombre'], PDO::PARAM_STR);
            $result->bindParam(2, $data['apellido'], PDO::PARAM_STR);
            $result->bindParam(3, $data['correo'], PDO::PARAM_STR);
            $result->bindParam(4, $data['password'], PDO::PARAM_STR);
            $result->bindParam(5, $data['id'], PDO::PARAM_INT);
            return $result->execute();
        }catch (Exception $e){
           die("Error User->register() " . $e->getMessage());
        }
    }

    public function eliminar($id){
        try{
            $result = parent::connect()->prepare("DELETE FROM publicaciones WHERE id_publicacion = ?");
            $result->bindParam(1, $id, PDO::PARAM_INT);
            return $result->execute();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    public function eliminar_user($id){
        try{
            $result = parent::connect()->prepare("DELETE FROM usuarios WHERE id_user = ?");
            $result->bindParam(1, $id, PDO::PARAM_INT);
            return $result->execute();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function buscar($id){
        try{
            $result = parent::connect()->prepare("SELECT * FROM usuarios WHERE id_user = ?");
            $result->bindParam(1, $id, PDO::PARAM_INT);
            return $result->execute();
            return $result->fetchAll();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
}
?>