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
define('DB_NAME', 'wp-clean-blog.loc');

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
define('AUTH_KEY',         'Hqv=7.3va2:n#.Pamtko]N*&lFL-SiV/*@e~/_(z+6R3O#!p_}n*_wVL[Gr{R<u5');
define('SECURE_AUTH_KEY',  'xsE5EymzRz&ksEc9uZ?a,V8DMMG+|qNZFA[AGfT(+7R@O:TrSly#N8-?}:Rw-s^L');
define('LOGGED_IN_KEY',    'io_##g}dkSa^|9nq;*/NAGar_6T)y*Vkp302$!hP$pws]y$xl+AE6i%[/aOxad`#');
define('NONCE_KEY',        '3ms1F@<_#}mNEPI3T!m/[{<$ct]S.*tU&~An%4:cikVnxD?FwI$Quh3)pJ*|4OQZ');
define('AUTH_SALT',        'cbYPe:t><H6RyN,NOJ69SGh?,N$<.0`e(NidO(M|,$[;^&qFtY&Wv%<;A><$qpOj');
define('SECURE_AUTH_SALT', '$k=$&JE*1|ry9aJ#=@_cyS2/j0k=FeA_`^PFi;E^T0@k{+hsrfkUP zzH-C|pQp;');
define('LOGGED_IN_SALT',   'f&%$|=sJjxBk|B&M%|><4(8#I;F$Yh!H&`Sef;ApnT~GUf(n0(f~(I%MBp*.@nJm');
define('NONCE_SALT',       '9+M|D5b_4Kl ~=)w};qY5$Ck]TtqS&Zs2`8ttVyO`V0uy6HF|Kt[CwL;4gh]$7z9');

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
