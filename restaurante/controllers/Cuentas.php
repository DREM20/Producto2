<?php
    
	class CuentasController {
		
		public function __construct(){
			require_once "models/CuentasModel.php";
            session_start();
		}
		
		
        public function index()
    {
        $usuario = $_POST['usuario'];
        $contraseña = $_POST['contraseña'];
        $cuentas = new cuentas_model();
        $data["titulo"] = "Cuentas";
        $acce = $cuentas->get_cuentas($usuario, $contraseña);
        echo $acce;
        $this->ingreso($acce);
    }
    public function index2(){
        require_once 'views/menu.php';
    }
    public function ingreso($acce)
    {

        if ($acce == 1) {
            $_SESSION['usuario'] = $_POST['usuario'];
            $_SESSION['contraseña'] = $_POST['contraseña'];
            $_SESSION['autenticado'] = 1;
            require_once 'views/menu.php';
        } else {
            if ($acce == 2) {
                $_SESSION['usuario'] = $_POST['usuario'];
                $_SESSION['contraseña'] = $_POST['contraseña'];
                $_SESSION['autenticado'] = 2;
                header('Location:principal.php?c=platillos&a=index');
            } else {
                header('Location:index.php?error=si');
            }
        }
        
    }
    

    
    
}
