<!DOCTYPE html>
<html lang="es">

<head>
	
	<!-- Meta -->
	<meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, shrink-to-fit=no">
    <meta name="author" content="Gonzalo Pacheco">

    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $description; ?>">

    <!-- Favicon all browsers
    ================================================================================================================== -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144"    href="img/favicon/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"    href="img/favicon/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"      href="img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon-precomposed" sizes="57x57"      href="img/favicon/apple-touch-icon-57x57.png">
    <link rel="shortcut icon" type="image/x-icon"               href="img/favicon/favicon.png">



	<?php 

	    // Detección de dispositivo
		require_once 'php/libraries/Mobile_Detect.php';
		$detect = new Mobile_Detect;
		$screen = "Desktop";
	 
		// Establecemos parámetros

		if ( $detect->isMobile() ) {
	 		$screen = "Mobile";
		}
		
		if ($detect->isTablet() || $detect->isSurfaceTablet() ){
	 		$screen = "Tablet";
		}

		// Hojas de Estilo
		echo "<link href='css/style.css?v=01' rel='stylesheet' type='text/css'  />\n";
			
		if ($screen == "Desktop") {

			echo "<link href='css/desktop.css?v=01' rel='stylesheet' type='text/css' />\n";
		} // endif
	?>

</head>

   
    </head>
    <body>
