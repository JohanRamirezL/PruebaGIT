 <?php
 
 class Registro{
	 protected $nom;
	 protected $ape;
	 protected $doc;
	 protected $cel;
	 private $cont;
	 protected $pre;
	 protected $res;
	 
	 public function Registro(){
		 
		 $this->nom=$_REQUEST['nombre'];
		 
		 $this->ape = $_REQUEST['apellido'];
		 
		 $this->doc = $_REQUEST['documento'];
		 
		 $this->cel = $_REQUEST['celular'];
		 
		 $this->cont = $_REQUEST['contrasena'];
		 
		 $this->cont = $_REQUEST['pregunta'];
		 
		 $this->cont = $_REQUEST['respuesta'];
		
		 }
	 
	 private function getNom(){
        return $this->nom;
    }
	 private function getApe(){
        return $this->ape;
    }
	 private function getDoc(){
        return $this->doc;
    }
	 private function getCel(){
        return $this->cel;
    }

	 
	 
    function Registrar(){
		$mysql=new mysqli("localhost","root","","peluqueria");
 if ($mysql->connect_error)
 die('Problemas con la conexion a la base de datos');
  $registro=$mysql->query("insert into usuario(nombre,apellido,documento,celular,contrasena,rol,pregunta,respuesta) values ('$_REQUEST[nombre]','$_REQUEST[apellido]','$_REQUEST[documento]','$_REQUEST[celular]',sha1('$_REQUEST[contrasena]'),'1','$_REQUEST[pregunta]','$_REQUEST[respuesta]')")
	  
	 
	  
	  or die ('<font color="#ffbf00" size="+1">El documento ingresado ya existe en nuestra base de datos. <br><br> <form name="areat" method="post"action="registro.php">

  <button class="boton_1" style="width:200px"<input type="submit" name="login">VUELVE A INTENTARLO </button><br><br>

</form>');
 
	 
 $mysql->close();
  error_reporting(E_ERROR);
 echo '<span style="color:#FF9900; font-size:50px;">REGISTRO EXITOSO</span><br><br><br>';
 

 echo "<font color='#39ff14'><h3>LOS DATOS REGISTRADOS SON: </h4></font><br><br>";
 
 echo "<table><tr>";
		
  
 echo "<td colspan='2' WIDTH='250' HEIGHT='50'><font color='#FF9900' size='5'>Nombre:  </font></td>" . "<td align='center'><font color='#FFF' size='5'>".$this->getNom() . "</font><br></td></tr>" ;
		
		
 echo "<tr><td colspan='2' WIDTH='250' HEIGHT='50'><font color='#FF9900' size='5'>Apellido:  </font></td>" . "<td align='center'><font color='#FFF' size='5'>".$this->getApe() . "</font><br></td></tr>" ;
		
		
 echo "<tr><td colspan='2' WIDTH='250' HEIGHT='50'><font color='#FF9900' size='5'>Documento:  </font></td>" . "<td align='center'><font color='#FFF' size='5'>".$this->getDoc() . "</font><br></td></tr>" ;
		
		
 echo "<tr><td colspan='2' WIDTH='250' HEIGHT='50'><font color='#FF9900' size='5'>Celular:  </font></td>" . "<td align='center'><font color='#FFF' size='5'>".$this->getCel() . "</font><br></td>" ;
		
		
 echo "</tr></table>";
 
	
	}
 
	 }
 

 ?> 