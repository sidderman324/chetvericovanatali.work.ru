<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wp_chetvericova');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'd{<9,hBQf+turGnm#*D0/9-W QplWRfAc^0l/$&{rK3ws`|zOzy}[e*b93*^T(~n');
define('SECURE_AUTH_KEY',  'JP1_>1:S|4h3d}1# z-arfXK)A*l}<vfk)/]~f&&IIat9@JH6s]%o%YOHBk5DS*B');
define('LOGGED_IN_KEY',    'r3E<Ce/V@M#&FwJ%1m0kI;qZ*aFTr,HlrJ)*Wt^rcx;Nl@*U:LI2*0lm@b`=290j');
define('NONCE_KEY',        'x+gTmqWHm0Z5M;[/CNAIY;*CZs)Yf4Go]|^qCF*s-A)B&rm ~#Ze} %q,kmcHUs=');
define('AUTH_SALT',        '?,VM@+RH7AL#V^R_CnbZv61hndE+T=:Wr]*kwDU`wA#As+%];We2|eACnh%TXt{T');
define('SECURE_AUTH_SALT', 'rRsjp(,N+>Lr2cY~&Gf-UM2Oec]# mEwZ}MY_lZ?jFlqZt4|A!V{?WhT8Zb_bg3:');
define('LOGGED_IN_SALT',   'k *-[YY_VX76tR]R]%[}1-d7xFvLKi+ZJmcw1;JPY<J}nbze::SZh&D|Oh[rBxfl');
define('NONCE_SALT',       'blWm0PQx+=ZoDXmrG>Ws-M.$4P*xH~?I+4C$S]eEr{DwI~0a{N*/YOCpX$DV]xV?');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
