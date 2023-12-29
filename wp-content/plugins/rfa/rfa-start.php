<?php
/*
Plugin Name: Restrict File Access
Description: Prevents direct access to certain file types.
Version: 1.0
Author: Codelyfe.github.io
*/

// Prevent direct access to certain file types
function restrict_file_access() {
    $restricted_files = array('.exe', '.dll', '.bat'); // Add file extensions you want to restrict
    $current_uri = $_SERVER['REQUEST_URI'];

    foreach ($restricted_files as $file) {
        if (strpos($current_uri, $file) !== false) {
            http_response_code(403);
            exit;
        }
    }
}
add_action('init', 'restrict_file_access');

