<?php

session_start();
define('__BASEPATH__',__DIR__);
require __BASEPATH__. '/tools/functions.php';

$app = App\Kernel::init();