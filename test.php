<?php


require "Computer.php";

$computer1 = new \wcs\Computer("Intel");
$computer2 = new \wcs\Computer("Motorola");
$computer3 = new \wcs\Computer("");
$computer4 = new \wcs\Computer();

$computer1 ->getInfos();
$computer2 ->getInfos();
$computer3 ->getInfos();
$computer4 ->getInfos();

