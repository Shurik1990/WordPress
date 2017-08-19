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
define('DB_NAME', 'my');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '}Zcc5Q7V+Jzhk2|gESz$W6f-69[wbyVX:SpbbKS*!u-O3bQo5-8PrpwpOD7?W++K');
define('SECURE_AUTH_KEY',  'F,qfYi^5?;V! (vCt@E6jZx:`BP9}TCgFJ<W]WtWIX^9rc5D4uOOyQ^xv=Vd}QRn');
define('LOGGED_IN_KEY',    'i]@< 2Ae|5bu%i!QWu}V:^=<>#G2}+zZS=DI,S<N[p:a|WR~|Z2$y)V&1sK|+f3A');
define('NONCE_KEY',        'beu~{Ek|f}8[&DK?6rma|eSm|zOj`+o_Q2MGr7sw[-n;U/<|]ZRidaP9^d8C~)<9');
define('AUTH_SALT',        'X6(0 <R!9k|cW a%otScpY*]US}Kv^Li8<d$/;]3gx|%/m4a+5],*fFWh3y:@7mu');
define('SECURE_AUTH_SALT', '>*:dw_G?Rg* BF,`V34edBnk+$k5[M[R/rq+ta[b?+5j_`?e]aiZSU~P-zFDs-i.');
define('LOGGED_IN_SALT',   'drqVdh`1EI. -KfoR<qIB1{I.C,_{ f7Qs-#|r@Lmo?S_LAZPF{onZ:q4F=#Wmd ');
define('NONCE_SALT',       '9WJIA,pk6Y|}uvhlg0gT~JW-|9p}?d)wQoB2UEo*Jnsr#)U_&MP+*^kq)Q84HE.]');

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
