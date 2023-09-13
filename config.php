<?php
// HTTP
define('HTTP_SERVER', 'http://192.168.0.102/');

// HTTPS
define('HTTPS_SERVER', 'http://192.168.0.102/');

// DIR
define('DIR_APPLICATION', 'C:/site/OSPanel/domains/promocode/catalog/');
define('DIR_SYSTEM', 'C:/site/OSPanel/domains/promocode/system/');
define('DIR_IMAGE', 'C:/site/OSPanel/domains/promocode/image/');
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
define('DB_DRIVER', 'mpdo');
define('DB_HOSTNAME', '192.168.0.102');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'test');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');