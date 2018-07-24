<?php 
include ("registroC.php");

class Rusua extends Registro{
	
	private $Passw;
	
	public function Rusua(){
		
		$this->nom = $_POST['nombre'];
		
		$this->ape = $_POST['apellido'];
		
		
		
		$this->cel = $_POST['celulars'];
		
			
		
	}
	
	
	private function getName(){
        return $this->nom;
    }
	
	private function getApel(){
        return $this->ape;
    }

	
	private function getcelt(){
        return $this->cel;
    }
	
	function Ureg(){
		
		$mysql=new mysqli("localhost","root","","peluqueria");
        if ($mysql->connect_error)
        die('Problemas con la conexion a la base de datos');

        $mysql->query("insert into empleados(nombre,apellido,telefono) values ('$_REQUEST[nombre]', '$_REQUEST[apellido]','$_REQUEST[celulars]')") or
         die($mysql->error);

         $mysql->close();
         error_reporting(E_ERROR);
         echo '<br><span style="color:#FF9900; font-size:50px;">REGISTRO EXITOSO</span><br><br><br>';
		
		echo "<font color='#39ff14'><h3>LOS DATOS REGISTRADOS SON: </h4></font><br><br>";
 
        echo "<table><tr>";
		
  
        echo "<td colspan='2' WIDTH='250' HEIGHT='50'><font color='#FF9900' size='5'>Nombre:  </font></td>" . "<td align='center'><font color='#FFF' size='5'>".$this->getName() . "</font><br></td></tr>" ;
		
		
        echo "<tr><td colspan='2' WIDTH='250' HEIGHT='50'><font color='#FF9900' size='5'>Apellido:  </font></td>" . "<td align='center'><font color='#FFF' size='5'>".$this->getApel() . "</font><br></td></tr>" ;
		
		
		
        echo "<tr><td colspan='2' WIDTH='250' HEIGHT='50'><font color='#FF9900' size='5'>Celular:  </font></td>" . "<td align='center'><font color='#FFF' size='5'>".$this->getcelt(). "</font><br></td>" ;
		
		
        echo "</tr></table>";
	}
	
	
	
}



?>