<!DOCTYPE html>
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
<style>#free-flash-header a,#free-flash-header a:hover {color:#363636;}#free-flash-header a:hover {text-decoration:none}</style>
   
	
		<link href="vista/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
		<link href="vista/bootstrap/css/style.css" rel="stylesheet" type="text/css" media="all">
<script type="text/javascript">
function Reloj() {

marcacion = new Date()

Hora = marcacion.getHours()

Minutos = marcacion.getMinutes()

Segundos = marcacion.getSeconds()

dn = "a.m"
if (Hora > 12) {
dn = "p.m"
Hora = Hora - 12
}
if (Hora == 0)
Hora = 12

if (Hora <= 9) Hora = "0" + Hora
if (Minutos <= 9) Minutos = "0" + Minutos
if (Segundos <= 9) Segundos = "0" + Segundos




var Dia = new Array("Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
var Mes = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", 
"Octubre", "Noviembre", "Diciembre");
var Hoy = new Date();
var Anio = Hoy.getFullYear();
var Fecha = Dia[Hoy.getDay()] + ", " + Hoy.getDate() + " de " + Mes[Hoy.getMonth()] + /*" de " + Anio +*/ "   ";


var Script, Total


Script = Fecha + Hora + ":" + Minutos + ":" + Segundos + " " + dn


Total = Script


document.getElementById('Fecha_Reloj').innerHTML = Total


setTimeout("Reloj()", 1000)
}
</script>
</font>

	</head>
	
<body>

<?php
$archivo = basename($_SERVER['PHP_SELF']);
$c0=""; $c1=""; $c2=""; $c3=""; $c4=""; $c5="";$c6="";
if ($archivo=="index.php") 
{ $c0="active"; }
if ($archivo=="servicios.php")
{ $c1="active"; }
if ($archivo=="productos.php")
{ $c2="active"; }
if ($archivo=="informacion.php")
{ $c3="active"; }
if ($archivo=="comentarios.php"||$archivo=="comentarios3.php")
{ $c4="active"; }
if ($archivo=="loginF.php" || $archivo=="login.php" || $archivo=="loginA.php"|| $archivo=="recuperar.php"|| $archivo=="recuperar2.php"|| $archivo=="recuperar3.php")
{ $c5="active"; }
if ($archivo=="registro.php"||$archivo=="registro2.php")
{ $c6="active"; }


if($archivo=="index.php")
{$ruta="vista/

";
	}
	else{
	$ruta="";
	}
?>

<center>



						
				<nav class="menu fr">
				<ul>
				<li class="<?php echo $c0;?>"><a href="<?php echo $ruta;?>../index.php">
                INICIO </a></li>
								<li class="<?php echo $c1;?>"><a href="<?php echo $ruta;?>servicios.php">
										<span>SERVICIOS </span>
									</a>
								</li>
								<li class="<?php echo $c2;?>"><a href="<?php echo $ruta;?>productos.php">
										<span>PRODUCTOS </span>
									</a></li>
							
								<li class="<?php echo $c4;?>"><a href="<?php echo $ruta;?>comentarios.php">
										<span>COMENTARIOS </span>
									</a>
								</li>
								<li class="<?php echo $c5;?>"><a href="<?php echo $ruta;?>login.php">
										<span>INGRESAR</span>
									</a>
								</li>
								<li class="<?php echo $c6;?>"><a href="<?php echo $ruta;?>registro.php">
										<span>REGISTRO</span>
									</a>
								</li>
							</ul>
								<?php include "FechaReloj.php"; ?>
						</nav>
						
                        	
					</div>

				
</nav>

</body>
</html>
