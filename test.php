<?php


require "Computer.php";

$computer1 = new \wcs\Computer("Intel");
$computer2 = new \wcs\Computer("Motorola");
$computer3 = new \wcs\Computer("");
$computer4 = new \wcs\Computer();

$computer1 ->getInfos();
$computer2 ->getInfos();
$computer3 ->getInfos();
unset($computer1);
$computer4 ->getInfos();

$computer5 = new \wcs\Computer('AMD');
echo $computer5->getInfos() . PHP_EOL;

