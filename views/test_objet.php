<?php

include './models/maison.php';
include './models/vehicule.php';

$apt = new Maison();
$apt->setNom('Maison3');
$apt->setLongeur(34);
$apt->setLargeur(67);
$apt->setNbrEtage(3);

$voiture = new Vehicule();
$voiture->setNomVehicule('Mercedes')->setNbrRoue(4);

$moto = new Vehicule();
$moto->setNomVehicule('Suzuki')->setNbrRoue(2)->setVitesse(280);

?>
    <h2>Exercise 1</h2>
    <p>La surface de la <?= $apt->getNom() ?> est égale à : <?= $apt->calculSurface() ?> m2</p>
    <h3>Exercise 1 - Bonus</h3>
    <p>La surface de la <?= $apt->getNom() ?> qui a <?= $apt->getNbrEtage() ?> etages est égale à : <?= $apt->calculSurfaceAvecEtage() ?> m2</p>
    <h2>Exercise 2</h2>
    <p>Vehicule - <?= $voiture->getNomVehicule() ?> est une <?= $voiture->detect() ?></p>
    <p>Vehicule - <?= $moto->getNomVehicule() ?> est une <?= $moto->detect() ?></p>
    <p>Avant Boost - <?= $voiture->getNomVehicule() ?> = <?= $voiture->getVitesse() ?>!</p>
    <p><?= $voiture->boost() ?></p>
    <p>Avant Boost - <?= $moto->getNomVehicule() ?> = <?= $moto->getVitesse() ?>!</p>
    <p><?= $moto->boost() ?></p>
    <h3>Exercise 2 - Bonus</h3>
    <p>The Fastest between <?= $voiture->getNomVehicule() ?> and <?= $moto->getNomVehicule() ?> is <?= $moto->plusRapide($voiture) ?></p>