<!-- Controlador para iniciar sesion -->
<?php
    class Login {
        public function __construct(){}
        public function index(){
            require_once "views/business/header.php";
            require_once "views/business/index.view.php";
            require_once "views/business/footer.php";
        }
    }
?>