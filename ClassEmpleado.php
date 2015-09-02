<?php
require_once ("ClassPersona.php");

/**
* 
*/
class Empleado extends Persona
{
	private $_legajo;
	private $_sueldo;
	
	function __construct($nombre, $apellido, $dni, $sexo, $legajo, $sueldo)
	{
		parent::__construct($nombre, $apellido, $dni, $sexo);
		$this->_legajo = $legajo;
		$this->_sueldo = $sueldo;
	}

	function getLegajo()
	{
		return $this->_legajo;
	}

	/*function setLegajo($legajo)
	{
		$this->_legajo = $legajo;
	}*/

	function getSueldo()
	{
		return $this->_sueldo;
	}

	/*function setSueldo($sueldo)
	{
		$this->_sueldo = $sueldo;
	}*/

	function Hablar($idioma)
	{
		return "El empleado habla " . $idioma;
	}

	function ToString()
	{
		return parent::ToString() . "<br>" . "Legajo: " . $this->_legajo . "<br>" . "Sueldo: " . $this->_sueldo;
	}
}



?>