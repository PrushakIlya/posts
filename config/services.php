<?php

$routes = require_once MAIN_PATH . '/routes/web.php';

$container = new \Prushak\Framework\Container\Container();

$container->add('debug_mode', 'dev');
$container->add('template_path',MAIN_PATH . '/src/Views');
$container->add('compile_dir',MAIN_PATH . '/storage/templates_c');
$container->add('cache_dir',MAIN_PATH . '/storage/cache');

$container->add('env', '/env');

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