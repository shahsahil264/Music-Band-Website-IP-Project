<?php
$DB_HOST= "localhost";
$DB_USER= "root";
$DB_PASSWORD= "";
$DB_DATABASE= "nirvana";

$db = new PDO('mysql:localhost;dbname=' . $DB_DATABASE .';charset=utf8', $DB_USER, $DB_PASSWORD );
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>