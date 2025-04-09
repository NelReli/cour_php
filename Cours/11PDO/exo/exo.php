<?php

// ==============================

// EXERCICES PHP POUR DÉBUTANT

// Thèmes : GET, POST, SESSION, TABLEAU, FONCTION, BDD

// Auteur : PHP Copilot 🔨🤖🔧

// ==============================


// ========== EXERCICES 1 à 5 : GET & POST ==========

// Exo 1 : Crée un formulaire HTML qui utilise la méthode GET pour envoyer un prénom, puis affiche un message de bienvenue avec ce prénom en PHP.

// Exo 2 : Crée un formulaire HTML qui utilise la méthode POST pour envoyer un nom et un âge. Affiche-les en PHP.

// Exo 3 : Modifie l’exercice 2 pour afficher un message différent selon que la personne est mineure ou majeure.

// Exo 4 : Crée un formulaire de connexion basique avec POST (login / mot de passe). N'affiche rien si les champs sont vides.

// Exo 5 : Envoie 2 nombres via GET, puis fais leur addition en PHP et affiche le résultat.


// ========== EXERCICES 6 à 8 : SESSION ==========

// Exo 6 : Crée une page qui démarre une session et stocke un prénom envoyé via POST. Affiche un message : “Bonjour [prénom], bienvenue sur le site.”

// Exo 7 : Crée une seconde page qui récupère et affiche la valeur de la session (sans formulaire).

// Exo 8 : Crée un bouton "Déconnexion" qui détruit la session et redirige vers la page de connexion.


// ========== EXERCICES 9 à 12 : TABLEAUX ==========

// Exo 9 : Déclare un tableau avec 5 prénoms. Affiche-les un par un avec une boucle foreach.

// Exo 10 : Crée un tableau associatif avec des noms et âges. Affiche un message pour chaque personne comme : "Paul a 23 ans."

// Exo 11 : Trie un tableau de nombres dans l’ordre croissant, puis décroissant avec sort() et rsort().

// Exo 12 : Crée une fonction qui prend un tableau de nombres et retourne la moyenne.


// ========== EXERCICES 13 à 16 : FONCTIONS ==========

// Exo 13 : Crée une fonction direBonjour() qui prend un prénom et affiche "Bonjour, [prénom]".

// Exo 14 : Crée une fonction qui prend 2 nombres et retourne leur produit.

// Exo 15 : Crée une fonction qui teste si un mot est un palindrome (ex : kayak, radar).

// Exo 16 : Crée une fonction qui prend une phrase et retourne le nombre de mots.


// ========== EXERCICES 17 à 19 : FORMULAIRES LOGIQUES ==========

// Exo 17 : Crée un formulaire pour envoyer une note sur 20 et affiche une appréciation selon la note :

// <10 = "Insuffisant", 10–14 = "Passable", 15–17 = "Bien", 18–20 = "Excellent"

// Exo 18 : Crée un formulaire où l’on entre une année, puis affiche si cette année est bissextile ou non.

// Exo 19 : Crée un formulaire avec un champ "mot de passe" et affiche un message si le mot de passe est "admin123".


// ========== EXERCICE 20 : BASE DE DONNÉES & CONNEXION ==========

// Exo 20 :

// 1. Dans phpMyAdmin, crée une base de données appelée "exercices_php".

// 2. Dans cette base, crée une table "utilisateurs" avec les champs :

//    - id (INT, AUTO_INCREMENT, PRIMARY KEY)

//    - nom (VARCHAR)

//    - email (VARCHAR)

// 3. Crée un fichier connexion.php en PHP qui se connecte à cette base avec PDO.

?>

