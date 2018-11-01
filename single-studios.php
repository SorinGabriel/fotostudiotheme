<?php get_header(); ?>
<?php 
if (have_posts()) :
	while (have_posts()) :	
		$myPost = the_post();
?>
<div class="container-fluid no-padding">
	<div class="paralax" style="background-image: url('<?php echo get_field('imagine_asociata',get_the_id($myPost))['sizes']['large']; ?>');">
		<h2 data-aos="fade-down"><?php the_title(); ?></h2>
	</div>
</div>

<div class="container">

	<div class="studio-details-page">
		<h3>Detalii:</h3>
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
	</div>

	<div class="studio-text">
		<?php the_content(); ?>
	</div>

</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>