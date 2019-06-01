<?php

spl_autoload_register(function ($className) {
    include $className . '.php';
});


//$Orderus  = new Hero();

$Beast = new Character(rand(60,90), rand(60,90), rand(40,60), rand(40,60), rand(25,40)); 

//echo $Beast->__get('health'); exit;
