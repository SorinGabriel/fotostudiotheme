<?php
/**
* Template Name: Studiouri
*
*/
?> 
<?php get_header(); ?>

<div id="studios">

<div class="container">

	<div class="myStudios">

	<?php 
	$args = array(
	    'post_type'=> 'studios',
	    'orderby'  => 'post_date',
	    'order'    => 'DESC'
	    );              

	$the_query = new WP_Query( $args );

	if($the_query->have_posts() ) : 
	while ( $the_query->have_posts() ) :
		$myPost = $the_query->the_Post();
	?>

	<a href="<?php echo get_post_permalink($myPost); ?>">
	<div class="studio">

		<div class="cover"></div>

		<button class="special-btn btn btn-primary"><i class="fas fa-info-circle"></i> Mai multe informatii</button>

		<div class="studio-image">
			<img src="<?php echo get_field('imagine_asociata',get_the_id($myPost))['sizes']['large']; ?>">
		</div>

		<div class="studio-info">
			<div class="studio-title">
				<h3><?php echo get_the_title($myPost); ?></h3>
			</div>
			<div class="studio-details">
				<ul>
					<?php
					$dimensiune = get_field('dimensiune',get_the_id($myPost));
					if (!empty($dimensiune)) :
					?>
					<li>
						Dimensiune: <?php echo $dimensiune; ?> metrii patrati
					</li>
					<?php 
					endif;
					$tip = get_field('tip',get_the_id($myPost));
					if (!empty($tip)) :
					?>
					<li>
						Tip: <?php echo $tip; ?>
					</li>
					<?php 
					endif;
					$adancime_zona_de_lucru = get_field('adancime_zona_de_lucru',get_the_id($myPost));
					if (!empty($adancime_zona_de_lucru)) :
					?>
					<li>
						Adancime zona de lucru: <?php echo $adancime_zona_de_lucru; ?> metrii
					</li>
					<?php 
					endif;
					$lungime_zona_de_lucru = get_field('lungime_zona_de_lucru',get_the_id($myPost));
					if (!empty($lungime_zona_de_lucru)) :
					?>
					<li>
						Lungime zona de lucru: <?php echo $lungime_zona_de_lucru ?> metrii
					</li>
					<?php
					endif;
					$inaltime = get_field('inaltime',get_the_id($myPost));
					if (!empty($inaltime)) :
					?>
					<li>
						Inaltime: <?php echo $inaltime; ?> metrii
					</li>
					<?php
					endif;
					$alimentare_electrica = get_field('alimentare_electrica',get_the_id($myPost));
					if (!empty($alimentare_electrica)) :
					?>
					<li>
						Alimentare Electrica: <?php echo $alimentare_electrica; ?>
					</li>
					<?php
					endif;
					?>
				</ul>
				<button class="mobile-btn btn btn-primary"><i class="fas fa-info-circle"></i> Mai multe informatii</button>
			</div>
		</div>

	</div>
	</a>

	<?php endwhile; endif; ?>

	</div>

</div>

</div>

<?php get_footer(); ?>