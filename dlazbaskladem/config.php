<?php
// HTTP
define('HTTP_SERVER', 'http://dlazbaskladem.workshop.ru.com/');

// HTTPS
define('HTTPS_SERVER', 'http://dlazbaskladem.workshop.ru.com/');

// DIR
define('DIR_APPLICATION', '/var/www/u0851676/data/www/dlazbaskladem.workshop.ru.com/catalog/');
define('DIR_SYSTEM', '/var/www/u0851676/data/www/dlazbaskladem.workshop.ru.com/system/');
define('DIR_IMAGE', '/var/www/u0851676/data/www/dlazbaskladem.workshop.ru.com/image/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'u0851676_default');
define('DB_PASSWORD', 'tP!1eD!a');
define('DB_DATABASE', 'u0851676_dlazbaskladem');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');