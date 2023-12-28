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
