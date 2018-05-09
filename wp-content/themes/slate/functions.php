<?php

add_action( 'wp_enqueue_scripts', 'styleConnect' );

function styleConnect(){
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css');
	wp_enqueue_style( 'noscript', get_template_directory_uri() . '/assets/css/noscript.css');
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css');

	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js');
	wp_enqueue_script( 'dropotron', get_template_directory_uri() . '/assets/js/jquery.dropotron.min.js');
	wp_enqueue_script( 'scrollex', get_template_directory_uri() . '/assets/js/jquery.scrollex.min.js');
	wp_enqueue_script( 'font-awesome', get_template_directory_uri() . '/assets/js/skel.min.js');
	wp_enqueue_script( 'util', get_template_directory_uri() . '/assets/js/util.js');
	wp_enqueue_script( 'mainjs', get_template_directory_uri() . '/assets/js/main.js');
}

add_theme_support( 'post-thumbnails' );



// Добавление главного слайдера
add_action( 'init', 'slider_item' ); // Использовать функцию только внутри хука init
function slider_item() {
	$labels = array(
		'name' => 'Слайды',
		'singular_name' => 'Слайд',
		'add_new' => 'Добавить слайд',
		'add_new_item' => 'Добавить новый слайд',
		'edit_item' => 'Редактировать слайд',
		'new_item' => 'Новый слайд',
		'all_items' => 'Все слайды',
		'view_item' => 'Просмотр слайдов на сайте',
		'search_items' => 'Искать слайды',
		'not_found' => 'Слайдов не найдено.',
		'not_found_in_trash' => 'В корзине нет слайдов.',
		'menu_name' => 'Главный слайдер'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'menu_icon' => 'dashicons-images-alt',
		'menu_position' => 4,
		'has_archive' => true,
		'supports' => array( 'title', 'editor', 'thumbnail')
	);
	register_post_type( 'slider', $args);
}


$metabox = array(
	'id' =>	'slider',
	'capability' => 'edit_posts',
	'name' => 'Фото главного слайдера',
	'post_type' => array('slider'),
	'priority' => 'high',
	'args' => array(
		array(
			'id'	=> 'bgr_image',
			'label' => 'Фоновая фотография',
			'type'	=> 'file',
			'placeholder' 	=> 'Фоновая фотография'
		)
	)
);
new trueMetaBox( $metabox );





// Добавление типов работ
// Список типов работ. Карточки с анимацией.
add_action( 'init', 'work_type_item' ); // Использовать функцию только внутри хука init
function work_type_item() {
	$labels = array(
		'name' => 'Тип',
		'singular_name' => 'Тип',
		'add_new' => 'Добавить тип работы',
		'add_new_item' => 'Добавить новый тип',
		'edit_item' => 'Редактировать тип',
		'new_item' => 'Новый тип',
		'all_items' => 'Все типы',
		'view_item' => 'Просмотр типов на сайте',
		'search_items' => 'Искать типы',
		'not_found' => 'Типов работ не найдено.',
		'menu_name' => 'Типы работ'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'menu_icon' => 'dashicons-editor-ul',
		'menu_position' => 5,
		'has_archive' => true,
		'supports' => array( 'title', 'editor')
	);
	register_post_type( 'work_type', $args);
}


$metabox = array(
	'id' =>	'work_type',
	'capability' => 'edit_posts',
	'name' => 'Фото главного слайдера',
	'post_type' => array('work_type'),
	'priority' => 'high',
	'args' => array(
		array(
			'id'	=> 'icon',
			'label' => 'Иконка',
			'type'	=> 'file',
			'placeholder' 	=> 'Выберите иконку'
		)
	)
);
new trueMetaBox( $metabox );








$options = array(
	// yes, slug is the part of the option name, so, to get the value, use
	// get_option( '{SLUG}_{ID}' );
	// get_option( 'styles_headercolor' );
	'slug'	=>	'about',

	// h2 title on your settings page
	'title' => 'Описание и контактая информация',

	// this displayed in admin menu, try to make it short
	'menuname' => 'Обо мне и контакты',

	'capability'=>	'manage_options',

	// WordPress option pages consist of sections, so,
	// at first we create an array of sections and add fields in each section
	'sections' => array(

		// first section
		array(

			// section ID isn't used anywhere, but it is required
			'id' => 'personal',

			// section name is displayed as h2 heading
			'name' => 'Обо мне',

			// and only now the array of fields
			'fields' => array(
				array(
					'id'			=> 'full_name',
					'label'			=> 'Имя и фамилия',
					'type'			=> 'text', // table of types is above
					'default'		=> 'Четверикова Натали'
				),
				array(
					'id'			=> 'about_me',
					'label'			=> 'Обо мне',
					'type'			=> 'textarea', // table of types is above
					'default'		=> 'Я отличный дизайнер!'
				),
				array(
					'id'			=> 'photo',
					'label'			=> 'Фотография',
					'type'			=> 'file', // table of types is above
				),
			)
		),

		// second section
		array(
			'id' => 'contact',
			'name' => 'Контактная информация',
			'fields' => array(
				array(
					'id'	=> 'phone',
					'label' => 'Телефон',
					'type'	=> 'text',
				),
				array(
					'id'	=> 'mail',
					'label' => 'Электронная почта',
					'type'	=> 'text',
				),
				array(
					'id'	=> 'instagram',
					'label' => 'Инстаграм',
					'type'	=> 'text',
				)
			)
		)
	)
);

if( class_exists( 'trueOptionspage' ) )
	new trueOptionspage( $options );






















function show_current_time( $attr ) {
	$param = shortcode_atts ( array (
		'format' => 'h:i:s'
	), $attr );
	return date( $param['format'] );
}
add_shortcode('time','show_current_time');

function heading( $atts, $content ) {
	return '<h2 class="p1">'. $content .'</h2>';
}
add_shortcode('h2','heading');

function loggined_user( $atts, $content = "Зарегистрируйтесь, чтобы увидеть это!") {
	if (is_user_logged_in()) {
		return $content;
	} else {
		$content = "Зарегистрируйтесь, чтобы увидеть это!";
		return $content;
	}
}
add_shortcode('user', 'loggined_user');

/* Функция вывода только части поста */
function do_excerpt($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if (count($words) > $word_limit)
	array_pop($words);
	echo implode(' ', $words).' ...';
}

/* Кастомизация стилей админки */

function login_customize() {
	?>
	<style>
	body{
		background-image: url('/wp-content/themes/custom-theme/images/main-image.jpg');
		background-position: center;
	}
	.login h1 a {
		display: none;
	}
</style>
<?php
}
add_action('login_head','login_customize');

/* Удаление пунктов меню в админке */
function remove_admin_menu() {
	// remove_menu_page('themes.php');
}
add_action('admin_menu', 'remove_admin_menu');

/* Редактирование админки */
function true_alert() {
	echo '<script>

	</script>';
}
add_action('admin_footer', 'true_alert');
