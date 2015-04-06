<?php
/**
 * Test suite bootstrap.
 */
require_once 'vendor/autoload.php';

// Path constants to a few helpful things.
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__DIR__) . DS);
define('TESTS', ROOT . 'tests');
define('APP', ROOT . 'tests' . DS . 'test_files' . DS);
define('APP_DIR', 'test_files');
define('TMP', sys_get_temp_dir() . DS);
define('CONFIG', APP . 'config' . DS);
define('WEBROOT', APP);

date_default_timezone_set('UTC');
mb_internal_encoding('UTF-8');
