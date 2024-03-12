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
define( 'DB_NAME', 'lpk_wp' );

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
define( 'AUTH_KEY',         'pp+;k|M{Iv)2vyIwOyv<c?#XK@e Im~ 8BTGlao<KvA9R/o|T![qZE?qd[aGyKDB' );
define( 'SECURE_AUTH_KEY',  'r/@Q+3O|6Lxo7,Z}Z<V>d$=rRGM>t2;7eKN+cceN@:Bq|O_UlxkwtvB,2JMQX3.T' );
define( 'LOGGED_IN_KEY',    '7H%%R|0rzym#WAH1kXZIwc&<Dx]H?#SaFE|`V$~4Y|@dx CCo*[OBV;mKY]=0%_j' );
define( 'NONCE_KEY',        '/Df1-N,S|@gRP^;%6pe&3)ii3`4wwZBUGJjobYH2cgMu:Sog.&T{oTFpN>HCM/2g' );
define( 'AUTH_SALT',        'dCWGn=,Q!Ml7Xj_V-/.;>x?d/Zt[OYOf<j=;O&-)Ta7x?[fmi%tDnerVF9R7f1o+' );
define( 'SECURE_AUTH_SALT', 'KKAM6 *5:/QFFm?UPYz_!SBP~NP=T9D^huL;fqAt2c?e~2*2Lf}KCd{FAPxDHG~q' );
define( 'LOGGED_IN_SALT',   'Wy5r@]^AOQ$)7}*Yy_p3a|;ziYB}idB&I%[&L>z0.Vqm_TW4Z7n.%m}[IVPB@Et?' );
define( 'NONCE_SALT',       'uq8Lw<NX_c:_7}}w1g;Fw)np/Fcc>R]~Q<NTIKxMMpJ8@Ye[8:PXOpSO{%9Ei^^`' );

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
