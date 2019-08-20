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
define( 'DB_NAME', 'recordagency' );

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
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'VpCpvJL9HhnxeALU^Ux1tQcw2&7B~bA$7{>D8y&~tbEeVjPB5rc|3?/bELH.fXf!' );
define( 'SECURE_AUTH_KEY',  'q]SxN>oe_`&^x~xD@Lwz&|lGeVxt9S<*x^?6o3_(U^GDQWy[N=btZT)Txv2-o-jt' );
define( 'LOGGED_IN_KEY',    'DkR``8dvqt.<4f!.ct3?2r|H%br58H4~~Y^QHjG>_DM>POb2k|0{1?fVO~H)h?&4' );
define( 'NONCE_KEY',        '5d`6oHqkjpkmm~0X|Dv;x}V7rnF6u>sQ(PX)h>ipJTCtQDV<o&$h-wlSP9lc*xQo' );
define( 'AUTH_SALT',        'r q09|s;Z.?N4:}*K!(Dhib`Q{pVq$*E?R7%.*oQgcn73p9|-~8mn)4*?coS2-ue' );
define( 'SECURE_AUTH_SALT', 'fe D(pl3vU_r+5C}AV<s~&VO04O<w^MYb-W 9./X,ruVP[A+*Z+nP}h]xiMcTa^_' );
define( 'LOGGED_IN_SALT',   'kL)0WJg+nZx<CU]8I/oWgd^CEA2Z7??hmF&>W!qsH:@*(IR.k*gWhy?!9SNXdI/)' );
define( 'NONCE_SALT',       '8b}GnY/;F48/7@tV<K~3>r~(>yUjV0RdLq$/-j,id|#kft%ESu1xXOSZ&e9g~hUH' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'ra_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
