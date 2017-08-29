<?php


require 'vendor/autoload.php';


use App\Document;
use App\States\WaitingState;

$d = new Document('RG', new WaitingState());

var_dump($d);

echo($d->getState());
echo "\n";

$d->inAnalisis();

var_dump($d);

echo($d->getState());
echo "\n";

$d->denied();

var_dump($d);

echo($d->getState());
echo "\n";

$d->approve();

var_dump($d);

echo($d->getState());
echo "\n";