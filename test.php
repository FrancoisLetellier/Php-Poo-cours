<?php


require "Computer.php";

$computer1 = new \wcs\Computer("Intel");
$computer2 = new \wcs\Computer("Motorola");
$computer3 = new \wcs\Computer("");
$computer4 = new \wcs\Computer();

echo $computer1->getProctype() . PHP_EOL;
echo $computer2->getProctype() . PHP_EOL;
echo $computer3->getProctype() . PHP_EOL;
echo $computer4->getProctype() . PHP_EOL;

