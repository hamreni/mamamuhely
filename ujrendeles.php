<?php
require 'functions.php';
allow('POST');


$db = new SQLite3('mamamuhely.db');

$tipus = $_POST['tipus'];
$szelet = $_POST['szelet'];
$date = $_POST['date'];
$comment = $_POST['comment'];

$statement = $db->prepare('INSERT INTO megrendelesek VALUES (:termek, :szelet, :datum, :comment)');
$statement->bindValue(':termek', $tipus);
$statement->bindValue(':szelet', $szelet);
$statement->bindValue(':comment', $comment);
$statement->bindValue(':datum', $date);


$result = $statement->execute();
if ($result==FALSE) {
  echo "Hiba tortent, a hiba: ".$db->lastErrorMsg();
} else {
  $statement->close();
  $db->close(); 
  redirect('index.html');
}