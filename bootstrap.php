<?php

namespace bootstrap;

$zf2Path = false;
if (getenv('ZF2_PATH')) {
    $zf2Path = getenv('ZF2_PATH');
}

if ($zf2Path) {
    include $zf2Path . '/Zend/Loader/AutoloaderFactory.php';

    \Zend\Loader\AutoloaderFactory::factory(array(
        'Zend\Loader\StandardAutoloader' => array(
            'autoregister_zf' => true
        )
    ));
}

require_once 'functions.php';

$config = array(
    'driver' => 'Pdo',
    'dsn'    => 'pgsql:dbname=zf2test;host=127.0.0.1;',
    'username' => 'postgres',
    'password' => '',
    'driver_options' => array(),
);

return new \Zend\Db\Adapter\Adapter($config);
