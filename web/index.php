<?php
/**
 * Bootstrap all the things!
 */

use Symfony\Component\HttpFoundation\Request;

$loader = require_once __DIR__ . '/../lib/vendor/autoload.php';

$kernel = new AppKernel(__DIR__, 'dev', true, $loader);

$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();

$kernel->terminate($request, $response);
