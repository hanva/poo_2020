<?php

require_once('Warrior.php');
require_once('Mage.php');
require_once('Rogue.php');
require_once('Lardeur.php');
require_once('Golem.php');
require_once('Ghom.php');

$a = new Warrior();
$b = new Mage();
$c = new Rogue();
//$monster = new Lardeur(500, 30);
//$monster = new Golem(1000, 20);
$monster = new Ghom(600, 10);

$a->setName('newB');
$a->setLevel(1);

$b->setName('xXxRoXorxXx');
$b->setLevel(1);

$c->setName('Billy');
$c->setLevel(1);

while ($monster->isAlive()
       && ($a->isAlive() || $b->isAlive() || $c->isAlive()))
{
    $a->attack($monster);
    $monster->attack($a);
    $b->attack($monster);
    $monster->attack($b);
    $c->attack($monster);
    $monster->attack($c);
}

// echo '<pre>';
// var_dump($a, $b, $c);
