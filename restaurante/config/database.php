<?php
	
	class Conectar {
		
		public static function conexion(){
			
			$conexion = new mysqli("localhost", "root", "", "mvc2");
			return $conexion;			
		}
	}
?>