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
define( 'DB_NAME', 'drkorotkih_db' );

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
define( 'AUTH_KEY',         ';_!3u<p3e?4c/_:y w)7Z:J8OCG+=]#,<}BmDN]pFFO#C`UA>R(-~X12&qj*-m^n' );
define( 'SECURE_AUTH_KEY',  '9WAYpP:Lf|>s *Le}ZASk47|]1#`X^3gl@NiLSd5N+%}adD3cce-fMuY7wicv,fu' );
define( 'LOGGED_IN_KEY',    's+trO{GWIhw4]~KO[/oWDkhwO900hWJkF<K=>($YSS$v2~,q(|JM~>-lL@?krYjs' );
define( 'NONCE_KEY',        '^5G|pMWA#;urHa H0NXz{h]hMOi&g7G_ U9a`DgG}tmHx~G^|oOnW}_Z!GudrjPi' );
define( 'AUTH_SALT',        '9;I8Yp%TjYUW+5Ld%-XCD(40nz?;Tr5r&? h |<VS`=qbA#*h9@>@9L@d _L[n&d' );
define( 'SECURE_AUTH_SALT', 'y%3,p=jY(]?w-i|.;70}M?>{m1uOWPgv`KB:|JQRr+tRqEuwbBosj/+JuSW|!(2`' );
define( 'LOGGED_IN_SALT',   'B`WJ6IV%-zEvHXo+SuI3y!!R17_5p*owtn#Gy{m%raP!,,yy^ELk{9e.tQfZ&,Gu' );
define( 'NONCE_SALT',       '#jp#_pw.h5([l,Wm2b2=/<?5{9_mmf(HM*q6NoMyJ%5AZu<Wce.-Kl/hJ00_X5>.' );

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
