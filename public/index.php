<?php

require_once '../vendor/autoload.php';

ini_set('display_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', __DIR__ . '/../logs/error.log');

use App\Core\Config;
use app\core\Main;

Config::load(__DIR__ . '/../.env');
Main::initialize();