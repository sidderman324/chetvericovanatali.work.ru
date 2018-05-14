<!DOCTYPE HTML>
<html>
<head>
	<title>Untitled</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- <link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed&amp;subset=cyrillic" rel="stylesheet"> -->
	<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans:300,400,500,700,800&amp;subset=cyrillic-ext" rel="stylesheet">
	<!-- <link href="https://fonts.googleapis.com/css?family=Ubuntu+Mono:400,400i,700,700i&amp;subset=cyrillic" rel="stylesheet"> -->
	<?php wp_head(); ?>

	<title><?php echo get_post_meta( get_the_id(), 'portfolio_title', true); ?></title>

</head>
<body>

	<!-- Header -->
	<header id="header" class="alt">
		<nav id="nav">
			<ul>
				<li><a href="/">Главная</a></li>
				<li><a href="/#one">Обо мне</a></li>
				<li><a href="/#two">Типы работ</a></li>
				<li><a href="/#three">Портфолио</a></a></a></li>
				<li><a href="/#contact">Контакты</a></li>

				<li><a href="tel:+<?php $tel = get_option('about_phone'); $replace=array('-', ' ', '+', '(', ')'); $tel = str_replace($replace, '', $tel); echo $tel; ?>"><?php echo get_option('about_phone'); ?></a></li>
			</ul>
		</nav>
	</header>
