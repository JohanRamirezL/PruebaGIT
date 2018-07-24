<!DOCTYPE html>
<?php
session_start();
if ($_SESSION['estado']!="1")
{
	header("Location: logout.php");
}
?>
<html><head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Equipe Etoile</title>
		
<style>#free-flash-header a,#free-flash-header a:hover {color:#363636;}#free-flash-header a:hover {text-decoration:none}</style>
<link rel="shortcut icon" type="image/ico" href="imagenes/icono.png"  />
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
		<link href="bootstrap/css/style.css" rel="stylesheet" type="text/css" media="all">
	    <link rel="stylesheet" type="text/css" href="bootstrap/css/selects.css" />
	    <link rel="stylesheet" type="text/css" href="bootstrap/css/botones.css" />

		

			
</head>
<body>

	<div class="page-container">
    		
		<header>
			<div class="container dark-bg no_left no_right">
            <div class="col-md-4 col-xs-3 no_left">
						
							<img src="imagenes/LOGO-FINAL2.png" width="280" height="150">
					
					</div>
				<div class="row">

		
					<?php include_once'../modelo/header2.php';?>

				</div>
			</div>
		</header>

<br>
		<div><div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                  <center>
                    <div class="container">
                    




<?php

if(isset($_REQUEST['login']))
{
$d1 = $_REQUEST['nombree']; 
$d2 = $_REQUEST['apellidoo'];
$d3 = $_REQUEST['producto'];
$d4 = $_REQUEST['precio'];
$d5 = $_REQUEST['cantidad'];
$d6 = $_REQUEST['comentario'];
$d7 = $d4*$d5;
header ("location:comprar1.php?dato=$d3&dato1=$d1&dato2=$d2&dato3=$d3&dato4=$d4&dato5=$d5&dato6=$d6&dato7=$d7");
}


	echo $_REQUEST['dato1']; 
	echo"<br>";
	echo $_REQUEST['dato2']; 
	echo"<br>";
	echo $_REQUEST['dato3'];
	echo"<br>";
	echo $_REQUEST['dato4']; 
	echo"<br>";
	echo $_REQUEST['dato5']; 
	echo"<br>";
	echo $_REQUEST['dato6']; 
	echo"<br>";
	echo $_REQUEST['dato7']; 
	 


?>
