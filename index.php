<?php

//require 'lib/Boostrap.php';
//require 'lib/Controller.php';
//require 'lib/Model.php';
//require 'lib/View.php';

function my_autoloader($class) {
    require 'lib/' . $class . '.php';
}

spl_autoload_register('my_autoloader');

require 'lib/Session.php';
require 'config/datebase.php';
require 'config/paths.php';

$app = new Boostrap();
