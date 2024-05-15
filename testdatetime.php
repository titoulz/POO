<?php
//crée un objet de type DateTime
$now = new DateTime();
echo $now ->format('d/m/Y H:i:s');

$date1 = new DateTime('03/12/2020');
echo $date1->format('d/m/Y');
echo PHP_EOL;
$date2 = DateTime::createFromFormat('d/m/Y', '03/12/2020');
echo PHP_EOL;
echo $date2->format('d/m/y');