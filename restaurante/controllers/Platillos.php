<?php
	
	class platillosController {
		
		public function __construct(){
			require_once "models/PlatillosModel.php";
			session_start();
		}
		
		public function index(){
			$platillos = new platillos_model();
			$data["titulo"] = "Platillos";
			$data["platillos"] = $platillos->get_platillos();
			require_once "views/platillos/platillos.php";	
		}
		
		public function nuevo(){
			
			$data["titulo"] = "Platillos";
			require_once "views/platillos/platillos_nuevo.php";
		}
		
		public function guarda(){
			
			$nombre = $_POST['nombre'];
			$costo = $_POST['costo'];
			$descripccion = $_POST['descripccion'];
			
			
			$platillos = new platillos_model();
			$platillos->insertar($nombre, $costo, $descripccion);
			$data["titulo"] = "Platillos";
			$this->index();
		}
		
		public function modificar($id){
			
			$platillos = new platillos_model();
			
			$data["id"] = $id;
			$data["platillos"] = $platillos->get_platillo($id);
			$data["titulo"] = "Platillos";
			require_once "views/platillos/platillos_modifica.php";
		}
		
		public function actualizar(){

			$id = $_POST['id'];
			$nombre = $_POST['nombre'];
			$costo = $_POST['costo'];
			$descripccion = $_POST['descripccion'];

			$platillos = new platillos_model();
			$platillos->modificar($id, $nombre, $costo, $descripccion);
			$data["titulo"] = "Platillos";
			$this->index();
		}
		
		public function eliminar($id){
			
			$platillos = new platillos_model();
			$platillos->eliminar($id);
			$data["titulo"] = "platillos";
			$this->index();
		}	
	}
?>