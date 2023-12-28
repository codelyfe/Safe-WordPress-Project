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
