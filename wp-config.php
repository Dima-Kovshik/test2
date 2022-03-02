<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wordpress_test2' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(O#>Hc:iEaC,|@I?7Z]7yA*|G4Xv?V{_rsIsl8zv++K`9#wgC)60{q6XdP(UtHS[' );
define( 'SECURE_AUTH_KEY',  '2Is-}4N~TrBzK^_:?~P8@]NR8`!gj3eyf~!<=G,Kw^c&efe3J~~9ec=p8b:eTsdq' );
define( 'LOGGED_IN_KEY',    'V#8Ff&rBk>?4f`uTljKvuh8o*/w!sMr.z([Q(?m3i7O2HT`e@ dn2-0&9Wu,1#f ' );
define( 'NONCE_KEY',        'R@m##T5*J+IB%|LbpMLPZc7l;1WQ/r?rF=Lec;Tc/OJPSU8:W0ZqYZ{glg>lHP<5' );
define( 'AUTH_SALT',        'U{tQEHzB^%8Y3]21*)*}R?6OS4AN>C)Ag1_/]&VT)jr5Pm-qX,q(x3jQ+@a3GRHX' );
define( 'SECURE_AUTH_SALT', 'GrlQOK~zR#>BA:yAnv=9 /,H9yP3=X {{9F1et4f2z~zK&Uc8!iQC)r_Qwpd@O{K' );
define( 'LOGGED_IN_SALT',   'My*_p2?j}p,T6_xe:oSP{Uz%3=,{o9gSAV?Zi$^+15c6`Q?k=02ehm{;K)|rA`^n' );
define( 'NONCE_SALT',       'Y*_-5tgsE0!><4LXH1afesu-Kj|rA/1A@69~emz3=.)o}h/r%,[J[vmL.eYaM] M' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
