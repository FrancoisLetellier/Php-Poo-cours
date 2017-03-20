<?php


require "Computer.php";

$computer1 = new \wcs\Computer("Intel");
$computer2 = new \wcs\Computer("Motorola");
$computer3 = new \wcs\Computer("");
$computer4 = new \wcs\Computer();

echo $computer1->getInfos();
echo $computer2->getInfos();
echo $computer3->getInfos();
echo $computer4->getInfos();
