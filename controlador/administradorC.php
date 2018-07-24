<?php 

class Administrador{
	protected $doc;
	protected $con;
	
	public function Administrador(){
		
		$this->doc = $_POST['documentosa'];
		
		$this->con = $_POST['contrasenasa'];		
		
		}
		
		 private function getDoc(){
        return $this->doc;
    }
		 private function getCon(){
        return $this->con;
    }
		
		
	function Validar(){
		
		error_reporting(E_ERROR);
        $mysql=new mysqli("localhost","root","","peluqueria");
        if ($mysql->connect_error)
        die("Problemas con la conexión a la base de datos");
		
		$username = $this->getDoc();
        $password = $this->getCon();
		
		$registro=$mysql->query("SELECT nombre, apellido, documento, telefono, contrasena FROM administrador  where
        documento='$username' and contrasena='$password'") or
        die($mysql->error);
		
		if ($reg=$registro->fetch_array()){
			$_SESSION['usuarioa']=$_REQUEST['documentosa'];
            $_SESSION['clavea']=$_REQUEST['contrasenasa'];
			 $_SESSION['estado']=1;
			
			echo '<header><div class="container dark-bg no_left no_right"><div class="col-md-4 col-xs-3 no_left"><img src="imagenes/LOGO-FINAL2.png" width="250" height="150"></div><div class="row">';
		
		include_once'../modelo/header3.php';
		
		echo'</div></div></header><br>';
			
        echo "<span style='color:#ffbf00; font-size:30px;'>Bienvenido(a)"." ".$a."</font><p><br>";
        
		echo "<span style='color:#FFf; font-size:30px;'><B> INGRESASTE CON EXITO.</B></span><p><br>";
        
		echo '<img src="imagenes/je.png".png" width="220" height="220"> ';
 
        echo "<br><br>";
        
		echo '<span style="color:#FFF; font-size:20px;"><B>   Puedes seguir navegando en la pagina en las opciones del menú superior.  </B></span><p>';
        
		
		}
 
    else {
	 	 
 echo '<header><div class="container dark-bg no_left no_right"><div class="col-md-4 col-xs-12 no_left"><img src="imagenes/LOGO-FINAL2.png" width="280" height="150"></div><div class="row">';
	 echo'</div></div></header><br>';

     echo '<span style="color:DarkOrange; font-size:22px;"><B>No existe administrador o los datos son erroneos.</B></span><br><br>';
	 
	 echo"<h4>Los datos que usted ingreso son: <br><br>";
	 
	 echo 'Documento:<br>' . $this->getDoc().'<br><br>';
	 
	 echo 'Contraseña:<br><div id="el_div">********</div><br></h4>';
	

     echo '<img src="imagenes/ex.png" width="220" height="220">';
     
	 echo "<br><br><br>";
     
	 echo' <form method="post" action="loginA.php">';
  
     echo '<button class="boton_1" style="width:200px"<input type="submit" name="login">VOLVER A INGRESAR </button>';
     
	 echo "<br><br>";
     
	 echo '</form><br><br>';

   	

 }
  $mysql->close();

	}
	}

?>