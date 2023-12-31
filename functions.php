<?php

// Limit login attempts
function limit_login_attempts() {
    $login_attempts = 3; // Set the number of login attempts allowed
    if (isset($_SERVER['HTTP_REFERER']) && strpos($_SERVER['HTTP_REFERER'], 'wp-login.php') !== false) {
        if (!session_id()) {
            session_start();
        }
        if (!isset($_SESSION['login_attempts'])) {
            $_SESSION['login_attempts'] = 0;
        }
        $_SESSION['login_attempts']++;
        if ($_SESSION['login_attempts'] > $login_attempts) {
            wp_die('Login attempts exceeded. Please try again later.');
        }
    }
}
add_action('init', 'limit_login_attempts');

// Enforce HTTPS
function force_https() {
    if (!is_ssl()) {
        wp_redirect('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'], 301);
        exit();
    }
}
add_action('template_redirect', 'force_https');

// Disable XMLRPC
add_filter('xmlrpc_enabled', '__return_false');

// Change Login URL
function change_login_url() {
    return home_url('my-custom-login-url');
}
add_filter('login_url', 'change_login_url');

// Prevent direct access to certain file types
// NOTE: Check out /wp-content/plugins/rfa/ within this git to use this function as a plugin
function restrict_file_access() {
    $restricted_files = array('.exe', '.dll', '.bat'); // Add file extensions you want to restrict
    $current_uri = $_SERVER['REQUEST_URI'];

    foreach ($restricted_files as $file) {
        if (strpos($current_uri, $file) !== false) {
            header('HTTP/1.0 403 Forbidden');
            exit;
        }
    }
}
add_action('init', 'restrict_file_access');
