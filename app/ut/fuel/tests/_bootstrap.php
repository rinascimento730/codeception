<?php
// This is global bootstrap for autoloading
$kernel = AspectMock\Kernel::getInstance();
$kernel->init([
	'debug'        => true,
    'includePaths' => [__DIR__.'/../app'],
    'excludePaths' => [__DIR__.'/../']
]);
