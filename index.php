<?php


require 'vendor/autoload.php';


use App\Document;
use App\States\WaitingState;

$d = new Document('RG', new WaitingState());

//var_dump($d);

//echo($d->getState());
//echo "\n";

$d->inAnalisis();

//var_dump($d);

//echo($d->getState());
//echo "\n";

$d->denied();

//var_dump($d);

//echo($d->getState());
//echo "\n";

$d->approve();

//var_dump($d);

//echo($d->getState());
//echo "\n";

/**
 * Segunda parte
 */

$con = new PDO("mysql:host=localhost;dbname=teste", "teste", "teste");

$stmt = $con->prepare('insert into docs (name, state) values (:name, :state)');

$doc = new Document('RG',new WaitingState());

$name = $doc->getName();
$state = $doc->getState();
$stmt->bindParam(':name',$name);

$stmt->bindParam(':state',$state );

$stmt->execute();

