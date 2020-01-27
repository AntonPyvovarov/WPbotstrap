<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">

    <link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/blog/">

    <title><?php bloginfo( 'name' ); ?> |
		<?php is_front_page() ? bloginfo( 'description' ) : wp_title(); ?>
    </title>

    <!-- Bootstrap core CSS -->

    <link href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet">
    <!--	Font-Awesome-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<?php wp_head(); ?>
<!--    style-->
    <style>
        .showcase {
            background: url("<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/showcase.jpg') ?>") no-repeat center center;
        }
    </style>
</head>

<body>

<div class="blog-masthead">
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-dark   ">

			<?php
			wp_nav_menu( array(
				'theme_location'  => 'primary',
				'depth'           => 2,
				'container'       => 'div',
				'container_class' => 'collapse navbar-collapse',
				'container_id'    => 'bs-example-navbar-collapse-1',
				'menu_class'      => 'nav navbar-nav',
				'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
				'walker'          => new WP_Bootstrap_Navwalker(),
			) );
			?>


        </nav>
    </div>
</div>
<section class="showcase">
    <div class="container">
        <h1><?php echo get_theme_mod( 'showcase_heading', 'Custon Bootsrap Wordpress Theme' ) ?></h1>
        <p>
            <?php echo get_theme_mod(
				'showcase_text',
				'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
		                    Adipisci amet at aut esse facere fuga illum in ipsa labore 
		                    laborum minus porro possimus quo reiciendis, rerum sit suscipit totam, 
		                    voluptates.' )
            ?>
        </p>
        <a
                href="<?php echo get_theme_mod( 'btn_url', 'http://test.com' ) ?>"
                class="btn btn-primary btn-lg">
	        <?php echo get_theme_mod( 'btn_text', 'Read More' ) ?>
        </a>
    </div>

</section>
<section class="boxes">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
				<?php if ( is_active_sidebar( 'box1' ) ): ?>
					<?php dynamic_sidebar( 'box1' ); ?>
				<?php endif; ?>


            </div>
            <div class="col-md-4">

				<?php if ( is_active_sidebar( 'box2' ) ): ?>
					<?php dynamic_sidebar( 'box2' ); ?>
				<?php endif; ?>


            </div>
            <div class="col-md-4">

				<?php if ( is_active_sidebar( 'box3' ) ): ?>
					<?php dynamic_sidebar( 'box3' ); ?>
				<?php endif; ?>


            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>


