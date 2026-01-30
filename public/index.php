<?php

declare(strict_types=1);

ini_set ('display_errors', 1);
ini_set ('display_startup_errors', 1);
error_reporting (E_ALL);

use Prushak\Framework\Http\Kernel;
use Prushak\Framework\Http\Request;

define('MAIN_PATH', dirname(__DIR__));

require_once MAIN_PATH . "/vendor/autoload.php";

require_once MAIN_PATH . "/env.php";

$container = require_once MAIN_PATH . "/config/services.php";

$request = Request::createFromGlobals();

$kernel = $container->get(Kernel::class);

$response = $kernel->handle($request);



