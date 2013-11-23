<?php

$autoloader = require __DIR__ . "/../vendor/autoload.php";

require __DIR__ . "/../bootstrap/autoload.php";

$autoloader->add('App\Tests', __DIR__);
