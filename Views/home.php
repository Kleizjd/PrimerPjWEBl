
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB</title>
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="vendors/css/bootstrap.min.css" type="text/css" media="all" />
    <!-- Index-Page-Styling -->
    <link rel="stylesheet" href="vendors/css/style.css" type="text/css" media="all" />
    
</head>
<body>
    <!-- Header -->
    <div class="header">
        <!-- Navbar -->
        <nav class="navbar navbar-default">
            <div class="container-fluid">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Empresa JD Twins</a>
                </div>

                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hover-effect"><a href="#">Inicio</a></li>
                        <li class="hover-effect"><a href="#about">Nosotros</a></li>
                        <li class="hover-effect"><a href="#features">Caracteristicas</a></li>
                        <li class="hover-effect"><a href="#team">Equipo</a></li>
                        <li class="hover-effect"><a href="#contact">Contactanos</a></li>
                    </ul>
                </div>

            </div>
        </nav>
        <br><br><br><br>
        <audio id="player" src="vendors/songs/TheFatRat.mp3"></audio>
        <div>

            <button onclick="document.getElementById('player').play()">Play</button>
            <button onclick="document.getElementById('player').pause()">Pausa</button>
            <button onclick="document.getElementById('player').load()">Stop</button>
            <button onclick="document.getElementById('player').volume += .1">Subir volumen</button>
            <button onclick="document.getElementById('player').volume -= .1">Bajar volumen</button>

        </div>
    </div>
    <div class="about" id="about">
        <div class="container">
            <div class="about-info">
                <div class="col-md-6 about-info-grid">
                    <div class="about-info-list1">
                        <h5>Consultas</h5>
                        <ul>
                            <li><a href="Views/crear_afiliado.php"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> CREAR UN AFILIADO</a></li>
                            <li><a href="Views/eliminar_empleado.php"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> ELIMINAR UN AFILIADO</a></li>
                            <li><a href="Views/consultarEmpleado.php"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> CONSULTA GENERAL DE AFILIADOS</a></li>
                            <li><a href="Views/codigoEmpleado.php"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> CONSULTA EMPLEADO POR DOCUMENTO</a></li>
                            <li><a href="Views/codigoLiquidar.php"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> LIQUIDAR EMPLEADO POR DOCUMENTO</a></li>
                            <li><a href="Views/Search_Afiliado.php"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>ACTUALIZAR AFILIADO POR DOCUMENTO</a></li>
                        </ul>
                    </div>
                    <div class="about-info-image">
                        <img src="vendors/images/afiliado.png" alt="Corsa Racer">
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

    </div>
    <h1>ACERCA DE NOSOTROS</h1>
	<div class="heading-underline"></div>

	<h3>Bienvenidos a nuestro Sitio web de la empresa donde podran realizar sus diligencias .</h3>
	<h4>Choose what you want to play from more than 10 different racing formats.</h4>
	<!-- //About -->

	<!-- Features -->
	<div class="features" id="features">
		<div class="container">

			<h2>FEATURES</h2>
			<div class="heading-underline"></div>

			<div class="feature-grid">
				<div class="col-md-4 col-sm-4 feature1">
					<div class="row features-item sans-shadow text-center">
						<div class="features-icon">
							<img src="vendors/images/ProgramaA.png" alt="Corsa Racer">
						</div>
						<div class="features-info">
							<h4>Afiliarse vale</h4>
							<p>Programa de Afiliacion<br>donde puedes ganar <br>por estar con nosotros.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 feature1">
					<div class="row features-item sans-shadow text-center">
						<div class="features-icon">
							<img src="vendors/images/articulo.jpg" alt="Corsa Racer">
						</div>
						<div class="features-info">
							<h4>Apertura al mundo</h4>
							<p>Proxima Inaguracion de nuevos Afiliados, que se realizara en los Edificios Centrales</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 feature1">
					<div class="row features-item sans-shadow text-center">
						<div class="features-icon">
							<img src="vendors/images/dbua.png" alt="Corsa Racer">
						</div>
						<div class="features-info">
							<h4>Descuentos </h4>
							<p>Encuentra los mejores descuentos por Afiliacion de familiares </p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 feature1">
					<div class="row features-item sans-shadow text-center">
						<div class="features-icon">
							<img src="vendors/images/normas.png" alt="Corsa Racer">
						</div>
						<div class="features-info">
							<h4>Normas</h4>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 feature1">
					<div class="row features-item sans-shadow text-center">
						<div class="features-icon">
							<img src="vendors/images/world.png" alt="Corsa Racer">
						</div>
						<div class="features-info">
							<h4>Internacional</h4>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 feature1">
					<div class="row features-item sans-shadow text-center">
						<div class="features-icon">
							<img src="vendors/images/multiplayer.png" alt="Corsa Racer">
						</div>
						<div class="features-info">
							<h4>Entretenimiento</h4>

						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>

		</div>
	</div>
	<div class="progressive-effects" id="skills">
		<div class="container">
			<div id="about-us" class="parallax">
			</div>
		</div>
		<!-- Progressive-Effects -->

		<!-- Team -->
		<div class="team" id="team">
			<h3>Equipo</h3>
			<div class="heading-underline"></div>

			<div class="container">
				<div class="grid">
					<figure class="effect-dexter">
						<img src="vendors/images/team-0.jpg" alt="Corsa Racer" />
						<figcaption>

							<h4>José Daniel <span> Grijalba Osorio</span></h4>
							<ul class="social">
								<li><a href="#" class="facebook" title="Go to Our Facebook Page"></a></li>
								<li><a href="#" class="twitter" title="Go to Our Twitter Account"></a></li>
								<li><a href="#" class="googleplus" title="Go to Our Google Plus Account"></a></li>
							</ul>
						</figcaption>
					</figure>
					<figure class="effect-dexter">
						<img src="vendors/images/JUAN.jpg" alt="Corsa Racer" />
						<figcaption>
							<h4>Juan David <span> Grijalba Osorio</span></h4>
							<ul class="social">
								<li><a href="#" class="facebook" title="Go to Our Facebook Page"></a></li>
								<li><a href="#" class="twitter" title="Go to Our Twitter Account"></a></li>
								<li><a href="#" class="googleplus" title="Go to Our Google Plus Account"></a></li>
							</ul>
						</figcaption>
					</figure>
					</figure>
				</div>
			</div>
		</div>
		<!-- //Team -->
		<div class="clearfix"></div>
	</div>
	</div>
	<!-- //Download -->
	<!-- Map-iFrame -->
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.577426099006!2d-76.48268258598058!3d3.4524140521780096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e30a7a2b190fe3d%3A0x79c7e6d72463a314!2sCra.+7t+Bis+%2376-12%2C+Cali%2C+Palmira%2C+Valle+del+Cauca!5e0!3m2!1ses-419!2sco!4v1511539092876" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<!-- //Map-iFrame -->
	<!-- Contact -->
	<div class="contact" id="contact">
		<div class="container">

			<h3>Contactanos</h3>
			<div class="heading-underline"></div>

			<form class="contact_form">

				<div class="message">
					<div class="col-md-6 col-sm-6 grid_6 c1">
						<input type="text" class="text" placeholder="Name" required="">
						<input type="text" class="text" placeholder="Email" required="">
						<input type="text" class="text" placeholder="Phone" required="">
					</div>

					<div class="col-md-6 col-sm-6 grid_6 c1">
						<textarea placeholder="Message" required=""></textarea>
					</div>
					<div class="clearfix"></div>

					<input type="submit" class="more_btn" value="Envia tu Opinion">
				</div>
			</form>

		</div>
	</div>
	<!-- //Contact -->

	<!-- Footer -->
	<div class="footer">
		<div class="container">

			<div class="footer-info">
				<div class="col-md-4 col-sm-4 footer-info-grid links">
					<h4>acceso rapido</h4>
					<ul>
						<li><a href="#about">Nosotros</a></li>
						<li><a href="#features">Caracteristicas</a></li>
						<li><a href="#team">Equipo</a></li>
						<li><a href="#">Inicio</a></li>
					</ul>
				</div>
				<div class="col-md-4 col-sm-4 footer-info-grid address">
					<h4>Direccion</h4>
					<address>
						<ul>
							<li>Alfonzo Lopez III Etapa</li>
							<li>Cali Valle</li>
							<li>Colombia</li>
							<li>Telefono : +5 (314) 707-2792</li>
							<li>Email : <a class="mail" href="mailto:jose.dgo97@gmail.com">info jose.dgo97@gmail.com</a></li>
						</ul>
					</address>
				</div>
				<div class="col-md-4 col-sm-4 footer-info-grid email">
					<h4>Boletin</h4>
					<p>Suscríbase a nuestro boletín y le informaremos sobre los proyectos y promociones más recientes.
					</p>

					<form class="newsletter">
						<input class="email" type="email" placeholder="Tu email...">
						<input type="submit" class="submit" value="">
					</form>
				</div>
				<div class="clearfix"></div>
			</div>

			<div class="connect">
				<div class="connect-social">
					<h4>CONECTATE CON Nosotros</h4>
					<ul>
						<li><a href="http://www.facebook.com" class="facebook" title="Go to Our Facebook Page"></a></li>
						<li><a href="http://www.google.com" class="twitter" title="Go to Our Twitter Account"></a></li>
						<li><a href="#" class="googleplus" title="Go to Our Google Plus Account"></a></li>
						<li><a href="#" class="linkedin" title="Go to Our Linkedin Page"></a></li>
						<li><a href="#" class="blogger" title="Go to Our Blogger Account"></a></li>
						<li><a href="#" class="tumblr" title="Go to Our Tumblr Page"></a></li>
						<li><a href="#" class="rss" title="Go to Our RSS Feed"></a></li>
						<li><a href="#" class="youtube" title="Go to Our Youtube Channel"></a></li>
						<li><a href="#" class="vimeo" title="Go to Our Vimeo Channel"></a></li>
						<li><a href="#" class="deviantart" title="Go to Our Deviantart Page"></a></li>
					</ul>
				</div>
			</div>

			<div class="copyright">
				<p>2017 Empresa. All Rights Reserved | Design by brothers Grijalba </a></p>
			</div>

		</div>
	</div>
</body>
<!-- //Footer -->

	<!-- Custom-JavaScript-File-Links -->
        <!-- Supportive-JavaScript -->
    <script type="text/javascript" src="vendors/js/jquery.min.js"></script>
    <!-- Necessary-JS-File-For-Bootstrap -->
    <script type="text/javascript" src="vendors/js/bootstrap.min.js"></script>

                    <!-- DESPLAZAMIENTO HACIA ARRIBA -->
    <!-- Slide-To-Top JavaScript (No-Need-To-Change) -->
    <script type="text/javascript">
        $(document).ready(function() {
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 100,
                easingType: 'linear'
            };
            $().UItoTop({
                easingType: 'easeOutQuart'
            });
        });
    </script>
    <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 0;"> </span></a>
    <!-- //Slide-To-Top JavaScript -->

    <!-- Smooth-Scrolling-JavaScript -->
    <script type="text/javascript" src="vendors/js/move-top.js"></script>
    <script type="text/javascript" src="vendors/js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll, .navbar li a, .footer li a").click(function(event) {
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
        <!-- //Smooth-Scrolling-JavaScript -->
                        <!-- ! END DESPLAZAMIENTO HACIA ARRIBA -->

	<!-- //Custom-JavaScript-File-Links -->

</html>