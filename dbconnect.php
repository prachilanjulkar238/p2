
<?php

require __DIR__.'/vendor/autoload.php';
use Kreait\Firebase\Factory;

$factory = (new Factory)
->withServiceAccount('prachi1-7a6d4-firebase-adminsdk-maawk-3cd19ea3a7.json')
->withDatabaseUri('https://prachi1-7a6d4-default-rtdb.firebaseio.com/');

$database = $factory->createDatabase();

?>