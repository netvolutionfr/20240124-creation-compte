<?php
// Connexion à MySQL
$bdd = new PDO('mysql:host=localhost;dbname=20240124-creation-compte;charset=utf8', 'root', '');
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO users (email, password) VALUES(?, ?)');
$req->execute(array($_POST['email'], $password));
