<?php
    class Landing {
        public function __construct(){}
        // controladores pagina principal
        // index.view.php
        public function index(){            
            require_once "views/roles/business/header.php";
            require_once "views/business/index.view.php";            
            require_once "views/roles/business/footer.php";
        }
        // Mision
        public function mision(){            
            require_once "views/roles/business/header.php";
            require_once "views/modules/mision_vision/mision.view.php";            
            require_once "views/roles/business/footer.php";
        }
        // vision
        public function vision(){            
            require_once "views/roles/business/header.php";
            require_once "views/modules/mision_vision/vision.view.php";            
            require_once "views/roles/business/footer.php";
        }
        // historia
        public function historia(){            
            require_once "views/roles/business/header.php";
            require_once "views/modules/mision_vision/historia.view.php";            
            require_once "views/roles/business/footer.php";
        }
        // Proyectos
        public function proyecto(){            
            require_once "views/roles/business/header.php";
            require_once "views/modules/mov_otra_proyec/proyecto.view.php";            
            require_once "views/roles/business/footer.php";
        }
        // contactanos
        
        public function contactanos(){            
            require_once "views/roles/business/header.php";
            require_once "views/modules/contactanos/contactanos.view.php";            
            require_once "views/roles/business/footer.php";
        }
        
        // Iniciar Sesion
        public function iniciar_sesion(){            
            require_once "views/roles/business/header.php";
            require_once "views/business/iniciar_sesion.view.php";            
            require_once "views/roles/business/footer.php";
        }
        // pagina Iniciar sesion
        // dashboard
        public function dashboard(){            
            require_once "views/roles/business/header.php";
            require_once "views/modules/dashboard/dashboard.view.php";            
            require_once "views/roles/business/footer.php";
        }
        // Olvido contraseña
        public function olvido_contraseña(){            
            require_once "views/roles/business/header.php";
            require_once "views/business/olvidocontra.view.php";            
            require_once "views/roles/business/footer.php";
        }
        // Crear usuario
        public function crear_usuario(){            
            require_once "views/roles/business/header.php";
            require_once "views/business/crear_usuario.view.php";            
            require_once "views/roles/business/footer.php";
        }
        
        // Vistas de sesion iniciada
        // modificar usuario
        public function mod_usuario(){            
            require_once "views/roles/business/header.php";
            require_once "views/modules/usuarios/modificar_usuario.view.php";            
            require_once "views/roles/business/footer.php";
        }
        // Modulos
        // Calidad humana
        // empleados
        public function empleados(){            
            require_once "views/roles/business/header.php";
            require_once "views/modules/empleados/empleados.view.php";            
            require_once "views/roles/business/footer.php";
        }
        // beneficiarios
        public function beneficiarios(){            
            require_once "views/roles/business/header.php";
            require_once "views/modules/beneficiarios/beneficiarios.view.php";            
            require_once "views/roles/business/footer.php";
        }
        // Crear rol
        public function crear_rol(){            
            require_once "views/roles/business/header.php";
            require_once "views/modules/crear_rol/crear_rol.view.php";            
            require_once "views/roles/business/footer.php";
        }
        // Modulo inventario
        // movimiento
        public function movimiento(){            
            require_once "views/roles/business/header.php";
            require_once "views/modules/mov_otra_proyec/movimiento.view.php";            
            require_once "views/roles/business/footer.php";
        }
        // Dotacion
        public function dotacion(){            
            require_once "views/roles/business/header.php";
            require_once "views/modules/mov_otra_proyec/dotacion.view.php";            
            require_once "views/roles/business/footer.php";
        }
        // Activos
        public function activos(){            
            require_once "views/roles/business/header.php";
            require_once "views/modules/activos_noactivos/activos.view.php";            
            require_once "views/roles/business/footer.php";
        }
        // Modulo informes
        // Usuarios
        public function usuarios(){            
            require_once "views/roles/business/header.php";
            require_once "views/modules/usuarios/usuarios.view.php";            
            require_once "views/roles/business/footer.php";
        }
        // Inventarios
        public function inventario(){            
            require_once "views/roles/business/header.php";
            require_once "views/modules/mov_otra_proyec/inventario.view.php";            
            require_once "views/roles/business/footer.php";
        }
        // Activos / No activos
        public function no_activos(){            
            require_once "views/roles/business/header.php";
            require_once "views/modules/activos_noactivos/no_activos.view.php";            
            require_once "views/roles/business/footer.php";
        }
        // Ver usuario
        public function ver_usuario(){            
            require_once "views/roles/business/header.php";
            require_once "views/modules/usuarios/ver_usuario.view.php";            
            require_once "views/roles/business/footer.php";
        }
        // buscar usuario
        public function bus_usuario(){            
            require_once "views/roles/business/header.php";
            require_once "views/modules/usuarios/buscar_usuario.view.php";            
            require_once "views/roles/business/footer.php";
        }
        // agregar nuevo empleado
        public function nuevo_empleado(){              
            require_once "views/roles/business/header.php";
            require_once "views/modules/empleados/nuevo_empleado.view.php";            
            require_once "views/roles/business/footer.php";
        }
        // nuevo beneficiario
        public function nuevo_beneficiario(){              
            require_once "views/roles/business/header.php";
            require_once "views/modules/beneficiarios/nuevo_beneficiario.view.php";            
            require_once "views/roles/business/footer.php";
        }
        
        //  vista dentro de movimiento
        // tabla dotacion
        //  crear movimiento de dotacion
         public function formu_mov_dota(){              
            require_once "views/roles/business/header.php";
            require_once "views/modules/mov_otra_proyec/formu_dota.view.php";            
            require_once "views/roles/business/footer.php";
         }
        //  mostrar movimiento dotacion
         public function mostrar_mov_dota(){              
            require_once "views/roles/business/header.php";
            require_once "views/modules/mov_otra_proyec/mostrar_mov_dota.view.php";            
            require_once "views/roles/business/footer.php";
         }
        //  modificar movimiento dotacion
         public function modificar_mov_dota(){              
            require_once "views/roles/business/header.php";
            require_once "views/modules/mov_otra_proyec/modificar_mov_dota_view.php";            
            require_once "views/roles/business/footer.php";
         }
        //  tabla no activos
        // crear movimiento de no activos fijos
        public function crear_mov_no_activos(){              
            require_once "views/roles/business/header.php";
            require_once "views/modules/mov_otra_proyec/crear_mov_no_activos.view.php";            
            require_once "views/roles/business/footer.php";
         }
        //  mostrar movimiento no activos
         public function mostrar_mov_no_activos(){              
            require_once "views/roles/business/header.php";
            require_once "views/modules/mov_otra_proyec/mostrar_mov_no_activos.view.php";            
            require_once "views/roles/business/footer.php";
         }
        //  modificar no activos
         public function modificar_mov_no_activos(){              
            require_once "views/roles/business/header.php";
            require_once "views/modules/mov_otra_proyec/modificar_mov_no_activos.view.php";            
            require_once "views/roles/business/footer.php";
         }
        //  tabla activos fijos
        // crear activos fijos
         public function crear_mov_activos_fijos(){              
            require_once "views/roles/business/header.php";
            require_once "views/modules/mov_otra_proyec/crear_mov_activos_fijos.view.php";            
            require_once "views/roles/business/footer.php";
         }
        //  mostrar activos fijos
         public function mostrar_mov_activos_fijos(){              
            require_once "views/roles/business/header.php";
            require_once "views/modules/mov_otra_proyec/mostrar_mov_activos_fijos.view.php";            
            require_once "views/roles/business/footer.php";
         }
        //  modificar activos fijos
         public function modificar_mov_activos_fijos(){              
            require_once "views/roles/business/header.php";
            require_once "views/modules/mov_otra_proyec/modificar_mov_activos_fijos.view.php";            
            require_once "views/roles/business/footer.php";
         }





        public function nuevochile(){            
            require_once "views/roles/business/header.php";
            require_once "views/modules/mov_otra_proyec/registronc.view.php";            
            require_once "views/roles/business/footer.php";
        }
        public function buenavista(){            
            require_once "views/roles/business/header.php";
            require_once "views/modules/mov_otra_proyec/registrobn.view.php";            
            require_once "views/roles/business/footer.php";
        }
        public function santacecilia(){            
            require_once "views/roles/business/header.php";
            require_once "views/modules/mov_otra_proyec/registrosc.view.php";            
            require_once "views/roles/business/footer.php";
        }
        public function semillas(){            
            require_once "views/roles/business/header.php";
            require_once "views/modules/mov_otra_proyec/registrosemi.view.php";            
            require_once "views/roles/business/footer.php";
        }
        
        
    }
?>