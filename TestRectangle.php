<?php
//instanciation de la classe Rectangle
require "../classes/Rectangle.php";
$rectangle1 = new Rectangle(12, 10,1);

$surface=$rectangle1->calculSurface();
echo "La surface du rectangle est de $surface m²";
$rectangle1=new Rectangle(15,9,2);
$surface=$rectangle1->calculSurface();
echo PHP_EOL;
echo "La surface du rectangle est de $surface m²";

echo PHP_EOL;
echo "les dimensions du rectangle sont de ".$rectangle1->getLongueur()."m de longueur et de ".$rectangle1->getLargeur()."m de largeur.";
$rectangle1->setLongueur(4);
$rectangle1->setLargeur(10);
echo "la surface du rectangle est de ".$rectangle1->calculSurface()."m².";
echo PHP_EOL;
echo $rectangle1;
echo PHP_EOL;
echo "Le perimetre du rectangle est de ".$rectangle1->calculPerimetre()."m.";

$rectangle1->setColor(2);
echo PHP_EOL;
echo "La couleur du rectangle est de ".$rectangle1->getColor()."m.";
echo PHP_EOL;
$rectangle1=new Rectangle(5,2,2);
echo $rectangle1->drawRectangle("*");
echo PHP_EOL;
?>