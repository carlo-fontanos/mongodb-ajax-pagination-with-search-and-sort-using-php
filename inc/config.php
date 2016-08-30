<?php 

$connection = new MongoClient();
$db = $connection->selectDB('my_database_name');
