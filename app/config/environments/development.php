<?php
/**
 * Configuration overrides for WP_ENV === 'development'
 */

use Roots\WPConfig\Config;

Config::define('SAVEQUERIES', true);
Config::define('WP_DEBUG', env('WP_DEBUG'));
Config::define('WP_DEBUG_DISPLAY', true);
Config::define('SCRIPT_DEBUG', true);
Config::define('WP_DEBUG_NO_WARNINGS', env('WP_DEBUG_NO_WARNINGS'));
Config::define('WP_DISABLE_FATAL_ERROR_HANDLER', env('WP_DEBUG_NO_WARNINGS'));

ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);

// Enable plugin and theme updates and installation from the admin
Config::define('DISALLOW_FILE_MODS', false);

// Disable Wordpress 5.2 Fatal Error Protection to prevent emails from being sent while developing
Config::define('WP_DISABLE_FATAL_ERROR_HANDLER', true);