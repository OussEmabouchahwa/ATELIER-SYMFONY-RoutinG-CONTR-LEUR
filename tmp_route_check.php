<?php
require __DIR__ . '/vendor/autoload.php';
$r = new ReflectionClass('App\\Controller\\ServiceController');
foreach ($r->getMethods() as $m) {
    if ($m->getName() === 'showService' || $m->getName() === 'goToIndex') {
        echo $m->getName() . "\n";
        foreach ($m->getAttributes() as $a) {
            echo ' - ' . $a->getName() . "\n";
        }
    }
}
