<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

/**
 * @var ClassLoader $loader
 */
$loader = require __DIR__.'/../vendor/autoload.php';

AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

if (!isset($loader->getClassMap()['Puli\\GeneratedPuliFactory'])) {
    // Temporary fix for Puli
    // Composer plugin incompatible with newest composer, see https://github.com/puli/issues/issues/190
    $loader->addClassMap([
        'Puli\\GeneratedPuliFactory' => __DIR__.'/../.puli/GeneratedPuliFactory.php',
    ]);
}

return $loader;
