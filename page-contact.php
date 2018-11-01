<?php
/**
* Template Name: Contact
*
*/
?> 
<?php get_header(); ?>

<div class="container">

    <h1 class="entry-title"><?php the_title(); ?></h1>

    <?php 
	while (have_posts())
		the_post(); 
	?>
	<div class="contact-form">
	    <?php the_content(); ?>
	</div>

</div>

<?php get_footer(); ?>