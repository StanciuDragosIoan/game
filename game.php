<?php

spl_autoload_register(function ($className) {
    include $className . '.php';
});


//$Orderus  = new Hero();

function initializeGame(){


}


$Beast = new Character(rand(60,90), rand(60,90), rand(40,60), rand(40,60), rand(25,40)); 
$Hero  = new Character(rand(70,100), rand(70,80), rand(45,55), rand(40,50), rand(10,30)); 



$is_running = true;
$max_tries  = 20;
$is_first = '';

if ($Hero->__get('speed') > $Beast->__get('speed')){
    $is_first = 'hero'; 
} elseif ($Hero->__get('speed') == $Beast->__get('speed')){
    if ($Hero->__get('luck')>$Beast->__get('luck')){
        $is_first = 'hero';
    } else {
        $is_first = 'beast';
    }
} else {
    $is_first = 'beast';
}

echo $is_first; exit;

// while ($Hero->__get('health')!=0 && $Beast->__get('health')!=0 && $max_tries!=0){



// }