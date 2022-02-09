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

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'glases_bd' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
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
define( 'AUTH_KEY',         'Fu?.<sw|vK|)<l7=|FR>Tt5jVI=!s.OWIV()z3&&+.D28f^IX#ie6*mHK50d!Y_+' );
define( 'SECURE_AUTH_KEY',  'hw84X/2P)]z<9_nQJtp=7F ~SZe#e2-$0J+.SS%PTjYAwFX4-PGurtsrmlO7]0=D' );
define( 'LOGGED_IN_KEY',    '#}f^Zj/|F#(PU7@?+,Lmf#A(Y9ieczQNgT,Qh&85?CQCJOZHS2;Qe067RWGzbJP^' );
define( 'NONCE_KEY',        ')irO|Y)O*7qI4+mBT(1][R1Sirk+N>|RzEPyI,:WwL/h+ylf]cD>}3[sfBTP=lk3' );
define( 'AUTH_SALT',        'nkS1~-[,j.#^!AW&i.gv2#|< `R2*U>>hGU5e,u&sXJH[&MYd^iTXaelv^z`]o2a' );
define( 'SECURE_AUTH_SALT', '?W8XeTq2N:UuAE@;f&%gp/J77O4;5>qAJ|N|Kth8Hc/5-83B<cW3:]r(qJdohT~{' );
define( 'LOGGED_IN_SALT',   'o!=x&,=YTbpYwoPaam9jX>PNI6oPzA;BdDjIx& l#?a?61a:pjBq1mNO?C`S3u}%' );
define( 'NONCE_SALT',       'aUA])HDN@wx52XSn(`By{C&~gM`!W+Qg*cShr&/s !0>@=<NoRjP}Z=4*eW#a!t1' );

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
