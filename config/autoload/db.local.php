<?php

return array(
  'doctrine' => array(
    'connection' => array(
      'orm_default' => array(
        'driverClass' =>'Doctrine\DBAL\Driver\PDOMySql\Driver',
        'params' => array(
          'host'     => 'localhost',
          'port'     => '3306',
          'user'     => 'root',
          'password' => '0000',
          'dbname'   => 'jonathanofficial',
          'charset' => 'UTF8',
          'driverOptions' => array (1002 => 'SET NAMES utf8'),
        )
      ),
    'configuration' => array(
      'orm_default' => array(
          'metadata_cache'    => 'array',
          'query_cache'       => 'array',
          'result_cache'      => 'array',
          'hydration_cache'   => 'array',
          'driver'            => 'orm_default',
          'generate_proxies'  => true,
          'proxy_dir'         => 'data/DoctrineORMModule/Proxy',
          'proxy_namespace'   => 'DoctrineORMModule\Proxy',
          'filters'           => array()
      ),
    ),
    'driver' => array(
        'Application_Driver' => array(
            'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
            'cache' => 'array',
            'paths' => array(
                __DIR__ . '/../src/Application/Entity',
            )
        ),
    ),
)));