<?php

class indexController extends publication{

    /**
     * Función que se ejecuta siempre que se crea un objeto.
     * Se puede usar para la seguridad de un controlador.
     */
    public function __construct(){    

    }

    /**
     * Vista principal de los controladores.
     * Principalmente casi siempre se retorna una vista con una tabla para mostrar todos los registros. (Esto depende de la necesidad del cliente)
     */
    public function index(){
        require_once 'views/layouts/header_Index.php';
        require_once 'views/index/index.php';
        require_once 'views/layouts/footer.php';
    } 
    public function login(){
        require_once 'views/layouts/header_index.php';
        require_once 'views/index/login.php';
        require_once 'views/layouts/footer.php';
    }
    public function login_process(){
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        echo parent::account($_POST);
    }

    /**
     * Esta función retorna una vista con un formulario.
     */
    public function create(){
        require_once 'views/layouts/header_index.php';
        require_once 'views/index/create.php';
        require_once 'views/layouts/footer.php';
    }

    /**
     * Esta función se encarga de validar y almacenar en la base de datos la informacion enviada desde un formulario.
     */
    public function store(){
        //parent::register($_POST)
    }

    /**
     * Esta función retorna una vista con un formulario con valores definidos de un registro especifico.
     */
    public function edit(){

    }

    /**
     * Esta función se encarga de validar y actualizar en la base de datos la información de un registro especifico.
     */
    public function update(){

    }

    /**
     * Esta funcion se encarga de borrar un registro especifico en la base de datos.
     */
    public function delete(){

    }

}