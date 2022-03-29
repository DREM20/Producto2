<?php
	
	class cuentasm_model {
		
		private $db;
		private $cuentas;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->cuentas = array();
		}
    
		
        public function id_usuarios($user, $password){
            $sql = "SELECT * FROM cuentas WHERE '$user' = usuario AND '$password' = contraseña";
            $resultado = $this->db->query($sql);
            $num = mysqli_num_rows($resultado);
            return $num;
        }
    
        public function autenticacion($user, $password){
            $sql = "SELECT tipousuario from cuentas where usuario = '$user' and contraseña = '$password'";
            $resultado = $this->db->query($sql);
            $row = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
            return $row["tipousuario"];
        }

        public function get_cuentasm()
		{
			$sql = "SELECT * FROM cuentas";
			$resultado2 = $this->db->query($sql);
			while($row = $resultado2->fetch_assoc())
			{
				$this->cuentas[] = $row;
			}
			return $this->cuentas;
		}
		
		public function insertar($usuario, $contraseña, $tipousuario){
			
			$resultado = $this->db->query("INSERT INTO cuentas (usuario, contraseña, tipousuario) VALUES ('$usuario' , '$contraseña' , '$tipousuario')");
			
		}
		
		public function modificar($id, $usuario, $contraseña, $tipousuario){
			
			$resultado = $this->db->query("UPDATE cuentas SET usuario='$usuario', contraseña='$contraseña', tipousuario='$tipousuario' WHERE id = '$id'");			
		}
		
		public function eliminar($id){
			
			$resultado = $this->db->query("DELETE FROM cuentas WHERE id = '$id'");
			
		}
		
		public function get_cuentam($id)
		{
			$sql = "SELECT * FROM cuentas WHERE id='$id' LIMIT 1";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
		}
    }    
        

?>