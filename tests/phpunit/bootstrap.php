<?php
error_reporting(E_ALL);

require __DIR__ . '/../../bootstrap.php';

$autoloader = require __DIR__ . '/../../vendor/autoload.php';
$autoloader->add('Inachis\\Tests\\', __DIR__);
