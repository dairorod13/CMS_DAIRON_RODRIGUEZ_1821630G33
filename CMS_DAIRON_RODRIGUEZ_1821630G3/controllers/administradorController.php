<?php

class administradorController extends administrador {
    
    public function index(){                
        require_once 'views/layouts/header_admin.php';
        require_once 'views/admin/index.php';
        require_once 'views/layouts/footer.php';
    }
    public function users(){                
        require_once 'views/layouts/header_admin.php';
        require_once 'views/admin/index.php';
        require_once 'views/layouts/footer.php';
    }
    
    public function publication(){                
        require_once 'views/layouts/header_admin.php';
        require_once 'views/admin/publication.php';
        require_once 'views/layouts/footer.php';
    }
    public function post(){                
        require_once 'views/layouts/header_admin.php';
        require_once 'views/admin/post.php';
        require_once 'views/layouts/footer.php';
    }
    public function create(){
        require_once 'views/layouts/header_admin.php';
        require_once 'views/publication/create.php';
        require_once 'views/layouts/footer.php';
    }
    public function store(){
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        echo parent::register($_POST) ? 'Registro correcto.' : 'Error en el registro';
    }  
    public function store_post(){
        var_dump($_FILES);
        $url_path = 'assets/imagen/' . $_FILES['imagen']['name'];
        move_uploaded_file($_FILES['imagen']['tmp_name'], $url_path);
        $_POST['imagen'] = $url_path;
        
        echo parent::register_post($_POST) ? header('location:?controller=administrador&method=publication') : 'Error en el registro';
    }  
    public function edit(){
      $busqueda = parent::find($_GET['id_publication']);
      require_once 'views/layouts/header_admin.php';
      require_once 'views/admin/update.php';
      require_once 'views/layouts/footer.php';
    }

    public function edit_user(){
      $data = parent::find_user($_GET['id_user']);
      require_once 'views/layouts/header_admin.php';
      require_once 'views/admin/update_user.php';
      require_once 'views/layouts/footer.php';
    }
    public function update(){
        var_dump($_FILES);
        $url_path = 'assets/imagen/' . $_FILES['imagen']['name'];
        move_uploaded_file($_FILES['imagen']['tmp_name'], $url_path);
        $_POST['imagen'] = $url_path;
        
        echo parent::update_post($_POST) ? header('location:?controller=administrador&method=publication') : 'Error en el registro';
    
    }
    public function delete(){
      echo parent::eliminar($_GET['id_publication']) ? header('location:?controller=administrador&method=publication') : 'Error';     
    }
    public function delete_user(){
      echo parent::eliminar_user($_GET['id_user']) ? header('location:?controller=administrador&method=users') : 'Error';     
    }
   public function update_usuarios(){
       
    echo parent::update_user($_POST) ? header('location: ?controller=administrador') : 'error';
   }
}