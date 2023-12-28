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
