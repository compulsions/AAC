<!DOCTYPE html>
<html <?php language_attributes( );?>>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('name'); ?></title>

	<?php
		if (have_posts()) :
		while (have_posts()) : the_post();

		$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
		endwhile;
		endif;
	?>


    <!-- <meta charset="<?php bloginfo('charset'); ?>"> -->
	<meta property="og:image" content="<?php echo $thumb[0]; ?>" />
    <?php wp_head(); ?>




    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <link href="img/favicon.png" rel="shortcut icon">


</head>
<body <?php body_class(); ?>>

    <?php
    if (! is_home()) {
    ?>

	<header style="margin-bottom:10px;" class="branco">
		<div class="container titulo">
			<div class="aac">
				<div class="col-md-1 col-sm-1 col-xs-12">
					<a href="<?php echo home_url(); ?>">
						<img src="<?php echo get_template_directory_uri()?>/img/aac2.png" alt="aac">
					</a>
				</div>
				<div class="col-md-11 col-sm-10 col-xs-12 txt">
					| <?php bloginfo('name'); ?>
				</div>
			</div>
		</div>

        <?php
            }
        ?>

		<?php

		?>


	</header>
