<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans:300,400,500,700,800&amp;subset=cyrillic-ext" rel="stylesheet">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
	
	<?php
	if( get_post_meta($post->ID, 'meta_title',true)!='' ){
		$title = get_post_meta($post->ID, 'meta_title',true);
	}else{
		$title = get_bloginfo('name');
	}

	if( get_post_meta($post->ID, 'meta_key',true)!='' ){
		$keywords = get_post_meta($post->ID, 'meta_key',true);

	}else{
		$keywords = '';
	}

	if( get_post_meta($post->ID, 'meta_desc',true)!='' ){
		$description = get_post_meta($post->ID, 'meta_desc',true);

	}else{
		$description = '';
	}
	?>
	<meta name="keywords" content="<?=$keywords?>" />
	<meta name="description" content="<?=$description?>" />
	
	<title><?= $title ?></title>
	<?php wp_head(); ?>
	

	<meta name="mailru-domain" content="4WW1CLOX0ZnMFHSA" />

</head>
<body style="background-image: url('<?= get_option('about_main_bgr');?>');">

	<!-- Header -->
	<header id="header" class="header">
		<a href="/" id="logo_link"><img id="logo" src="<?php echo get_template_directory_uri(); ?>/images/fwdpng/1_logo.png" alt=""></a>
		<nav id="nav">
			<ul>
				<li><a href="/#three">Интерьеры</a></li>
				<li><a href="/#one">Био</a></li>
				<!-- <li><a href="/#one">Арт</a></li> -->
				<li><a href="/#contact">Контакты</a></li>

				<!-- <li><a href="tel:+<?php $tel = get_option('about_phone'); $replace=array('-', ' ', '+', '(', ')'); $tel = str_replace($replace, '', $tel); echo $tel; ?>"><?php echo get_option('about_phone'); ?></a></li> -->
			</ul>
		</nav>

		<div class="page-header__burger-wrapper">
			<span class="page-header__burger"></span>
		</div>
	</header>
