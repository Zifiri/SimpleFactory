<?php

require_once  __DIR__ ."/vendor/autoload.php";

use App\factory;


// Test 
$a = new Factory;

try {
    $test = factory::load("testme");
    echo "<hr>";
    $cars = factory::load("cars");
    echo "<hr>";
    $cars = factory::load(null);
} catch (Exception $e) {
    echo 'Error: ',  $e->getMessage(), "\n";
}

