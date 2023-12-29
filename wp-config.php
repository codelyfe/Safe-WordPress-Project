<?php
// Enable SSL
define('FORCE_SSL_ADMIN', true);
define('FORCE_SSL_LOGIN', true);

// Disable File Edit
define('DISALLOW_FILE_EDIT', true);

// Disable PHP file uploads
define('DISALLOW_FILE_MODS', true);

// Allowed file types for uploads
define('ALLOW_UNFILTERED_UPLOADS', false);

// Disable debugging in production
define('WP_DEBUG', false);

// Set memory limit
define('WP_MEMORY_LIMIT', '256M'); 

// Limit login Attempts
define('WP_LIMIT_LOGIN_ATTEMPTS', true);

// Disable trackback pingback
define('WP_ALLOW_COMMENT_TRACKBACK', false);

// Define CRON job schedule
define('WP_CRON_LOCK_TIMEOUT', 60);

// Set custom temp directory
define('WP_TEMP_DIR', '/path/to/custom/temp/dir');

// Set Database Repair Mode
define('WP_ALLOW_REPAIR', true);

// Define file permissions
define('FS_CHMOD_DIR', (0705 & ~ umask()));
define('FS_CHMOD_FILE', (0604 & ~ umask()));

// Define content dir and URL
define('WP_CONTENT_DIR', '/path/to/your/content');
define('WP_SITEURL', 'https://www.yourdomain.com');

// Define COOKIE domain
define('COOKIE_DOMAIN', 'www.yourdomain.com');

// Limit heartbeat API
define('WP_HEARTBEAT_INTERVAL', 60); // Adjust Heartbeat API interval

// Disable Emoji Support
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_filter('the_content_feed', 'wp_staticize_emoji');
remove_filter('comment_text_rss', 'wp_staticize_emoji');

// Debug Info for Admin Only
if ( isset( $_GET['debug'] ) && $_GET['debug'] == 'true' ) {
    define('WP_DEBUG', true);
    define('WP_DEBUG_DISPLAY', false);
    define('WP_DEBUG_LOG', false);
    define('SCRIPT_DEBUG', false);
    define('CONCATENATE_SCRIPTS', false);
    define('SAVEQUERIES', false);
}

// Enable Cross-Origin Resource Sharing (CORS):
header("Access-Control-Allow-Origin: https://example.com");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");


// Disable WordPress REST API for Unauthenticated Users:
add_filter('rest_authentication_errors', function( $result ) {
    if ( ! is_user_logged_in() ) {
        return new WP_Error( 'rest_disabled', __('The REST API on this site is disabled.'), array('status' => rest_authorization_required_code()) );
        }
        return $result;
});