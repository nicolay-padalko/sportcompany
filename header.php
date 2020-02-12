<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sport_Company
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Cabin" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'sportcompany' ); ?></a>

	<header>
    <div class="container ">
        <div class="row  ">
            <div class="col-sm-5 offset-1">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.jpg" width="200" height="100" alt="">
            </div>
            <div class="col-sm-3 mt-5">
                <p class="d-none d-lg-block">contato@sport-company.com</p>
            </div>
            <div class="col-sm-3 mb-4">
                <button class="btn btn-dark d-none d-lg-block" data-toggle="modal" data-target="#logInModal">Login Cliente</button>
            </div>

        </div>
    </div>

 <nav class="navbar navbar-expand-lg ">
    <div class="container">
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon"><i class="fa fa-navicon"></i></span></button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ">
            <li class="nav-item">
                <a class="nav-link" href="http://www.sport-company.com/home/">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://www.sport-company.com/#galeria">Programa Sob Medida</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="http://www.sport-company.com/clubes">Clubes/ Hotéis</a>
                    <a class="dropdown-item" href="http://www.sport-company.com/condominio/">Condomínios</a>
                    <a class="dropdown-item" href="http://www.sport-company.com/eventos">Eventos</a>
                    <a class="dropdown-item" href="http://www.sport-company.com/voce">Para você</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://www.sport-company.com/condominio/">Condomínios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://www.sport-company.com/#atividades">Atividades</a>
            </li>
            <li class="nav-item color--lime ">
                <a class="nav-link" href="http://www.sport-company.com/#complementares">Serviços Complementares</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://www.sport-company.com/historia">Nossa Historia</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://www.sport-company.com/trabalhe">Trabalhe Conosco</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact">Contato</a>
            </li>
        </ul>
        </div>
    </div>
</nav>

	
	<!-- <?php
		wp_nav_menu( array(
			'theme_location' 	=> 'primary',
			'container'			=> 'nav',
			'container_class'	=> 'navbar-collapse collapse',
			'menu_class'		=> 'nav navbar-nav navbar-right'
			
		));
		?> -->

   

</header>
