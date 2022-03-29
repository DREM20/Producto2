<?php
	
	class bebidasController {
		
		public function __construct(){
			require_once "models/BebidasModel.php";
			session_start();
		}
		
		public function index(){
			$bebidas = new bebidas_model();
			$data["titulo"] = "Bebidas";
			$data["bebidas"] = $bebidas->get_bebidas();
			require_once "views/bebidas/bebidas.php";	
		}
		
		public function nuevo(){
			
			$data["titulo"] = "Bebidas";
			require_once "views/bebidas/bebidas_nuevo.php";
		}
		
		public function guarda(){
			
			$nombre = $_POST['nombre'];
			$costo = $_POST['costo'];
			$descripccion = $_POST['descripccion'];
			$proveedor = $_POST['proveedor'];
			
			
			$bebidas = new bebidas_model();
			$bebidas->insertar($nombre, $costo, $descripccion, $proveedor);
			$data["titulo"] = "Bebidas";
			$this->index();
		}
		
		public function modificar($id){
			
			$bebidas = new bebidas_model();
			
			$data["id"] = $id;
			$data["bebidas"] = $bebidas->get_bebida($id);
			$data["titulo"] = "Bebidas";
			require_once "views/bebidas/bebidas_modifica.php";
		}
		
		public function actualizar(){

			$id = $_POST['id'];
			$nombre = $_POST['nombre'];
			$costo = $_POST['costo'];
			$descripccion = $_POST['descripccion'];
			$proveedor = $_POST['proveedor'];

			$bebidas = new bebidas_model();
			$bebidas->modificar($id, $nombre, $costo, $descripccion, $proveedor);
			$data["titulo"] = "Bebidas";
			$this->index();
		}
		
		public function eliminar($id){
			
			$bebidas = new bebidas_model();
			$bebidas->eliminar($id);
			$data["titulo"] = "bebidas";
			$this->index();
		}	
	}
?>