<?php
// includes/config.php
// Detect environment and compute a base URL for redirects like header('Location: ...')
// IMPORTANT: do not add trailing slash to BASE_URL


if (!defined('IS_LOCAL')) {
// Local if server name is localhost (XAMPP)
define('IS_LOCAL', isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] === 'localhost');
}


if (IS_LOCAL) {
// Example: http://localhost/YOUR_REAL_LOCAL_PATH/my_site
// If your local path is http://localhost/my_site, then BASE_URL = 'http://localhost/my_site'
define('BASE_URL', 'http://'.$_SERVER['HTTP_HOST'].'/YOUR_REAL_LOCAL_PATH/my_site');
} else {
// Osiris
// Example: https://osiris.ubishops.ca/YOUR_USERNAME
$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';
define('BASE_URL', $scheme.$_SERVER['HTTP_HOST'].'/YOUR_USERNAME');
}