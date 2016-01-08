<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

error_reporting(error_reporting() & ~E_USER_DEPRECATED);

/**
 * @var ClassLoader $loader
 */
$loader = require __DIR__.'/../vendor/autoload.php';


// $loader->registerNamespaces(array(
//     'FOS'              => __DIR__.'/../vendor/bundles',
//     'Sonata'           => __DIR__.'/../vendor/bundles',
//     'Application'      => __DIR__,
//     'Knp'              => array(
//                           __DIR__.'/../vendor/bundles',
//                           __DIR__.'/../vendor/knp/menu/src',
//                           ),
// ));

AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

return $loader;
