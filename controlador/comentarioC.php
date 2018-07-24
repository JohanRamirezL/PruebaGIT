<?php 

class Comentario{
	protected $nom;
	protected $cel;
	protected $com;
	
	function Comentario(){
		
		$this->nom= $_REQUEST['nombress'];
		$this->com = $_REQUEST['comentarios']; 
		$this->cel =$_REQUEST['celulars'];
		
		}		
		 
		function Envio(){
			
			
 $mysql=new mysqli("localhost","root","","peluqueria");
 if ($mysql->connect_error)
 die('Problemas con la conexion a la base de datos');

 $mysql->query("insert into comentarios(celular, nombre, comentario) values ('$_REQUEST[celulars]', '$_REQUEST[nombress]','$_REQUEST[comentarios]')") or
 die($mysql->error);

 $mysql->close();
  error_reporting(E_ERROR);
 echo '<span style="color:#ffbf00; font-size:18px;">SU COMENTARIO SE HA ENVIADO EXITOSAMENTE<br><br></span>';

			
			}
	
	
	}
     

   ?>  