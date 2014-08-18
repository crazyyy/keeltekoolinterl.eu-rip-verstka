<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

	<!-- dns prefetch -->
	<link href="//www.google-analytics.com" rel="dns-prefetch">

	<!-- meta -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<!-- icons -->
	<link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic&subset=latin,cyrillic,cyrillic-ext' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/jquery.fancybox.css">

	<!-- css + javascript -->
	<?php wp_head(); ?>
	<script>
	!function(){
		// configure legacy, retina, touch requirements @ conditionizr.com
		conditionizr()
	}()
	</script>
    <!--[if lt IE 9]>
	    <script src="<?php echo get_template_directory_uri(); ?>js/html5shiv.js"></script>
	    <script>window.html5 || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"><\/script>')</script>
	<![endif]--> 
</head>
<body <?php body_class(); ?>>

<header>
        <!-- begin #navbar -->
    <div id="navbar">
        <!-- begin .white -->
        <div class="white">
            <div class="wrap">
                <a href="/" id="logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-multilingua-et.png" width="220" height="41" alt=""></a>

                <div class="contactArea">
                    <p class="phone"><strong>Телефон:</strong> (+372) 51 61 173 </p>
                    <p class="email"><strong>Э-почта:</strong> <a href="mailto:info@keeltekoolinterl.eu">info@keeltekoolinterl.eu</a> </p>
     
                </div>
                

        <!--    <div id="langArea">
                    <ul id="langs">
                        <li>
                            <a href="#" class="flag flag-en"></a>
                        </li>
                        <li class="current-item">
                            <a href="#" class="flag flag-et"></a>
                        </li>
                        <li>
                            <a href="http://multilingua.ee/ru/" class="flag flag-ru"></a>
                        </li>
                    </ul>
                </div>
                langArea -->
            </div>
        </div>
        <!-- end .white -->

        <nav class="wrap">
            <?php wpeHeadNav(); ?>
        </nav>
    </div>
    <!-- end #navbar -->