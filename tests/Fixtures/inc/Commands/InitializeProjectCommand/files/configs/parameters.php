<?php

$plugin_name = 'My test app';

$plugin_launcher_path = dirname(__DIR__) . '/';

return [
    'plugin_name' => $plugin_name,
    'plugin_slug' => sanitize_key( $plugin_name ),
    'plugin_version' => '1.0.0',
    'plugin_launcher_file' => $plugin_launcher_path . '/' . basename($plugin_launcher_path) . '.php',
    'plugin_launcher_path' => $plugin_launcher_path,
    'plugin_inc_path' => realpath( $plugin_launcher_path . 'inc/' ) . '/',
    'prefix' => 'my_test_app_',
    'translation_key' => 'mytestapp',
    'is_mu_plugin' => false,
];
