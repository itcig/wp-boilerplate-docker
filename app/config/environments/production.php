<?php
/**
 * Configuration overrides for WP_ENV === 'production'
 */

use Roots\WPConfig\Config;

Config::define('SAVEQUERIES', false);
Config::define('WP_DEBUG', false);
Config::define('WP_DEBUG_NO_WARNINGS', false);
Config::define('WP_DISABLE_FATAL_ERROR_HANDLER', false);
Config::define('WP_DEBUG_DISPLAY', false);
Config::define('SCRIPT_DEBUG', false);

ini_set('display_errors', 0);
ini_set('error_reporting', 'E_NONE');
