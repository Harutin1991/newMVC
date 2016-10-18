<?php

//require 'lib/Boostrap.php';
//require 'lib/Controller.php';
//require 'lib/Model.php';
//require 'lib/View.php';
function __autoload($class) {
    require 'lib/' . $class . '.php';
}

require 'lib/Session.php';
require 'config/datebase.php';
require 'config/paths.php';

$app = new Boostrap();
