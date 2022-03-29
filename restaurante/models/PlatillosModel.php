<?php
	
	class platillos_model {
		
		private $db;
		private $platillos;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->platillos = array();
		}
		
		public function get_platillos()
		{
			$sql = "SELECT * FROM platillos";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->platillos[] = $row;
			}
			return $this->platillos;
		}
		
		public function insertar($nombre, $costo, $descripccion){
			
			$resultado = $this->db->query("INSERT INTO platillos (nombre, costo, descripccion) VALUES ('$nombre' , '$costo' , '$descripccion')");
			
		}
		
		public function modificar($id, $nombre, $costo, $descripccion){
			
			$resultado = $this->db->query("UPDATE platillos SET nombre='$nombre', costo='$costo', descripccion='$descripccion' WHERE id = '$id'");			
		}
		
		public function eliminar($id){
			
			$resultado = $this->db->query("DELETE FROM platillos WHERE id = '$id'");
			
		}
		
		public function get_platillo($id)
		{
			$sql = "SELECT * FROM platillos WHERE id='$id' LIMIT 1";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
		}
	} 
?>