<?php


require "Computer.php";

$computer1 = new \wcs\Computer();
$computer2 = new \wcs\Computer();


$computer1->setProctype("intel") . PHP_EOL;     /** PHP_EOL = saut de ligne set= me renvoi l'info */
$computer2->setProctype("Motorola") . PHP_EOL;


echo $computer1->getProctype() . PHP_EOL;
echo $computer2->getProctype() . PHP_EOL;       /**get envoi l'information */
