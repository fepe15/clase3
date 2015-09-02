<?php
/**
* 
*/
Abstract class Persona
{

	private $_nombre;
	private $_apellido;
	private $_dni;	
	private $_sexo;

	function __construct($nombre, $apellido, $dni, $sexo)
	{
		$this->_nombre = $nombre;
		$this->_apellido = $apellido;
		$this->_dni = $dni;
		$this->_sexo = $sexo;
	}

	function getNombre()
	{
		return $this->_nombre;
	}

	/*function setNombre($nombre)
	{
		$this->_nombre = $nombre;
	}*/

	function getApellido()
	{
		return $this->_apellido;
	}

	/*function setApellido($apellido)
	{
		$this->_apellido = $apellido;
	}*/

	function getDni()
	{
		return $this->_dni;
	}

	/*function setDni($dni)
	{
		$this->_dni = $dni;
	}*/

	abstract function Hablar($idioma);

	function ToString()
	{
		return "Nombre: " . $this->_nombre ."<br>" ."Apellido: " . $this->_apellido ."<br>". "DNI:" . $this->_dni ."<br>". "Sexo: ". $this->_sexo;
	}
}





?>