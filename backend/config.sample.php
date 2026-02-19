<?php
/**
 * UNEP DATABASE CONFIGURATION TEMPLATE
 * * INSTRUCTIONS:
 * 1. Copy this file to 'config.php'
 * 2. Update the credentials below for your local environment
 * 3. Ensure 'config.php' is added to your .gitignore file
 */

return [
    'database' => [
        'host' => 'localhost',
        'dbname' => 'unep_db_placeholder',
        'username' => 'your_username_here',
        'password' => 'your_password_here',
        'charset' => 'utf8mb4'
    ],
    'security' => [
        'api_key' => 'generate_secure_key_here',
        'debug_mode' => false // Set to true only for UAT testing
    ]
];