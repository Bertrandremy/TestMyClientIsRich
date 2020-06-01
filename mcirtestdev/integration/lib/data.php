<?php
include './lib/db.php';
include 'partials/header.php';

// Récupération des données
$select = $dbh->query('SELECT * FROM `realisations`');
$works = $select->fetchAll();

$select = $dbh->query('SELECT * FROM `groupe`');
$groupe = $select->fetch();

$select = $dbh->query('SELECT * FROM `valeurs`');
$valeurs = $select->fetchAll();