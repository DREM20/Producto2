<?php

class cuentas_model
{

	private $db;
	private $cuentas;

	public function __construct()
	{
		$this->db = Conectar::conexion();
		$this->cuentas = array();
	}


	
	public function get_cuentas($usuario, $contraseña)
	{
		$sql = "SELECT * FROM cuentas WHERE usuario='$usuario' and contraseña='$contraseña' ";
		$resultadoUsuario = $this->db->query($sql);
		$acce = 0;

		if (($resultadoUsuario->num_rows) == 1) {
			$row = $resultadoUsuario->fetch_array();


			if ($row['tipousuario'] == 1) {
				$acce = 1;
			} else {
				$acce = 2;
			}
		}

		return $acce;
	}
}
