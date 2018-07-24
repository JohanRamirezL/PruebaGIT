<?php 
 include ("registroC.php");

class Radmin extends Registro{
	
	private $cont;
	
	public function Radmin(){
		
		$this->nom = $_POST['nombre'];
		
		$this->ape = $_POST['apellido'];
		
		$this->doc = $_POST['documento'];
		
		$this->cel = $_POST['celulares'];
		
		$this->cont = $_POST['contrasena'];	
		
	}
	
	private function getNam(){
        return $this->nom;
    }
	
	private function getApll(){
        return $this->ape;
    }
	
	private function getDocc(){
        return $this->doc;
    }
	
	private function getPhone(){
        return $this->cel;
    }
	
	
	function Dreg(){
		$mysql=new mysqli("localhost","root","","peluqueria");
        if ($mysql->connect_error)
        die('Problemas con la conexion a la base de datos');

        $mysql->query("insert into usuario(nombre,apellido,documento,celular,contrasena,rol,pregunta,respuesta) values ('$_POST[nombre]', '$_POST[apellido]','$_POST[documento]','$_POST[celulares]',sha1('$_POST[contrasena]'),'2','$_POST[pregunta]','$_POST[respuesta]')") or
        die($mysql->error);

        $mysql->close();
        error_reporting(E_ERROR);
        echo '<br><span style="color:#FF9900; font-size:50px;">REGISTRO EXITOSO</span><br><br><br>';
		
		echo "<font color='#39ff14'><h3>LOS DATOS REGISTRADOS SON: </h4></font><br><br>";
 
        echo "<table><tr>";
		
  
        echo "<td colspan='2' WIDTH='250' HEIGHT='50'><font color='#FF9900' size='5'>Nombre:  </font></td>" . "<td align='center'><font color='#FFF' size='5'>".$this->getNam() . "</font><br></td></tr>" ;
		
		
        echo "<tr><td colspan='2' WIDTH='250' HEIGHT='50'><font color='#FF9900' size='5'>Apellido:  </font></td>" . "<td align='center'><font color='#FFF' size='5'>".$this->getApll() . "</font><br></td></tr>" ;
		
		
        echo "<tr><td colspan='2' WIDTH='250' HEIGHT='50'><font color='#FF9900' size='5'>Documento:  </font></td>" . "<td align='center'><font color='#FFF' size='5'>".$this->getDocc(). "</font><br></td></tr>" ;
		
		
        echo "<tr><td colspan='2' WIDTH='250' HEIGHT='50'><font color='#FF9900' size='5'>Celular:  </font></td>" . "<td align='center'><font color='#FFF' size='5'>".$this->getPhone() . "</font><br></td>" ;
		
		
        echo "</tr></table>";
		
		
	}
	
}

?>