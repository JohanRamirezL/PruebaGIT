<!DOCTYPE html>
<?php
 error_reporting(E_ERROR);
session_start();
?>
<html lang="en">
<head>
<body bgcolor="#000000"> 
 <title>Mi Proyecto</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Equipe Etoile</title>
<style>

 

 header#menu{
	position: absolute;
	cursor: pointer;
}
 .menu{
    padding:0;
    list-style:none;
   		    
}
 
.menu li a{  
    text-decoration:none;
    color:#FFF;   
	/*border-radius: 15px;*/
	border-bottom-right-radius: 15px;
    border-bottom-left-radius:  15px;
	
}
 li.prueba:hover{
	 background-color: none;
	 border-radius: 5px;	 
	 }
 li.prueba2:hover{
	 background-color: #666;
	 border-radius: 5px;	 
	 }

.menu li a:hover{
	
        -moz-transition: background 0.3s ease-in;
    -webkit-transition: background 0.3s ease-in;
    -o-transition: background 0.3s ease-in;

	
}
 
ul.menu ul, ul.submenu ul{
	margin:0;
	width:125px;
    padding:0;
    list-style:none;
    height:0;
    overflow: hidden;
    transition:0.3s;
    -moz-transition:0.3s;
    -webkit-transition:0.3s;
	background:#000;
	border-radius: 5px;
}
 
ul.menu > li:hover > ul, ul.submenu > li:hover > ul{
    height:100%;
    overflow:visible;
	border-radius: 5px;
	font-size:14px;
	 
}
 </style>		
<style>
	#free-flash-header 
	a,#free-flash-header 
	a:hover {color:#363636;}
	#free-flash-header 
	a:hover {text-decoration:none}
</style>
   <style>
	label.C{
		height: 40px;		
		font-size: 12px;
		width: 108px;
				
		}
	   label.C:hover{
		
		background-color: #000000;
		border-top: transparent;
	    border-bottom:4px solid #ffbf00;
		border-bottom-right-radius: 15px;
	    border-bottom-left-radius: 15px;
		padding: 8px, 8px;
		cursor: pointer;
		
		}
	   label.sol{
		height: 40px;		
		font-size: 13px;
		width: 65px;
		
		}
	   label.sol:hover{
		
		background-color: #000000;
		border-top: transparent;
        border-bottom:4px solid #ffbf00;
	    border-bottom-left-radius: #ffbf00 2px solid;
	    border-bottom-right-radius: #ffbf00 2px solid;
	    border-bottom-right-radius: 15px;
	    border-bottom-left-radius: 15px;
		border-bottom-color: #ffbf00;
		cursor: pointer;
		
		}
	   button {
	   background: none;
	   border: none;
	   outline: none;
	   }
	
	</style>
	
		<link href="vista/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
		<link href="vista/bootstrap/css/style.css" rel="stylesheet" type="text/css" media="all">




    <?php
 error_reporting(E_ERROR);
 $mysql=new mysqli("localhost","root","","peluqueria");
 if ($mysql->connect_error)
 die("Problemas con la conexión a la base de datos");
 $d4=($_SESSION['usuario']);
 $a5=($_SESSION['clave']);
 
 
 $registro=$mysql->query("SELECT nombre, apellido, documento, celular, contrasena FROM usuario  where 
 documento = '$d4' and contrasena = '$a5'") or
 die($mysql->error);  
                
 if ($reg=$registro->fetch_array())
 {
 ?>

<center>


 <?php
 }
 else
 echo ' <body onload="Reloj()"><font color="#ffbf00" face="Trebuchet MS, Arial, Helvetica, sans-serif"><table><tr><td id="Fecha_Reloj""></td><td> </td></font><td width="250"></td><td><font size="-1" color="#ffbf00"><B>USUARIO NO INGRESADO</font></td></tr></table>';

 $mysql->close();
 ?>
	</head>
	
<body>

<?php
$archivo = basename($_SERVER['PHP_SELF']);
$c0=""; $c1=""; $c2=""; $c3=""; $c4=""; $c5="";$c6="";
if ($archivo=="home.php") 
{ $c0="active"; }
if ($archivo=="servicios2.php" ||$archivo=="corteh.php" || $archivo=="corted.php" || $archivo=="cepillado.php" || $archivo=="manicure.php"||$archivo=="pedicure.php" || $archivo=="tintura.php")
{ $c1="active"; }
if ($archivo=="productos2.php" ||$archivo=="comprar1.php"||$archivo=="comprar2.php"||$archivo=="productos3.php")
{ $c2="active"; }
if ($archivo=="comentarios3.php"||$archivo=="comentarios4.php")
{ $c4="active"; }
if ($archivo=="cuenta.php"||$archivo=="cuenta2.php" || $archivo=="cuenta3.php" || $archivo=="modificar.php" || $archivo=="modificar1.php"|| $archivo=="reservado.php"|| $archivo=="reservado1.php"|| $archivo=="cuenta1.php")
{ $c5="active"; }
if ($archivo=="login.php"||$archivo=="registro2.php")
{ $c6="active"; }


if($archivo=="home.php")
{$ruta="vista/

";
	}
	else{
	$ruta="";
	}
?>

 <div class="col-md-8 col-xs-12 ">
						
				<nav class="menu fr">
				<ul>
				<li class="<?php echo $c0;?>"><a href="<?php echo $ruta;?>../home.php">
                INICIO </a></li>
								<li class="<?php echo $c1;?>"><a href="<?php echo $ruta;?>servicios2.php">
										<span>SERVICIOS </span>
									</a>
								</li>
								<li class="<?php echo $c2;?>"><a href="<?php echo $ruta;?>productos2.php">
										<span>PRODUCTOS </span>
									</a></li>
							
								<li class="<?php echo $c4;?>"><a href="<?php echo $ruta;?>comentarios3.php">
										<span>COMENTARIOS </span>
									</a>
								</li>
                               <li style="width: 100px"></li>
									
<label class="C">
<li class="<?php echo $c5;?>">
<br>
<form action="<?php echo $ruta;?>cuenta.php">
<button>
<?php $a= $reg['nombre']; $b=$reg['apellido']; $a = strtoupper($a); $b = strtoupper($b); echo $a." ".$b."" ?>
</button> 
</form>
</li>
</label>


							
<label class="sol">
<li class="<?php echo $c6;?>">
<br>
<form action="<?php echo $ruta;?>logout.php">
<button>
SALIR   <span class="glyphicon glyphicon-off "></span>
</button>
</form>
</li>
</label>
                                
							</ul>
							
							
							</ul>
								<?php include "FechaReloj.php"; ?>
						</nav>

				
</nav>
</body>
</html>

