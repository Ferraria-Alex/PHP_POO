<?php

include './models/maison.php';

$apt = new Maison();
$apt->setNom('Maison3');
$apt->setLongeur(34);
$apt->setLargeur(67);
$apt->setNbrEtage(3);

?>
    <h2>Exercise 1</h2>
    <p>La surface de la <?= $apt->getNom() ?> est égale à : <?= $apt->calculSurface() ?> m2</p>
    <h3>Exercise 1 - Bonus</h3>
    <p>La surface de la <?= $apt->getNom() ?> qui a <?= $apt->getNbrEtage() ?> etages est égale à : <?= $apt->calculSurfaceAvecEtage() ?> m2</p>
    <h2>Exercise 2</h2>