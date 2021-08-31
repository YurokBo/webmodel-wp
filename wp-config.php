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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'webmodel' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '5P(1V*xJ= &IdNI6`[l^27Tw+Jj8h0z{NcuK9[]lRwzP| UNdTGdu9aVU3P VPxp' );
define( 'SECURE_AUTH_KEY',  'UKm9W19PdkG>|!X~ZBd0Ys8x58!ibKq7Q` 0YDGDPg5uTz6idIma(Df/1F@<=H0&' );
define( 'LOGGED_IN_KEY',    'Zm:a06@%T]}-_=@S`v0A7ssuQhP4Z@2U2,],p%>1K7ej_i`eo.vo:49~4Tt|ZxVO' );
define( 'NONCE_KEY',        '0P(@&d_Sr%^5CHy!i*RI$wpddL 2Q$a/(o((VQO1q~S[M-m{&F]}&UvD2_!h1bBM' );
define( 'AUTH_SALT',        'H8lQ3)#W4{s&iQ]N$RnW9%edhUSk_5<BRJ?_*Zw,<>ne&)4nIis3S&< xBMXe:dK' );
define( 'SECURE_AUTH_SALT', '`jRFe])k(d_|BVvH_{wF`?aI`oX,a+;URO?ZxP?!Dd:Y)q&0?QjC)jfhj9cb6M~Z' );
define( 'LOGGED_IN_SALT',   'k5xDn.5&goBPf3t^4?Og# H.,%3?6#`bU7U0A)++{ka3H=Axua:fdKc5~ nZcMHS' );
define( 'NONCE_SALT',       '~Vp=XN(y#x5RC=2+aT8,KriVD`71[@1nS5ZK>N9^#DUJAw0T{E3&<y}(Pz?2|*cU' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
