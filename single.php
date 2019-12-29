<?php get_header();
	if (have_posts()): the_post();
	$categoryPostActual = array();
	foreach((get_the_category()) as $category){
		array_push($categoryPostActual, $category->term_id );
			}
		$QueryInteresarte = new WP_Query( array('post_type' => 'post',
																	 					'posts_per_page' => 3,
																						'ignore_sticky_posts' => 1,
																						'post__not_in' => array($post->ID),
																						'category__in' => $categoryPostActual
																 				) );


?>

<div class="turnos-outer-container d-none">
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


	<div class="img-post">
		<?php the_post_thumbnail('full'); // Fullsize image for the single post ?>
	</div>
	<div class="single-post container">


			<h2 class="pb-3">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h2>

			<div class="single-line"></div>
			<div class="single-text">
				<?php the_content(); // Dynamic Content ?>
			</div>
			<div class="single-line"></div>

			<div class="share d-flex">
				<p>Compartir:</p>
				<div class="ic" id="shareBtn">
					<a href="#"><i class="fab fa-facebook-square"></i></a>
				</div>
				<script>
					document.getElementById('shareBtn').onclick = function() {
						FB.ui({
							method: 'share',
							display: 'popup',
							href: '<?php the_permalink();?>',
						}, function(response){});
					}
				</script>
				<div class="ic">
					<a target="popup" onClick="window.open(this.href, this.target, 'width=500,height=320')" href="http://twitter.com/share?text=<?php the_title(); ?>&via=FarmaciaGiunti"><i class="fab fa-twitter"></i></a>
				</div>
			</div>

			<div class="single-line"></div>

			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

	</div>

	<?php endif; ?>

	<div class="container py-3">
		<div class="row">
			<?php

			if ( $QueryInteresarte->have_posts() ) : while ( $QueryInteresarte->have_posts() ) : $QueryInteresarte->the_post();

				$featured_img_url2 = get_the_post_thumbnail_url(get_the_ID(),'front-page');
			?>
			<div class="col-md-4">
				<div class="post-giunti">
					<img src="<?php echo esc_url($featured_img_url2); ?>" alt="">
					<a href="<?php the_permalink();?>"><h3><?php the_title(); ?></h3></a>
					<p><?php the_excerpt(); ?></p>
					<a href="<?php the_permalink();?>"><button type="button" class="btn btn-giunti">Leer Más</button></a>
				</div>
			</div>
			<?php endwhile; wp_reset_postdata(); endif; ?>
		</div>
	</div>


<?php get_footer(); ?>
