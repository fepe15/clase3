<?php
/*require_once ("ClassEmpleado.php");
require_once ("ClassPersona.php") */

class Fabrica{

	private $_razonSocial;
	private  $_empleados;

	function __construct($razonSocial)
	{
		$this->_razonSocial = $razonSocial;
		$this->_empleados = array();
	}

	function AgregarPersona($perr)
	{
		array_push($this->_empleados,  $perr);
	}
	function CalcularSalario()
	{
		/*$_salarios;
		foreach ($this->_empleados as $item ) {
			$_salarios .= $item->getSueldo;
		}
		return $_salarios;*/
	}

	function SacarPersona($per)
	{
			//sacar persona del array
	}
	private function EvitarDuplicados()
	{
		$this->_empleados = array_unique($this->_empleados);
	}
	function ToString()
	{
		$empleados = "";
		foreach ($this->_empleados as $item ) {
					$empleados .= "<p>" .$item->ToString()."</p>";
				}		
		return "Razon Social: ".$this->_razonSocial . "<br><br>". "Empleados: " .$empleados;
	}
}
?>