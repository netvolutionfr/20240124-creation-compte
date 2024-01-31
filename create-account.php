<?php
// Connexion à MySQL
$bdd = new PDO('mysql:host=localhost;dbname=20240124-creation-compte;charset=utf8', 'root', '');

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO users (email, password) VALUES(?, ?)');
$req->execute(array($_POST['email'], $_POST['password']));
