<?php
$db = new PDO("sqlite:db.sqlite");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$createTableSQL = "
CREATE TABLE IF NOT EXISTS UTILISATEURS (
    nom VARCHAR(30) PRIMARY KEY NOT NULL,
    score INTEGER NOT NULL
);";

$db->exec($createTableSQL);
