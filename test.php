<?php


require "Computer.php";

$computer1 = new \wcs\Computer("Intel");
echo $computer1->getInfos();
$computer2 = new \wcs\Computer("Motorola");
echo $computer2->getInfos();
$computer3 = new \wcs\Computer("");
echo $computer3->getInfos();
$computer4 = new \wcs\Computer();
echo $computer4->getInfos();

