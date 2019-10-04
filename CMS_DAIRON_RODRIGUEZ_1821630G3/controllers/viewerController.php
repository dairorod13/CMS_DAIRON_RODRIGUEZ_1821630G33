<?php

class viewerController extends viewer{
    
    public function index(){                
        require_once 'views/layouts/header_viewer.php';
        require_once 'views/viewer/index.php';
        require_once 'views/layouts/footer.php';
    }
    public function create(){
        require_once 'views/layouts/header_viewer.php';
        require_once 'views/user/create.php';
        require_once 'views/layouts/footer.php';
    }
    public function publication(){                
        require_once 'views/layouts/header_viewer.php';
        require_once 'views/viewer/publication.php';
        require_once 'views/layouts/footer.php';
    }
    public function post(){                
        require_once 'views/layouts/header_viewer.php';
        require_once 'views/viewer/post.php';
        require_once 'views/layouts/footer.php';
    }
    public function store_post(){
        var_dump($_FILES);
        $url_path = 'assets/imagen/' . $_FILES['imagen']['name'];
        move_uploaded_file($_FILES['imagen']['tmp_name'], $url_path);
        $_POST['imagen'] = $url_path;
        echo parent::register_post($_POST) ? header('location:?controller=viewer&method=publication') : 'Error en el registro';
    }  
    public function edit(){
      $busqueda = parent::find($_GET['id_publication']);
      require_once 'views/layouts/header_admin.php';
      require_once 'views/viewer/update.php';
      require_once 'views/layouts/footer.php';
    }
    public function update(){
        var_dump($_FILES);
        $url_path = 'assets/imagen/' . $_FILES['imagen']['name'];
        move_uploaded_file($_FILES['imagen']['tmp_name'], $url_path);
        $_POST['imagen'] = $url_path;
        
        echo parent::update_post($_POST) ? header('location:?controller=viewer&method=publication') : 'Error en el registro';
    
    }
    public function delete(){
      echo parent::eliminar($_GET['id_publication']) ? header('location:?controller=viewer&method=publication') : 'Error';     
    }
}
    ?>