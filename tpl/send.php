

<?php
	// Traigo parametros por $_POST 
	$nombreUsuario 			= $_GET['nombreUsuario'];
	$instagramUsuario 		= $_GET['instagramUsuario'];
	$celularUsuario			= $_GET['celularUsuario'];
	$documentoUsuario		= $_GET['documentoUsuario'];
	$departamentoUsuario	= $_GET['departamentoUsuario'];
	$barrioUsuario			= $_GET['barrioUsuario'];
	$colegioUsuario			= $_GET['colegioUsuario'];
	$cursoUsuario			= $_GET['cursoUsuario'];
	$equipoUsuario			= $_GET['equipoUsuario'];



	// Cabeceras
	$headers  = 'MIME-Version: 1.0' . 'Content-type: text/plain; charset=UTF-8' ."\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'X-Mailer: PHP/' . phpversion() . " \r\n";
	$headers .= "From: $nombreUsuario \r\n";
	$headers .= 'Bcc: gpache13@gmail.com' . "\r\n";

	$mensaje = 
		' 
			<html> 
				<head> 
				   <title>College</title>
				   <style>
				   		html{
				   			height: auto;
				   		}
				   		body{
				   			height:auto;
				   			margin-bottom: 50px;
				   		}
				   		*{
				   			line-height: 14px
				   			
				   		}
						.wrap-title{
							display: block;
							max-width: 600px;
							height: 60px;
							background: #231f20;
							font-weight: 600;
						}

						.wrap-title img{
							display: block;
							height: auto;
						}
						h1{
							display: block;
							max-width: 600px;
							font-size: 20px;
							line-height: 35px;
							color: #ff3232;
							text-align: center;
							margin-top: 25px;
							margin-bottom: 25px;
						}	
						p{
							font-size: 25px;
							color: #808080;
						}
						p strong{
							color: #231f20;
							margin: 0px !important;
						}
						p {
							display: block;
							-webkit-margin-before: 0px;
							-webkit-margin-after: 0px;
							-webkit-margin-start: 0px;
							-webkit-margin-end: 0px;
				   			line-height: 14px
						}
				   </style>
				</head> 
				<body>
					<div class="wrap-title">
        				<img src="img/logo-mail.png"><br/>
        			</div>
				</body> 
			</html> 
		'
	;

	$mensaje .= "<br/><br/><br/><h1><strong> ¡ CONTACTO ! <br> <small>Formulario de contacto</strong></small></h1>" . " \r\n <br/><br/><br/>";

	$mensaje .= "<p><strong> Nombre y apellido:		</strong>"  . $nombreUsuario . 		 "</p>" . " \r\n";
	$mensaje .= "<p><strong> Instagram:				</strong>"  . $instagramUsuario . 	 "</p>" . " \r\n";
	$mensaje .= "<p><strong> Celular:				</strong>"  . $celularUsuario . 	 "</p>" . " \r\n";
	$mensaje .= "<p><strong> C.I.:	 			    </strong>"  . $documentoUsuario . 	 "</p>" . " \r\n";
	$mensaje .= "<p><strong> Departamento:			</strong>"  . $departamentoUsuario . "</p>" . " \r\n";
	$mensaje .= "<p><strong> Barrio:				</strong>"  . $barrioUsuario . 	 	 "</p>" . " \r\n";
	$mensaje .= "<p><strong> Colegio:				</strong>"  . $colegioUsuario . 	 "</p>" . " \r\n";
	$mensaje .= "<p><strong> Curso:					</strong>"  . $cursoUsuario . 	 	 "</p>" . " \r\n";
	$mensaje .= "<p><strong> Nombre Equipo:			</strong>"  . $equipoUsuario . 	 	 "</p>" . " \r\n";
	$mensaje .= "<p><strong> Enviado el:			</strong>"  . date('d/m/Y', time()). "</p>" . " \r\n <br/>";
	
	
	// Destino y asunto
	$para = 'gpache13@gmail.com';
	$asunto = '===****=== CONTACTO';
	
	// Funcion que envia el mensaje
	mail($para, $asunto, utf8_decode($mensaje), utf8_decode($headers));                                  
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1">
	    <title>College</title>
	    <link rel="shortcut icon" type="image/x-icon" href="img/favicon/favicon.png">
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	    <![endif]-->
	    <style>
		    html {font-family: sans-serif;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;}
			body {margin: 0;}
		    .body-inicio-send{
	  			background: #ff2c92;
			 }
			.body-inicio-send .container{
			  	margin-right: auto;
			  	margin-left: auto;
			  	padding-left: 15px;
			  	padding-right: 15px;
			  	margin-top: 12%;
			}
			.row {
			  margin-left: -15px;
			  margin-right: -15px;
			  width: 100%;
			}
			.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 { position: relative; min-height: 1px; padding-left: 15px; padding-right: 15px; }
			.col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12 {float: left;}
			.col-xs-12 {width: 100%;} .col-xs-11 {width: 91.66666666666666%;} .col-xs-10 {width: 83.33333333333334%;} .col-xs-9 {width: 75%;} .col-xs-8 {width: 66.66666666666666%;} .col-xs-7 {width: 58.333333333333336%;} .col-xs-6 {width: 50%;} .col-xs-5 {width: 41.66666666666667%;} .col-xs-4 {width: 33.33333333333333%;} .col-xs-3 {width: 25%;} .col-xs-2 {width: 16.666666666666664%;} .col-xs-1 {width: 8.333333333333332%;}
			
			.body-inicio-send .container .title,
			.body-inicio-send .container .subtitle{
				font-family: 'Open Sans', sans-serif;
				color: #F1C50F;
				text-align: center;
			}
			.body-inicio-send .container .title{
				font-weight: 600;
				font-size: 45px;
			}
			.body-inicio-send .container .title span{
				color: #fff;
			}
			.body-inicio-send .container .subtitle{
				font-weight: 400;
				font-size: 30px;
	  		}
	  		
	  		@media (min-width: 768px) {.container {width: 750px;} }
			@media (min-width: 992px) {.container {width: 970px;} }
			@media (min-width: 1200px) {.container {width: 1170px;} }
			@media (min-width: 768px) {  .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {float: left;} .col-sm-12 {width: 100%;} .col-sm-11 {width: 91.66666666666666%;} .col-sm-10 {width: 83.33333333333334%;} .col-sm-9 {width: 75%;} .col-sm-8 {width: 66.66666666666666%;} .col-sm-7 {width: 58.333333333333336%;} .col-sm-6 {width: 50%;} .col-sm-5 {width: 41.66666666666667%;} .col-sm-4 {width: 33.33333333333333%;} .col-sm-3 {width: 25%;} .col-sm-2 {width: 16.666666666666664%;} .col-sm-1 {width: 8.333333333333332%;}  }
			@media (min-width: 992px) { .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12 { float: left; } .col-md-12 { width: 100%; } .col-md-11 { width: 91.66666666666666%; } .col-md-10 { width: 83.33333333333334%; } .col-md-9 { width: 75%; } .col-md-8 { width: 66.66666666666666%; } .col-md-7 { width: 58.333333333333336%; } .col-md-6 { width: 50%; } .col-md-5 { width: 41.66666666666667%; } .col-md-4 { width: 33.33333333333333%; } .col-md-3 { width: 25%; } .col-md-2 { width: 16.666666666666664%; } .col-md-1 { width: 8.333333333333332%; } }
			@media (min-width: 1200px) { .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12 { float: left; } .col-lg-12 { width: 100%; } .col-lg-11 { width: 91.66666666666666%; } .col-lg-10 { width: 83.33333333333334%; } .col-lg-9 { width: 75%; } .col-lg-8 { width: 66.66666666666666%; } .col-lg-7 { width: 58.333333333333336%; } .col-lg-6 { width: 50%; } .col-lg-5 { width: 41.66666666666667%; } .col-lg-4 { width: 33.33333333333333%; } .col-lg-3 { width: 25%; } .col-lg-2 { width: 16.666666666666664%; } .col-lg-1 { width: 8.333333333333332%; } .col-lg-pull-12 { right: 100%; } }
		    @media (max-width: 768px) {
		   
				.body-inicio-send .container .title{
					font-size: 35px;
				}
				.body-inicio-send .container .subtitle{
					font-size: 20px;
		  		}
		    }
	    </style>
	</head>
	<body class="body-inicio-send">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--<h1 class="title">¡ Gracias <span><?php echo $nombreUsuario; ?></span> !</h1>-->
					<?php 
						$cadena  = "$nombreUsuario";
						$primerPalabra = explode(" ", $cadena);
					?>
					<h1 class="title">¡ Gracias <span><?php echo $primerPalabra[0]; // primer palabra (solo el nombre) ?></span> !</h1>	
                    
                    <h2 class="subtitle">No olvides subir la plantilla de la inscripción a tu historia de instagram</h2>
                </div>
            </div>           
        </div>
	</body>
	<!-- jQuery library -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   	<script type="text/javascript">
        //Redirecciono a index
        function redireccionar(){
            window.location="https://college.com.uy/mundialusa/";
        }
        setTimeout ("redireccionar()", 4000);
	</script>
</html>