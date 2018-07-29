<?php
require 'functions.php';
allow('POST');
class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('mamamuhely.db');
    }
}
$db = new MyDB();

$tipus = $_POST['tipus'];
$comment = $_POST['comment'];
$date = $_POST['date'];

var_dump($_POST, $tipus, $comment, $date);


?>

<html>
    <meta charset="utf-8">
    <head>
        <title></title>
    </head>
    <body>
        <h1>Új film</h1>

    </body>
</html>