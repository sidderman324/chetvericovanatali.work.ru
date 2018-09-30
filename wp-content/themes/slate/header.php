<!DOCTYPE HTML>
<html>
<head>
	<title>Портфолио - Четверикова</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans:300,400,500,700,800&amp;subset=cyrillic-ext" rel="stylesheet">
	<?php wp_head(); ?>

	<meta name="mailru-domain" content="4WW1CLOX0ZnMFHSA" />

</head>
<body style="background-image: url('<?= get_option('about_main_bgr');?>');">

	<!-- Header -->
	<header id="header" class="alt">
		<a href="/"><img id="logo" src="<?php echo get_template_directory_uri(); ?>/images/fwdpng/3.png" alt=""></a>
		<nav id="nav">
			<ul>
				<li><a href="/#three">Интерьеры</a></li>
				<li><a href="/#one">Биография</a></li>
				<li><a href="/#contact">Контакты</a></li>

				<!-- <li><a href="tel:+<?php $tel = get_option('about_phone'); $replace=array('-', ' ', '+', '(', ')'); $tel = str_replace($replace, '', $tel); echo $tel; ?>"><?php echo get_option('about_phone'); ?></a></li> -->
			</ul>
		</nav>
	</header>
