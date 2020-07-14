<div class="content-wrap" id="participar">

	<!-- Menu -->
	<?php $section = 'participar';
	include "tpl/menu.php"; ?>


	<!-- WRAP PARTICIPAR
    =============================================================================================================== -->
	<div class="wrap-participar">
		<div class="container">
			<div class="row">
				<div class="wrap-formulario">
					<form class="form-participar" role="form" enctype="multipart/form-data">

						<div class="form-box">
							<div class="wrap-logo-mundial">

								<div class="wrap-btn">
									<a class="btn btn-third" id="btn-college-modal-jugar"><span><i class="fa fa-info"></i>¿Cómo Jugar?</span></a>
								</div>

								<img src='img/logo-mundial.png' alt="Mundial de Hinchadas" title="Mundial de Hinchadas" />

								<div class="wrap-btn">
									<a class="btn btn-third" id="btn-college-modal-instagram"><span><i class="fa fa-instagram"></i>Plantilla</span></a>
								</div>
							</div>

							<div class="form-filas">
								<div class="form-columnas">
									<div class="form-group">
										<input type="text" name="nombreUsuario" id="nombreUsuario" required="required"><label class="control-label" for="input">* Nombre y Apellido</label><i class="bar"></i>
									</div>
								</div>
								<div class="form-columnas">
									<div class="form-group">
										<input type="text" name="instagramUsuario" id="instagramUsuario" required="required"><label class="control-label" for="input">* Usuario de Instagram</label><i class="bar"></i>
									</div>
								</div>
							</div>


							<div class="form-filas">
								<div class="form-columnas">
									<div class="form-group">
										<input type="number" name="celularUsuario" id="celularUsuario" required="required"><label class="control-label" for="input">* Celular</label><i class="bar"></i>
									</div>
								</div>
								<div class="form-columnas">
									<div class="form-group">
										<input type="number" name="documentoUsuario" id="documentoUsuario" required="required"><label class="control-label" for="input">* C.I. <small>(sin puntos ni guiones)</small></label><i class="bar"></i>
									</div>
								</div>
							</div>


							<div class="form-filas">
								<div class="form-columnas">
									<div class="form-group">
										<input type="text" name="departamentoUsuario" id="departamentoUsuario" required="required"><label class="control-label" for="input">* Departamento</label><i class="bar"></i>
									</div>
								</div>
								<div class="form-columnas">
									<div class="form-group">
										<input type="text" name="barrioUsuario" id="barrioUsuario" required="required"><label class="control-label" for="input">* Barrio / Localidad</label><i class="bar"></i>
									</div>
								</div>
							</div>


							<div class="form-filas form-filas-full">
								<div class="form-columnas">
									<div class="form-group">
										<input type="text" name="colegioUsuario"id="colegioUsuario" required="required"><label class="control-label" for="input">* Colegio / Liceo</label><i class="bar"></i>
									</div>
								</div>
								<div class="form-columnas">
									<div class="form-group">
										<input type="text" name="cursoUsuario" id="cursoUsuario" required="required"><label class="control-label" for="input">* Año de curso</label><i class="bar"></i>
									</div>
								</div>
								<div class="form-columnas">
									<div class="form-group">
										<input type="text" name="equipoUsuario" id="equipoUsuario" required="required"><label class="control-label" for="input">* Nombre de tu equipo</label><i class="bar"></i>
									</div>
								</div>
							</div>


							<div class="form-filas form-filas-mobile">
								<div class="form-columnas">
									<div class="form-group">
										<input type="text" name="colegioUsuario" required="required"><label class="control-label" for="input">* Colegio / Liceo</label><i class="bar"></i>
									</div>
								</div>
								<div class="form-columnas">
									<div class="form-group">
										<input type="text" name="cursoUsuario" required="required"><label class="control-label" for="input">* Año de curso</label><i class="bar"></i>
									</div>
								</div>
							</div>

							<div class="form-filas form-filas-mobile">
								<div class="form-columnas">
									<div class="form-group">
										<input type="text" name="equipoUsuario" required="required"><label class="control-label" for="input">* Nombre de tu equipo</label><i class="bar"></i>
									</div>
								</div>
							</div>


							<div class="form-filas">
								<div class="form-columnas">
									<div class="form-check">
										<input type="checkbox" name="basesUsuario"><a id="btn-college-modal"><label class="control-label" for="input">* Acepto las Bases y Condiciones</label></a>
									</div>
								</div>
							</div>




							<div class="wrap-btn">
								<button class="btn btn-primary btn-lg" id="btnParticipar"><span><i class="fa fa-send"></i>Participar</span></button>
							</div>
						</div>


					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="college-modal fadeIn animated">
		<div class="wrap-bases">
			<div class="wrap-header-bases">
				<h3>BASES LEGALES DE PARTICIPACIÓN EN LA PROMOCIÓN</h3>
				<a id="btn-close-college-modal" class="btn btn-primary btn-lg"><span><i class="fa fa-close"></i></span></a>
			</div>

			<h3>1.- EMPRESA ORGANIZADORA </h3>

			<p>La empresa College Uruguay, con domicilio en Avenida Brasil 3150, es una organización correspondiente al rubro turístico con orientación al segmento de jóvenes. Estados Unidos (quinceañeras), Bariloche (4º de liceo), Varadero (egresados) y Reino Unido (estudiantes) son los cuatro destinos principales que trabaja la agencia.</p>

			<h3>2.- MECÁNICA </h3>

			<p>La mecánica de la Promoción consiste en la realización de una competencia a través de las historias en la red social Instagram (@college_uy), en donde se invita a diferentes grupos de amigos y amigas que estén cursando 2° de liceo, a inscribirse en la misma y participar por diferentes premios.</p>

			<p>Con los grupos participantes inscriptos, la competencia se llevará adelante a través de una modalidad de eliminación directa (también denominado “mata mata”). Se elaborará un fixture en el cual se detallarán todos los cruces correspondientes (quién juega vs. quién), en donde quedarán definidas las fechas de cada uno de los enfrentamientos. Los mismos se llevarán adelante en votaciones en historias de Instagram, a través de la herramienta “Encuesta”. Cada una de las encuestas estará habilitada por un lapso de 24 horas. En cada enfrentamiento, el equipo que obtenga mayor cantidad de votos será el que continúe en la competencia.</p>

			<p>En caso de haber igualdad de votos en una votación, la misma se definirá a través de un sorteo que se realizará en vivo por Instagram.</p>

			<p>Para inscribirse, cada uno de los integrantes del equipo deberá rellenar el formulario que se encuentra en esta web, indicando los datos correspondientes. Por ejemplo, si un grupo está integrado por 10 amigas, cada una de ellas deberá ingresar al formulario y completarlo.</p>

			<h3>3.- PREMIOS </h3>

			<ul>
				<li>
					<p>#1- Todas las personas que se inscriban en la competencia recibirán un crucero gratuito con destino a Bahamas, en el caso de que decidan viajar con College Uruguay a Estados Unidos en 2021.</p>
				</li>
				<li>
					<p>#2- El equipo ganador de la competencia obtendrá un día más de viaje en Disney, exclusivo para los integrantes.</p>
				</li>
				<li>
					<p>#3- Los equipos que logren llegar a la etapa de Cuartos de Final (momento en el cual quedan únicamente 8 equipos disputando la competencia), obtendrán un premio especial para cada uno de los participantes, el cual se informará próximamente.</p>
				</li>
			</ul>

			<h3>4.- REQUISITOS Y CONDICIONES DE PARTICIPACIÓN </h3>

			<p>Los requisitos de participación son los siguientes: </p>
			<ul>
				<li>
					<p>Podrán participar todas aquellas personas que residan en Uruguay, y que actualmente estén cursando 2° año de liceo.</p>
				</li>

				<li>
					<p>Los participantes podrán integrar como máximo 3 grupos diferentes. Por ejemplo, si me interesa participar con mi grupo de amigas y a su vez con mi grupo de clase, puedo hacerlo.</p>
				</li>

				<li>
					<p>El mínimo de integrantes por grupo es de 2 personas.</p>
				</li>

				<li>
					<p>No hay un límite máximo de integrantes por grupo. Si quiero anotarme con toda mi generación del liceo, puedo realizarlo sin problema.</p>
				</li>

				<li>
					<p>Los datos personales con los que los participantes rellenen el formulario de inscripción deberán ser datos verídicos.</p>
				</li>

				<li>
					<p>Está totalmente prohibido la utilización de bots con el fin de obtener un beneficio a través de votos falsificados. Integrantes de College Uruguay estarán realizando un seguimiento de cada votación, y en el caso de que se detectase la utilización de bots, el equipo correspondiente quedará automáticamente descalificado de la competencia.</p>
				</li>
			</ul>

			<h3>5.- FECHA DE INICIO </h3>

			<p>La fecha de inicio de la competencia se conocerá una vez finalizado el período de inscripción. La misma se comunicará a través de las redes sociales de College Uruguay y por WhatsApp a cada uno de los grupos inscriptos en la competencia.</p>

			<h3>6.- LIMITACIONES </h3>

			<p>Si se evidenciase que cualquiera de los participantes no cumple con los requisitos exigidos en las bases, o los datos proporcionados para participar no fueran válidos, su participación se considerará nula y quedarán automáticamente excluidos de la promoción, perdiendo todo derecho sobre los premios otorgados.</p>

			<p>El premio entregado no podrá ser canjeado por cualquier otro producto ni por dinero. College Uruguay se reserva el derecho, si concurre justa causa y previa comunicación en legal forma, de efectuar cualquier cambio, suspender o ampliar esta promoción.</p>

			<p>Si por cualquier causa el grupo ganador, de cualquiera de los premios, no llegase a viajar con College a USA en 2021, la empresa no deberá indemnizar a dicho grupo de ninguna forma, perdiendo la posibilidad de hacer uso de los mismos.</p>

			<p>La empresa se reserva el derecho de realizar los cruces de forma aleatoria para generar el fixture de la competencia, no pudiendo ningún grupo impugnar dicha elaboración de ninguna forma. Una vez elaborado el fixture, el mismo será publicado para que todos los participantes tengan conocimiento.</p>


			<h3>7.- PROTECCIÓN DE DATOS PERSONALES </h3>

			<p>College Uruguay se toma muy en serio la protección de su privacidad y de tus datos personales. Por lo tanto, tu información personal se conserva de forma segura y se trata con el máximo cuidado.</p>

		</div>
	</div>



	<div class="college-modal-jugar fadeIn animated">
		<div class="wrap-bases">
			<div class="wrap-header-bases">
				<h3>¿CÓMO JUGAR?</h3>
				<a id="btn-close-college-modal-jugar" class="btn btn-primary btn-lg"><span><i class="fa fa-close"></i></span></a>
			</div>


			<h3>Bienvenidos al Mundial de Hinchadas College 2021</h3>
			<p>Si estás en 2° de liceo, te invitamos a que te anotes junto a tu grupo de amigas y juntas participen de esta increíble competencia que se desarrollará a través de encuestas en las historias de nuestro Instagram oficial (@college.uy).</p>
			<p>Para participar, simplemente deberás completar el formulario que aparece a continuación.</p>
			<p>Una vez que estén todos los equipos anotados, crearemos el fixture del Torneo, donde estarán definidos los cruces correspondientes. La modalidad de disputa será de eliminación directa (o mata mata): de la misma forma en que se vienen disputando los diferentes mundiales en Instagram que se han hecho en esta cuarentena.</p>
			<p>¿Con quién me puedo anotar? Con quien vos quieras. Los grupos no tienen límite de personas. La única condición es que estés en segundo de liceo.</p>
			<p>Solamente con el hecho de inscribirte, tendrás un crucero gratis a Bahamas en el caso de que viajes junto a College en tu viaje de 15 a Estados Unidos en el 2021.</p>
			<p>Y, además, el equipo ganador de la competencia tendrá un PREMIO ÚNICO: disfrutarán de un día más de viaje en Disney, exclusivamente para los integrantes del equipo ganador.</p>
			<p>PD. Para confirmar tu inscripción, subí la plantilla que encontrarás en nuestras historias destacadas. Hablale ya a tus amigas y anótate para disfrutar de esta competencia que estará tremenda!</p>
			<p>¿Tenés alguna duda? Tranqui! Nosotros te ayudamos. Escríbenos en el chat en línea que aparece aquí, y pronto te estaremos respondiendo. También podés escribirnos por WhatsApp al 092 655 343.</p>
			<p>Estamos a las órdenes para lo que necesites</p>

		</div>
	</div>


	<div class="college-modal-instagram fadeIn animated">
		<div class="wrap-bases">
			<div class="wrap-header-bases">
				<a id="btn-close-college-modal-instagram" class="btn btn-primary btn-lg"><span><i class="fa fa-close" id="close-color"></i></span></a>
			</div>

			<img src='img/plantilla.png' alt="Plantilla" title="Plantilla" />
		</div>
	</div>
</div>

<script>
	let enviar = document.getElementById('btnParticipar');
	enviar.addEventListener('click', function(e) {
		e.preventDefault();
		var nombreUsuario = document.getElementsByName("nombreUsuario")[0].value;
		var instagramUsuario = document.getElementsByName("instagramUsuario")[0].value;
		var celularUsuario = document.getElementsByName("celularUsuario")[0].value;
		var documentoUsuario = document.getElementsByName("documentoUsuario")[0].value;
		var departamentoUsuario = document.getElementsByName("departamentoUsuario")[0].value;
		var barrioUsuario = document.getElementsByName("barrioUsuario")[0].value;
		var colegioUsuario = document.getElementsByName("colegioUsuario")[0].value;
		var cursoUsuario = document.getElementsByName("cursoUsuario")[0].value;
		var equipoUsuario = document.getElementsByName("equipoUsuario")[0].value;
		window.location= "http://localhost/collegepromo/tpl/send.php?nombreUsuario="
		+nombreUsuario+"&instagramUsuario="
		+instagramUsuario+"&celularUsuario="
		+celularUsuario+"&documentoUsuario="
		+documentoUsuario+"&departamentoUsuario="
		+departamentoUsuario+"&barrioUsuario="
		+barrioUsuario+"&colegioUsuario="
		+colegioUsuario+"&cursoUsuario="
		+cursoUsuario+"&equipoUsuario="
		+equipoUsuario+"";
	})
</script>