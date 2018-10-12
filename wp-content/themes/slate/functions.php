<?php

add_action( 'wp_enqueue_scripts', 'styleConnect' );

function styleConnect(){
	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css?v='.time());
	wp_enqueue_style( 'swiper', get_template_directory_uri() . '/assets/css/swiper.css');
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css?v='.time());

	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js');
	wp_enqueue_script( 'swiper', get_template_directory_uri() . '/assets/js/swiper.min.js');
	wp_enqueue_script( 'mainjs', get_template_directory_uri() . '/assets/js/main.js');
}

add_theme_support( 'post-thumbnails' );

remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wp_generator' );

add_action("wp_head", "wp_head_meta_description", 1);

function wp_head_meta_description() {
	global $post;
	if( is_single() ) {
		echo "<meta name=\"description\" value=\"" . esc_attr( get_post_meta( $post->ID, 'portfolio_description', true ) ) ."\" />\n\r";
		echo "<title>" . esc_attr( get_post_meta( $post->ID, 'portfolio_title', true ) ) ."</title>\n\r";
	} elseif( is_front_page() ) {
		echo "<meta name=\"description\" value=\"" . esc_attr( get_post_meta( $post->ID, 'about_description', true ) ) ."\" />\n\r";
		echo "<title>" . esc_attr( get_post_meta( $post->ID, 'about_title', true ) ) ."</title>\n\r";
	}
}

/*
 * Включаем поддержку кастомных полей
 */
function true_custom_fields() {
    add_post_type_support( 'post', 'custom-fields'); // в качестве первого параметра укажите название типа поста
}
add_action('init', 'true_custom_fields');

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
	'name' => 'Главный слайдер',
	'post_type' => array('slider'),
	'priority' => 'high',
	'args' => array(
		array(
			'id'	=> 'bgr_image',
			'label' => 'Фоновая фотография',
			'type'	=> 'image',
			'placeholder' 	=> 'Фоновая фотография'
		),
		array(
			'id'	=> 'text',
			'label' => 'Описание слайда',
			'type'	=> 'text',
			'placeholder' 	=> 'Описание слайда'
		),
	)
);
new trueMetaBox( $metabox );


/*
 * Домполнительные поля для мета-тегов
 */
$metabox = array(

    // ID of the metabox and custom field name prefix
    'id' =>	'meta',

    // Only users with this capability can see the metabox
    'capability' => 'edit_posts',

    // metabox title
    'name' => 'Мета данные страницы',

    // custom post types names, you can use array( 'page', 'post', 'your_type' )
    'post_type' => array('page','portfolio'),

    // metabox position: low | high | default
    'priority' => 'high',

    // array of all metabox input field and their params
    'args' => array(

        /* simple text input */
        array(
            'id'	=> 'title',
            'label' => 'Title',
            'description' => 'Title который будет отображаться для страницы',
            'type'	=> 'text',
        ),

        /* simple text input */
        array(
            'id'	=> 'key',
            'label' => 'Keywords',
            'type'	=> 'text',
        ),

        /* simple text input */
        array(
            'id'	=> 'desc',
            'label' => 'Description',
            'type'	=> 'textarea',
        ),

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
				array(
					'id'			=> 'main_bgr',
					'label'			=> 'Фотография фона',
					'type'			=> 'file', // table of types is above
				),
				array(
					'id'			=> 'main_color',
					'label'			=> 'Цвет фона',
					'type'			=> 'color', // table of types is above
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
					'placeholder' => 'В формате +7 911-222-333-4',
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
				),
				array(
					'id'	=> 'facebook',
					'label' => 'Facebook',
					'type'	=> 'text',
				)
			)
		),

		array(
			'id' => 'meta',
			'name' => 'Мета-теги главной страницы',
			'fields' => array(
				array(
					'id'	=> 'title',
					'label' => 'Title',
					'description' => 'Введите здесь Title страницы',
					'type'	=> 'text',
					'placeholder' 	=> 'Введите Title'
				),
				array(
					'id'	=> 'description',
					'label' => 'Description',
					'description' => 'Введите здесь Description страницы',
					'type'	=> 'text',
					'placeholder' 	=> 'Введите Description'
				)
			)
		)
	)
);

if( class_exists( 'trueOptionspage' ) )
	new trueOptionspage( $options );


// Добавление главного слайдера
add_action( 'init', 'portfolio_item' ); // Использовать функцию только внутри хука init
function portfolio_item() {
	$labels = array(
		'name' => 'Портфолио',
		'singular_name' => 'Работу портфолио',
		'add_new' => 'Добавить работу',
		'add_new_item' => 'Добавить работу',
		'edit_item' => 'Редактировать работу портфолио',
		'new_item' => 'Новая работа',
		'all_items' => 'Все работы портфолио',
		'view_item' => 'Просмотр работ на сайте',
		'search_items' => 'Искать работы',
		'not_found' => 'Работ портфолио не найдено.',
		'not_found_in_trash' => 'В корзине нет работ.',
		'menu_name' => 'Портфолио'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'menu_icon' => 'dashicons-format-image',
		'menu_position' => 4,
		'has_archive' => true,
		'show_in_rest' => true,
		'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt')
		// 'taxonomies' => array('post_tag','category')
	);
	register_post_type( 'portfolio', $args);
}


$metabox = array(
	'id' =>	'portfolio',
	'capability' => 'edit_posts',
	'name' => 'Дополнительная информация о записи',
	'post_type' => array('portfolio'),
	'priority' => 'high',
	'args' => array(
		array(
			'id'	=> 'main_photo',
			'label' => 'Заглавное фото записи',
			'type'	=> 'file',
			'placeholder' 	=> 'Заглавное фото записи'
		),
		// array(
		// 	'id'	=> 'title',
		// 	'label' => 'Title',
		// 	'description' => 'Введите здесь Title страницы',
		// 	'type'	=> 'text',
		// 	'placeholder' 	=> 'Введите Title'
		// ),
		// array(
		// 	'id'	=> 'description',
		// 	'label' => 'Description',
		// 	'description' => 'Введите здесь Description страницы',
		// 	'type'	=> 'text',
		// 	'placeholder' 	=> 'Введите Description'
		// ),
	)
);
new trueMetaBox( $metabox );












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
function remove_admin_submenu_items() {
	remove_menu_page( 'edit.php' );
	remove_menu_page( 'link-manager.php' );
	remove_menu_page( 'edit-comments.php' );
	remove_menu_page( 'themes.php' );
	// remove_menu_page( 'plugins.php' );
	remove_menu_page( 'users.php' );
}
add_action( 'admin_menu', 'remove_admin_submenu_items');

/* Редактирование админки */
function true_alert() {
	echo '<script>

	</script>';
}
add_action('admin_footer', 'true_alert');
