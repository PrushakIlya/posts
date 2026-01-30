<?php

$routes = require_once MAIN_PATH . '/routes/web.php';

$container = new \Prushak\Framework\Container\Container();

$container->add('debug_mode', APP_ENV);
$container->add('template_path',MAIN_PATH . '/templates');
$container->add('compile_dir',MAIN_PATH . '/templates_c');
$container->add('cache_dir',MAIN_PATH . '/cache');

$container->add('connect_db', require_once (MAIN_PATH . '/config/connect_db.php'));

$container->add('routes', $routes);
$container->add(\Prushak\Framework\Routing\RouterInterface::class, \Prushak\Framework\Routing\Router::class);
$container->add(\Prushak\Framework\Container\Psr\ContainerInterface::class, $container);
$container->add('container', $container);
$container->add(\Prushak\Framework\Http\Kernel::class);
$container->add(\Prushak\Framework\Console\Kernel::class);
$container->add('base-commands-namespace', 'Prushak\Framework\Console\Command\\');

$container->add('smarty', new \Smarty\Smarty());

return $container;