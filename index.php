<?php
require 'vendor/autoload.php';
require 'core/bootstrap.php';
session_start();

use App\Core\{Router, Request};

$uri=Request::url();
$method=Request::method();

Router::load('app/routes.php')->direct($uri, $method);
