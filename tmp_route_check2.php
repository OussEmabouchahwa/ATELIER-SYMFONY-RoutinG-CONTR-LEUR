<?php
require __DIR__ . '/vendor/autoload.php';
$r = new ReflectionClass('App\\Controller\\ServiceController');
var_dump($r->getName());
foreach ($r->getMethods() as $m) {
    echo $m->getName() . "\n";
    foreach ($m->getAttributes() as $a) {
        echo ' - ' . $a->getName() . "\n";
    }
}
