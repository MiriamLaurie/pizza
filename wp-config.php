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
define( 'WP_CACHE', true );
define('DB_NAME', 'user7487_db');


/** Имя пользователя MySQL */
define('DB_USER', 'user7487_db');


/** Пароль к базе данных MySQL */
define('DB_PASSWORD', "010989emiko");


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
define('AUTH_KEY',         'cP^d_z)]tw|eOfHol,1F *@C`vz3 Y]d<d=Z-,<GcgL]RNBZ``U`-{tN,}jb][bw');

define('SECURE_AUTH_KEY',  '@>7!o~@XXi]`q#I5)wz(jC6L081n>J>D6-BCyZtf{MA8%RD#DM<O2*t~5^#*^6}4');

define('LOGGED_IN_KEY',    ']PKsX>te72PH##[8@$d2yx~&4tuZp2JR+%4o nS+q6pAEB8*9dG_>Cl,`[-lV;|P');

define('NONCE_KEY',        'X(e~j:rsBuoP]HgfLy[rbKaaS@CyrdygF6M 6Mu5QQahQ&thibYgX[,u!I%g@`sA');

define('AUTH_SALT',        'h~5r])ffH?BIp:ZtCcJjDZ~HrYL-S2?5s%RZCs@uKM+PSL1(k}&MjB{?U,~S^Ity');

define('SECURE_AUTH_SALT', '^d/DW$8acbt2PJ{3>Mqk4J$N1Q{{Gn{A9^@+B%pa0,Dic^LAr|xwa4|Z_6ss zc2');

define('LOGGED_IN_SALT',   ' &sh^6p[,*6Tt5&wpo[Zye%%al{:gCR&[)zKiKStXbbi0,#&+3a6f1*BcY,zaZph');

define('NONCE_SALT',       '<a cmNo254QJ%1W0AVAkn9+~:p&%(PP=`1b 0`kMjOy8T>ec+ur;M,v(7k Byu2=');


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
define('WP_DEBUG', true);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
