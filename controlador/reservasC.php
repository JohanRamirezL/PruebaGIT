<?php 
error_reporting(E_ERROR);

class Reserva{
	public $idr;
	public $fec;
	public $hora;
	public $ser;
	public $prec;
	public $adm;
	public $usua;
	public $emp;
	public $est;
	
	public function Reserva(){
		
		$this->fec = $_POST['fecha'];
		$this->hora = $_POST['horario'];
		$this->ser = $_POST['servicio'];
		$this->adm = $_POST['admi'];
		$this->emp = $_POST['empleado'];
		$this->prec = $_POST['valor'];
		
	}
	
}
?>