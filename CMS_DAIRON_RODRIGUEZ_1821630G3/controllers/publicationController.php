<?php

class publicationController extends publication{
    
    public function index(){                
        require_once 'views/layouts/header_index.php';
        require_once 'views/publication/index.php';
        require_once 'views/layouts/footer.php';
    }
    public function create(){                
        require_once 'views/layouts/header_index.php';
        require_once 'views/publication/create.php';
        require_once 'views/layouts/footer.php';
    }
    public function store(){
         echo parent::register($_POST) ? header('location:?controller=administrador&method=publication') :header('location:?controller=administrador&method=post') ;
    }  
    public function edit(){
        
    }
    public function update(){
        
    }
    public function delete(){
        
    }
    
}