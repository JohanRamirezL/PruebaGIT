<!DOCTYPE html>
<?php
error_reporting(E_ERROR);
session_start();
if ($_SESSION['estado']!="1")
{
	header("Location: vista/logout.php");
}
?>
<html><head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Equipe Etoile</title>
		
<style>#free-flash-header a,#free-flash-header a:hover {color:#363636;}#free-flash-header a:hover {text-decoration:none}</style>
   
		<!--no borrar-->
		<link href="vista/bootstrap/css/style.css" rel="stylesheet" type="text/css" media="all">
        
		<link rel="stylesheet" type="text/css" href="vista/bootstrap/css/lightbox/style.css" />
		<link rel="shortcut icon" type="image/ico" href="vista/imagenes/icono.png"  />

			

	</head>
	
	<body>

	<div class="page-container">
    		
		<header>
			<div class="container dark-bg no_left no_right">
           <div class="col-md-4 col-xs-3 no_left">
						
							<img src="vista/imagenes/LOGO-FINAL2.png" width="280" height="150">
					
					</div>
				<div class="row">

		
					<?php include_once'modelo/header2.php';?>

				</div>
			</div>
		</header>



		<div class="container dark-bg no_left no_right">
			<div class="slide">
				<div id="wowslider-container1">
					<div class="ws_images"><ul>
							<li><img src="vista/imagenes/383.jpg" width="190" height="350" alt="YOUR WAY TO SUCCESS" title="EQUIPE ETOILE" id="wows1_0"/></li>
                            <li><img src="vista/imagenes/afuera2.jpg" width="190" height="350" alt="YOUR WAY TO SUCCESS" title="EQUIPE ETOILE" id="wows1_3"/></li>
							<li><img src="vista/imagenes/IMAGEN.png" width="190" height="350" alt="YOUR WAY TO SUCCESS" title="EQUIPE ETOILE" id="wows1_1"/></li>
							<li><img src="vista/imagenes/378.jpg" width="190" height="350" alt="YOUR WAY TO SUCCESS" title="EQUIPE ETOILE" id="wows1_2"/></li>
                            
                            
						</ul>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12 col-xs-12 no_left">
					<br><br><br>
<center><font color="#ffbf00" size="+6" face="Trebuchet MS, Arial, Helvetica, sans-serif">CONOCENOS</font></center><br><br>
				</div>
              
			</div>
		</div>


		<div id="content" class="container">

			<div class="row">
				<aside class="col-md-6 col-xs-6">

					<div>
						<h3 class="header">Peluqueria Equipe Etoile</h3>
						<ul class="bloc">
							<li>
								<p>Peluqueria equipe etoile es un espacio donde entendemos las inquietudes<br> 
								del hombre y la mujer de hoy, para ofrecer una imagen actual y el estilo <br>que mejor refleja con su personalidad.Podras encontrarnos en el centro de<br>Bogota con los mejores profesionales.</p>
								
							</li>
                            <li>
								<p>
                                
                                DIRECCION: CLL18#4-75<br>
 LLAMENOS: 3132476483-2848830<br>
HORARIO: Lunes a Viernes 6am a 6 pm<br>
Sabados 8am a 5 pm.
                                
                                </p>
								
							</li>			
						</ul>

					</div>
                    

				</aside><div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d994.2371536464126!2d-74.07083027083856!3d4.603224836570083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f99a3c1db9597%3A0x46942fde98946d0c!2zQ2wuIDE4ICM0LTc0LCBCb2dvdMOh!5e0!3m2!1ses!2sco!4v1501850223236" width="450" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>


				
							</article>

						</section>
					</div>
				</div>	
			</div>

		
		<footer class="footer container">
			<div class="container copyright">
				<p></p>
			</div>
	

		</footer>
	
	</div>

<link rel="stylesheet" href="css/google-map.css">

  </body>
</html>