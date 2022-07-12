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
 * * Настройки базы данных
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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         'DSFUOn%S!KW,B,=8aVJ*Z]G?2O{.3nolqVi@I[#|-(w:o}qkNaMedBpF7i5l8%O%' );
define( 'SECURE_AUTH_KEY',  'Ha%@aEu4jv=T`5x:NwJzIn341)iiHK.YmpJZ-HHkAGD#v>/x7Q^M+dg!Y`m1P6@L' );
define( 'LOGGED_IN_KEY',    'o]gYoT$%;COAV=TJGZhG@-n]?Ag?[GvK&lZODQWs3eio=B(nqyNL9ECf8Nma28xY' );
define( 'NONCE_KEY',        '4c)PkzvSvGJ1k/n-TD1HGi;}Ru0JU%gt<]TO9`suzz8e7[SLPDUx<BKb$m7t9LWr' );
define( 'AUTH_SALT',        '.3~:E+u=o+r7lcO^|nC8FYu4j{=rxi!8+##^!,AUWj~n:(lE^!6nf=l&g1L;5snZ' );
define( 'SECURE_AUTH_SALT', '>h3DAJ,(zCUUPfq%opCP!$E@6iUbWI`|/6NFE8tpK2$w>{h1.:u#zC4h{w8b>FY~' );
define( 'LOGGED_IN_SALT',   'W#1AvLjZL/b1_o5)T/hqA#an&@?7N0pf;QEQ@DcNC)P ZbhL/P/>F)i;sXuSpE3.' );
define( 'NONCE_SALT',       'vZHTb!*3LobE^1F*oLe7d5OF/L(H@f@*q3,s+zKY~tIWM8z?*sv4Ol:^8-/_;SKI' );

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
