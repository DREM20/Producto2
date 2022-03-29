<?php
    
	class CuentasMController {
		
		public function __construct(){
			require_once "models/CuentasMModel.php";
            session_start();
		}
        public function index(){
                
                
            $cuentas = new cuentasm_model();
            $data["titulo"] = "Cuentas";
            $data["cuentas"] = $cuentas->get_cuentasm();
            
            require_once "views/cuentas/cuentas.php";	
        }
        
        public function nuevo(){
            
            $data["titulo"] = "Cuentas";
            require_once "views/cuentas/cuentas_nuevo.php";
        }
        
        public function guarda(){
            
            $usuario = $_POST['usuario'];
            $contraseña = $_POST['contraseña'];
            $tipousuario = $_POST['tipousuario'];
            
            
            $cuentas = new cuentasm_model();
            $cuentas->insertar($usuario, $contraseña, $tipousuario);
            $data["titulo"] = "Cuentas";
            $this->index();
        }
        
        public function modificar($id){
            
            $cuentas = new cuentasm_model();
            
            $data["id"] = $id;
            $data["cuentas"] = $cuentas->get_cuentam($id);
            $data["titulo"] = "Cuentas";
            require_once "views/cuentas/cuentas_modificar.php";
        }
        
        public function actualizar(){

            $id = $_POST['id'];
            $usuario = $_POST['usuario'];
            $contraseña = $_POST['contraseña'];
            $tipousuario = $_POST['tipousuario'];

            $cuentas = new cuentasm_model();
            $cuentas->modificar($id, $usuario, $contraseña, $tipousuario);
            $data["titulo"] = "Cuentas";
            $this->index();
        }
        
        public function eliminar($id){
            
            $cuentas = new cuentasm_model();
            $cuentas->eliminar($id);
            $data["titulo"] = "Cuentas";
            $this->index();
        }	
    }
?>