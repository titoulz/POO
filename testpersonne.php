<?php
require "../classes/personne.php";
$dateNaissance = DateTime::createFromFormat('d/m/Y', '03/12/2020');
$personne1 = new personne("DUPONT", ["Jean", "Paul"], $dateNaissance);
// ... rest of your code ...
echo $personne1->getNom();
echo PHP_EOL;
$prenoms = $personne1->getPrenoms();
foreach ($prenoms as $prenom) {
    echo $prenom . "\n";
}
echo PHP_EOL;
echo $personne1->getDateNaissance()->format('d/m/Y');
echo PHP_EOL;
$personne1->setNom("DURAND");
$personne1->setPrenoms(["Jean","Paul","Jacques"]);
$personne1->setDateNaissance(DateTime::createFromFormat('d/m/Y', '03/12/2020'));
echo $personne1->getNom();
echo PHP_EOL;
$prenoms = $personne1->getPrenoms();
foreach ($prenoms as $prenom) {
    echo $prenom . "\n";
}
echo PHP_EOL;
echo $personne1->getDateNaissance()->format('d/m/Y');
echo PHP_EOL;
echo $personne1->getIdentite();
echo PHP_EOL;
echo $personne1->getAge();
echo PHP_EOL;
echo $personne1->addPrenom("damien");
echo PHP_EOL;
