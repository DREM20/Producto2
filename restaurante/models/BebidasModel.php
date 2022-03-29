<?php
	
	class bebidas_model {
		
		private $db;
		private $bebidas;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->bebidas = array();
		}
		
		public function get_bebidas()
		{
			$sql = "SELECT * FROM bebidas";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->bebidas[] = $row;
			}
			return $this->bebidas;
		}
		
		public function insertar($nombre, $costo, $descripccion, $proveedor){
			
			$resultado = $this->db->query("INSERT INTO bebidas (nombre, costo, descripccion, proveedor) VALUES ('$nombre' , '$costo' , '$descripccion','$proveedor')");
			
		}
		
		public function modificar($id, $nombre, $costo, $descripccion,$proveedor){
			
			$resultado = $this->db->query("UPDATE bebidas SET nombre='$nombre', costo='$costo', descripccion='$descripccion',proveedor='$proveedor' WHERE id = '$id'");			
		}
		
		public function eliminar($id){
			
			$resultado = $this->db->query("DELETE FROM bebidas WHERE id = '$id'");
			
		}
		
		public function get_bebida($id)
		{
			$sql = "SELECT * FROM bebidas WHERE id='$id' LIMIT 1";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
		}
	} 
?>