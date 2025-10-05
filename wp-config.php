<?php
define('DB_NAME', 'railway');
define('DB_USER', 'root');
define('DB_PASSWORD', 'nYIARpqfkKJhXbkFvBEefHXSizRaXjba');
define('DB_HOST', 'yamabiko.proxy.rlwy.net:48975');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
$table_prefix = 'wp_';
define('WP_DEBUG', false);

define('WP_HOME', 'https://bh-demo-production-e231.up.railway.app');
define('WP_SITEURL', 'https://bh-demo-production-e231.up.railway.app');

// Nếu server chạy sau proxy (Railway), bắt buộc bật HTTPS thủ công
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $_SERVER['HTTPS'] = 'on';
}

if (!defined('ABSPATH')) {
  define('ABSPATH', __DIR__ . '/');
}
require_once ABSPATH . 'wp-settings.php';
