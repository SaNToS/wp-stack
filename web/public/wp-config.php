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
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'wordpress' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'wordqwe123' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         '6}|}{0h7CH GxuFP>^mvvfp_Yw}MP<^fk$NV+Ba#u&UD{/Jq?<5csG5/[R?,~o*o' );
define( 'SECURE_AUTH_KEY',  'uTMAGk6JlR.`m&x+Hb`7/^,Q},[*SBk;x0g9qR6,V1$Y#KH)XcV 3u,<:zPLSkvX' );
define( 'LOGGED_IN_KEY',    'St+Gb<flajw#Zb77V:%MDf0#oZ/$>xR.YyEw.H^WzX;ri?uEhN>9B?Jz:sMI.kS)' );
define( 'NONCE_KEY',        'LZjTeqi_QW@|vqZ qt1aGMUw!O{GV<!C<tF&4Jf#r^AuR5xlQj`~iGivCIXQxoHB' );
define( 'AUTH_SALT',        'no,k)7?FLfi]cwo 0p?%d%o$Wf&rZ`L6m|VkC+/P+Br=J*H1hfLtE0%fP7?]jGC.' );
define( 'SECURE_AUTH_SALT', 'h;Y6sL_XA-Y||:LR6lv9N4G@TB#j9h+VX}TKUH$`& &+b7SP(}Dk%peSt)$L0137' );
define( 'LOGGED_IN_SALT',   '.BpJvjVvp2uxSHGfAQ!3fU/rR$#eSerz6=mlGcZ7Mx:}L94|`.wQqsg9+gyn2]Hd' );
define( 'NONCE_SALT',       '^CwSaE/g@<%%$huNkL5/UCMO8N+@%#D8]C[GlH@)DeBYIu685[:ky&!oTXB)$qMV' );

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
