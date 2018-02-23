<?php 
 class Conexion 
{
	private $bd="quipu";
	private $localhost="localhost";
	private $user="root";
	private $pass="";
	public $mysqli;

	function Conexion()
	{
		$this->mysqli=new mysqli($this->localhost,$this->user,$this->pass,$this->bd);
		return $this->mysqli;
	}
}

?>