<?php get_header(); ?>

<div id="carouselMain" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<?php
			$a = 0;

			$QueryOne = new WP_Query( array( 'post_type' => 'post',
																		 	 'posts_per_page' => 3,
																		 'ignore_sticky_posts' => 1,
																	 ) );

			if ( $QueryOne->have_posts() ) : while ( $QueryOne->have_posts() ) : $QueryOne->the_post();
			$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
		?>
		<div class="carousel-item <?php if ($a == 0) { echo 'active'; } ?> img-giunti">
			<img class="d-block" src="<?php echo esc_url($featured_img_url); ?>" alt="First slide">
			<div class="carousel-caption d-block">
				<a href="<?php the_permalink();?>"><h5><?php the_title(); ?></h5></a>
				<a href="<?php the_permalink();?>"><button type="button" class="btn btn-giunti">Leer Más</button></a>
			</div>
		</div>
		<?php
		$a++;
			endwhile;
			wp_reset_query();
			wp_reset_postdata();
			endif;
		?>

	</div>
	<a class="carousel-control-prev" href="#carouselMain" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselMain" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
	<div class="turnos-outer-container">
		<div class="turnos-container">
			<div class="turnos-icon">
				<i class="far fa-calendar-alt"></i>
			</div>
			<div id="dia-turno" class="turnos-info">
				PRÓXIMO DÍA DE TURNO<br>
				<b>%dia% de %mes%</b>
			</div>
		</div>
	</div>
</div>




<div class="container">
	<div class="row">
		<div class="col-md-6 giunti-bg envios-text">
			<i class="fab fa-whatsapp"></i> <p><a target="_blank" href="http://wa.me/5492216054935" rel="noopener">+54 9 221 605 4935</a></p>
		</div>
		<div class="col-md-6 giunti-bg-comp envios-text">
			<i class="fas fa-truck"></i> <p>¡ENVIOS SIN CARGO!</p>
		</div>
	</div>
</div>
</section>

<section id="nosotros" class="container">
<div class="row white-bg">
	<div class="col-lg-6 padding-giunti">
		<img src="<?php echo get_template_directory_uri(); ?>/img/nosotros.png" alt="Nosotros Icono">
		<h2>NOSOTROS</h2>
		<div class="line"></div>
		<p>Farmacia Giunti de Ana Silvia Giunti cuenta con mas de 20 años de experiencia en el mercado de la salud, brindando una amplia gama de productos en farmacia y perfumería. A su vez contamos con servicios de Obras Sociales, Gabinete de Aplicaciones y Control de Presión Arterial.</p>
		<p>Nos ocupamos en estar todo el tiempo actualizados para brindar un mayor bienestar a nuestros clientes. Por ellos hemos incorporado los servicios de mensajería instantánea a través de WhatsApp, consultoría vía web y envíos a domicilio sin cargo.</p>
		<p>Estamos altamente capacitados para evacuar y asesorarlo ante todas las consultas expuestas.</p>
	</div>
	<div class="col-lg-6 grey-bg padding-giunti">
		<img src="<?php echo get_template_directory_uri(); ?>/img/valores.png" alt="Nosotros Icono">
		<h2>VALORES</h2>
		<div class="line"></div>
		<div class="container">
			<div class="row px-3">
				<div class="col-sm-6">
					<i class="far fa-check-circle"></i>
					<h3>Satisfacer necesidades del cliente</h3>
				</div>
				<div class="col-sm-6">
					<i class="far fa-user-circle"></i>
					<h3>Atención personalizada</p>
				</div>
			</div>
			<div class="row px-3">
				<div class="col-sm-6">
					<i class="far fa-star"></i>
					<h3>Servicios innovadores y de calidad</h3>
				</div>
				<div class="col-sm-6">
					<i class="fas fa-users"></i>
					<h3>Trabajo en equipo y compromiso</h3>
				</div>
			</div>
		</div>

	</div>
</div>
</section>

<section>
	<img class="w-100" src="<?php echo get_template_directory_uri(); ?>/img/horizontal.jpg" alt="">
</section>

<section id="servicios">
<div class="container">
	<div class="padding-giunti row grey-bg">
		<div class="col-12">
			<img src="<?php echo get_template_directory_uri(); ?>/img/servicios.png" alt="Servicios Icono">
			<h2>SERVICIOS</h2>
			<div class="line"></div>
		</div>
		<div class="col-12">
			<p>Ofrecemos servicios varios, para que encuentres todo lo que necesitas en un mismo lugar.</p>
		</div>
	</div>
</div>
<div class="container px-0 d-block d-lg-none">
	<div id="servicios-controls" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block" src="<?php echo get_template_directory_uri(); ?>/img/1s.png" alt="First slide">
			</div>
			<div class="carousel-item">
				<img class="d-block" src="<?php echo get_template_directory_uri(); ?>/img/2s.png" alt="Second slide">
			</div>
			<div class="carousel-item">
				<img class="d-block" src="<?php echo get_template_directory_uri(); ?>/img/3s.png" alt="Third slide">
			</div>
			<div class="carousel-item">
				<img class="d-block" src="<?php echo get_template_directory_uri(); ?>/img/4s.png" alt="Third slide">
			</div>
		</div>
		<a class="carousel-control-prev" href="#servicios-controls" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#servicios-controls" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>
<div class="container d-none d-lg-block giunti-bg py-5">
	<div class="row">
		<div class="col-lg-3">
			<img class="d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/1s.png" alt="Third slide">
		</div>
		<div class="col-lg-3">
			<img class="d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/2s.png" alt="Third slide">
		</div>
		<div class="col-lg-3">
			<img class="d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/3s.png" alt="Third slide">
		</div>
		<div class="col-lg-3">
			<img class="d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/4s.png" alt="Third slide">
		</div>
	</div>
</div>

</section>

<section id="trabajamos">
<div class="container">
	<div class="padding-giunti row white-bg">
		<div class="col-12">
			<h2>TRABAJAMOS</h2>
			<div class="line"></div>
		</div>
		<div class="col-12">
			<p>Trabajamos las mejores marcas, para brindar absoluta tranquilidad a todos nuestros clientes.</p>
		</div>
	</div>
</div>
<div class="container px-0">
	<div id="trabajamos-controls" class="carousel slide d-block d-lg-none" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block" src="<?php echo get_template_directory_uri(); ?>/img/marcas/1.jpg" alt="First slide">
			</div>
			<div class="carousel-item">
				<img class="d-block" src="<?php echo get_template_directory_uri(); ?>/img/marcas/2.jpg" alt="Second slide">
			</div>
			<div class="carousel-item">
				<img class="d-block" src="<?php echo get_template_directory_uri(); ?>/img/marcas/3.jpg" alt="Third slide">
			</div>
			<div class="carousel-item">
				<img class="d-block" src="<?php echo get_template_directory_uri(); ?>/img/marcas/4.jpg" alt="Third slide">
			</div>
			<div class="carousel-item">
				<img class="d-block" src="<?php echo get_template_directory_uri(); ?>/img/marcas/5.jpg" alt="Third slide">
			</div>
		</div>
		<a class="carousel-control-prev" href="#trabajamos-controls" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#trabajamos-controls" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<div id="trabajamos-controls-desktop" class="carousel slide d-none d-lg-block" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-inline-block" src="<?php echo get_template_directory_uri(); ?>/img/marcas/1.jpg" alt="First slide">
				<img class="d-inline-block" src="<?php echo get_template_directory_uri(); ?>/img/marcas/2.jpg" alt="First slide">
				<img class="d-inline-block" src="<?php echo get_template_directory_uri(); ?>/img/marcas/3.jpg" alt="First slide">
			</div>
			<div class="carousel-item">
				<img class="d-inline-block" src="<?php echo get_template_directory_uri(); ?>/img/marcas/4.jpg" alt="First slide">
				<img class="d-inline-block" src="<?php echo get_template_directory_uri(); ?>/img/marcas/5.jpg" alt="First slide">
			</div>
		</div>
		<a class="carousel-control-prev" href="#trabajamos-controls-desktop" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#trabajamos-controls-desktop" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>

</section>

<section id="Obras-sociales" class="container">
<div class="padding-giunti row grey-bg">
	<div class="col-12">
		<img src="<?php echo get_template_directory_uri(); ?>/img/obras-sociales.png" alt="Obras sociales Icono">
		<h2>OBRAS SOCIALES</h2>
		<div class="line"></div>
	</div>
	<div class="col-12">
		<p>Trabajamos con:</p>
		<ul class="lista-obras">
			<li>IOMA</li>
			<li>GALENO</li>
			<li>MEDIFE</li>
			<li>OSPE</li>
			<li>UNLP</li>
			<li>CASA</li>
			<li>AMEP</li>
			<li>AMEMOP</li>
			<li>SOEME</li>
			<li>UPCN</li>
			<li>BAPRO</li>
		</ul>
	</div>
</div>
</section>

<section id="Blog" class="container">
<div class="padding-giunti row white-bg">
	<div class="col-12">
		<img src="<?php echo get_template_directory_uri(); ?>/img/blog.png" alt="Blog Icono">
		<h2>BLOG</h2>
		<div class="line"></div>
		<p>Actualizamos el blog con noticias importantes y relevantes para nuestra salud.</p>
	</div>
	<div class="container blog-giunti">
		<div class="row">
			<?php
				$b = 0;
				$QueryTwo = new WP_Query( array( 'post_type' => 'post',
																				 'posts_per_page' => 3,
																				'ignore_sticky_posts' => 1,

																		 ) );

				if ( $QueryTwo->have_posts() ) : while ( $QueryTwo->have_posts() ) : $QueryTwo->the_post();
				$featured_img_url2 = get_the_post_thumbnail_url(get_the_ID(),'front-page');
			?>
			<div class="col-md-4 <?php if ($b > 0) { echo 'd-none d-md-block'; } ?>">
				<div class="post-giunti">
					<img src="<?php echo esc_url($featured_img_url2); ?>" alt="">
					<a href="<?php the_permalink();?>"><h3><?php the_title(); ?></h3></a>
					<p><?php the_excerpt(); ?></p>
					<a href="<?php the_permalink();?>"><button type="button" class="btn btn-giunti">Leer Más</button></a>
				</div>
			</div>
			<?php
				$b++;
				endwhile;
				wp_reset_query();
				wp_reset_postdata();
				endif;
			?>
		</div>
	</div>
</div>
</section>

<section id="Contacto">
<div class="container">
	<div class="padding-giunti row grey-bg">
		<div class="col-12">
			<img src="<?php echo get_template_directory_uri(); ?>/img/contacto.png" alt="contacto Icono">
			<h2>CONTACTO</h2>
			<div class="line"></div>
			<p>¡Ponete en contacto con nosotros!</p>
			<div class="row">
				<div class="col-lg-5 contacto-direccion">
					<i class="fas fa-map-marker-alt"></i> <p><a target="_blank" href="https://www.google.com/maps/place/Farmacia+Giunti/@-34.9176287,-57.9764742,17z/data=!4m13!1m7!3m6!1s0x95a2e62b1f0085a1:0xbcfc44f0547312e3!2sLa+Plata,+Buenos+Aires!3b1!8m2!3d-34.9204948!4d-57.9535657!3m4!1s0x0:0x5cc2914dc721845!8m2!3d-34.9178012!4d-57.9757333" rel="noopener">38 esquina 20, La Plata</a></p>
				</div>
				<div class="col-lg-5 contacto-telefono">
					<i class="fas fa-phone"></i> <p><a target="_blank" href="tel:+5402214243481" rel="noopener">+54 0 221 424 3481</a></p>
				</div>
			</div>

		</div>
	</div>
</div>

<div id="map" class="special">
	<div class="content-b padding-giunti">
		<div class="container centralize">
			<div class="row">
				<div class="col-lg-6 mx-auto py-5">
					<form id="contact-form" method="post" action="contact.php" role="form">
						<div class="messages"></div>
						<fieldset class="form-group">
							<label class="sr-only" for="nombre">Nombre y apellido*</label>
							<input type="text" class="form-control form-control" id="nombre" name="nombre" placeholder="Nombre y Apellido *"  required="required">
						</fieldset>
						<fieldset class="form-group">
								<label class="sr-only" for="mail">Tu email*</label>
								<input type="email" class="form-control form-control" id="mail" name="mail" placeholder="E-mail *" required="required" >
						</fieldset>
						<fieldset class="form-group">
							<label class="sr-only" for="asunto">Decinos que necesitás</label>
							<input type="text" class="form-control form-control m-b-1" id="asunto" name="asunto" placeholder="Asunto">
							<label class="sr-only" for="mensaje">Escribe aqui tu mensaje</label>
							<textarea class="form-control form-control" id="mensaje" name="mensaje"  rows="3" placeholder="Mensaje" required="required"></textarea>
						</fieldset>
						<button type="submit" class="btn btn-secondary-outline btn-block btn-send">Enviar</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</section>

<?php get_footer(); ?>
