<?php
/**
* Template Name: Galerie Foto
*
*/
?> 
<?php get_header(); ?>

<div id="photo-gallery">

<div class="container">

	<ul class="gallery">
	<?php 
	$args = array(
	    'post_type'=> 'photos',
	    'orderby'  => 'post_date',
	    'order'    => 'DESC',
	    'posts_per_page' => '-1'
	    );              

	$the_query = new WP_Query( $args );

	if($the_query->have_posts() ) : 
	while ( $the_query->have_posts() ) :
		$myPost = $the_query->the_Post();
	?>
	<li data-toggle="modal" data-target="#myModal<?php echo get_the_id($myPost); ?>"><img src=<?php echo get_field('image',get_the_id($myPost))['sizes']['thumbnail']; ?>></li>

	<div class="modal fade" id="myModal<?php echo get_the_id($myPost); ?>">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">

			<div class="modal-header">
				<h4 class="modal-title"><?php echo get_the_title($myPost); ?></h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<div class="modal-body">
				<img class="full-image" src="<?php echo get_field('image',get_the_id($myPost))['sizes']['large']; ?>">
			</div>

<!-- 			<div class="modal-footer">
			<button type="button" class="btn btn-danger" data-dismiss="modal">Inchide</button>
			</div> -->

			</div>
		</div>
	</div>

	<?php endwhile; endif; ?>
	</ul>

</div>

</div>

<?php get_footer(); ?>