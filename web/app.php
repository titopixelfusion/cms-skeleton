<?php

use Sonata\PageBundle\Request\RequestFactory;


    /** @var \Composer\Autoload\ClassLoader $loader */
$loader = require __DIR__.'/../app/autoload.php';
include_once __DIR__.'/../app/bootstrap.php.cache';

$kernel = new AppKernel('prod', false);
//$kernel->loadClassCache(); causing problems by tring to load same class multiple times
//$kernel = new AppCache($kernel);

// When using the HttpCache, you need to call the method in your front controller instead of relying on the configuration parameter
//Request::enableHttpMethodParameterOverride();
$request = RequestFactory::createFromGlobals('host_with_path');
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
