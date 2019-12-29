<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
		  window.fbAsyncInit = function() {
		    FB.init({
		      appId            : '2091415484409457',
		      autoLogAppEvents : true,
		      xfbml            : true,
		      version          : 'v3.1'
		    });
		  };

		  (function(d, s, id){
		     var js, fjs = d.getElementsByTagName(s)[0];
		     if (d.getElementById(id)) {return;}
		     js = d.createElement(s); js.id = id;
		     js.src = "https://connect.facebook.net/en_US/sdk.js";
		     fjs.parentNode.insertBefore(js, fjs);
		   }(document, 'script', 'facebook-jssdk'));
		</script>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>
		<div class="container-fluid px-0 py-1  giunti-bg sticktop fixed-top d-none d-lg-flex sticky-top-opacity">
			<div class="container">
				<div class="logo-container">
					<h1 class="sr-only">Giunti</h1>
					<nav class="navbar navbar-expand-lg navbar-light justify-content-between">
						<a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-r.png" alt="Farmacia Giunti"></a>
							<ul class="navbar-nav d-none d-lg-flex">
								<li class="nav-item">
									<a class="nav-link" href="<?php echo home_url(); ?>">INICIO <span class="sr-only">(current)</span></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="<?php echo home_url(); ?>#nosotros">NOSOTROS</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="<?php echo home_url(); ?>#servicios">SERVICIOS</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="<?php echo home_url(); ?>#Obras-sociales">OBRAS SOCIALES</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="<?php echo home_url(); ?>#Blog">BLOG</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="<?php echo home_url(); ?>#Contacto">CONTACTO</a>
								</li>
							</ul>
					</nav>
				</div>
			</div>
		</div>
		<div class="container px-0 giunti-shadow">
		<section id="main">
			<nav class="nav-horarios">
				<div id="horarios" class="horario">
					<div id="lun">
						<i class="far fa-clock"></i> <b>LUN A VIE</b> 7:30 - 13:30 / 15:30 - 20:30
					</div>
					<div id="sab">
						<i class="far fa-clock"></i> <b>SÁBADOS</b> 8:00 - 20:00
					</div>
					<div id="dom">
						<i class="far fa-clock"></i> <b>DOM Y FERIADOS</b> 9:00 - 13:00
					</div>
				</div>
				<div class="direccion-top">
					<i class="fas fa-map-marker-alt"></i> <p><a target="_blank" href="https://www.google.com/maps/place/Farmacia+Giunti/@-34.9176287,-57.9764742,17z/data=!4m13!1m7!3m6!1s0x95a2e62b1f0085a1:0xbcfc44f0547312e3!2sLa+Plata,+Buenos+Aires!3b1!8m2!3d-34.9204948!4d-57.9535657!3m4!1s0x0:0x5cc2914dc721845!8m2!3d-34.9178012!4d-57.9757333" rel="noopener">38 esquina 20, La Plata</a></p>
				</div>
				<div class="telefono-top d-none d-lg-block">
					<i class="fas fa-phone"></i> <p><a target="_blank" href="tel:+5402214243481" rel="noopener">+54 0 221 424 3481</a></p>
				</div>
				<div class="social-icons d-none d-lg-block">
					<a target="_blank" href="https://www.facebook.com/farmaciagiuntiok/" rel="noopener"><i class="fab fa-facebook-square"></i></a>
					<a target="_blank" href="https://www.instagram.com/farmaciagiunti/" rel="noopener"><i class="fab fa-instagram"></i></a>
				</div>
			</nav>
			<div class="logo-container giunti-bg">
				<h1 class="sr-only">Giunti</h1>

				<nav class="navbar navbar-expand-lg navbar-light justify-content-between">
					<a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo2.png" alt="Farmacia Giunti"></a>
						<ul class="navbar-nav d-none d-lg-flex">
							<li class="nav-item">
								<a class="nav-link" href="<?php echo home_url(); ?>">INICIO <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo home_url(); ?>#nosotros">NOSOTROS</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo home_url(); ?>#servicios">SERVICIOS</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo home_url(); ?>#Obras-sociales">OBRAS SOCIALES</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo home_url(); ?>#Blog">BLOG</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo home_url(); ?>#Contacto">CONTACTO</a>
							</li>
						</ul>
				</nav>
			</div>
