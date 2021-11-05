<?php 
require '../vendor/autoload.php';

use Petrik14S\PoosDaniel\Halloween\Models\Esemeny;
use Petrik14S\PoosDaniel\Halloween\Models\Lako;

$events = array(
    new Esemeny("Honfoglaló", new Lako("Béla"), array(
        new Lako("Erzsi"),
        new Lako("Pali"),
        new Lako("Árpi"),
        new Lako("Dezső"),
    ), new DateTime("2021-10-22")),
    new Esemeny("MondoCon", new Lako("Ki Tudja"), array(
        new Lako("Gyöngyi"),
        new Lako("Enikő"),
        new Lako("Ricsi"),
        new Lako("Bence"),
    ), new DateTime("2021-10-23"))
);

foreach ($events as $event){
    echo $event;
}