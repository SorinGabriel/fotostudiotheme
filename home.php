<?php
/**
* Template Name: Homepage Template
*
*/
?> 
<?php get_header(); ?>

<div class="container-fluid">

  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
           width="0" height="0" viewBox="0 0 1366 768" xml:space="preserve">
  <!-- Gaussian blur filter progression to animate -->
	  <defs>
	    <filter id="blur0">
	      <feGaussianBlur in="SourceGraphic" stdDeviation="0 0" />
	    </filter>
	    <filter id="blur1">
	      <feGaussianBlur in="SourceGraphic" stdDeviation="5 0" />
	    </filter>
	    <filter id="blur2">
	      <feGaussianBlur in="SourceGraphic" stdDeviation="12 0" />
	    </filter>
	    <filter id="blur3">
	      <feGaussianBlur in="SourceGraphic" stdDeviation="20 0" />
	    </filter>
	    <filter id="blur4">
	      <feGaussianBlur in="SourceGraphic" stdDeviation="35 1" />
	    </filter>
	    <filter id="blur5">
	      <feGaussianBlur in="SourceGraphic" stdDeviation="50 1" />
	    </filter>
	  </defs>
	</svg>

	<div class="slider">
		<?php 
		$args = array(
		    'post_type'=> 'photos',
		    'orderby'  => 'post_date',
		    'order'    => 'DESC'
		    );              

		$the_query = new WP_Query( $args );

		if($the_query->have_posts() ) : 
			while ( $the_query->have_posts() ) :
		?>
				<div>
				    <img src="<?php echo get_field('image',get_the_id($the_query->the_post()))['sizes']['large']; ?>" alt="">
				</div>
		<?php
			endwhile;
		endif;
		?>
	</div>

	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
	<script src='https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js'></script>

	<script  src="<?php echo get_template_directory_uri(); ?>/js/carousel.js"></script>

</div>

<?php get_footer(); ?>