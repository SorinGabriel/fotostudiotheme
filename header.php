<!DOCTYPE html>

<head>

	<title>FotoStudio</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

	<script>
		$(document).ready(function(){
			AOS.init();			
		})
	</script>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div class="container">

	<h1 class="logo" data-aos="fade-down" data-aos-delay="300"><i class="fas fa-camera-retro"></i><span><?php echo get_bloginfo('name'); ?></span></h1>

	<nav class="navbar navbar-expand-md navbar-light" data-aos-delay="600" data-aos="fade-down">

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="collapsibleNavbar">
			<ul class="navbar-nav ml-auto mr-auto">

				<?php 
				$menu = wp_get_nav_menu_items('menu-principal');
				global $post;
				$thePostID = $post->ID;
				foreach ($menu as $item) :
				?>
					<li class="nav-item <?php if($thePostID == $item->object_id) echo active; ?>">
					<a class="nav-link" href="<?php echo $item->{'url'};?>"><?php echo $item->{'title'};?></a>
					</li>
				<?php endforeach; ?>

			</ul>
		</div> 

	</nav>

</div>