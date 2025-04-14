Enoncé — 
Création d’une base de données relationnelle pour une boulangerie

Objectif : Créer une base de données relationnelle permettant de gérer les informations essentielles d’une boulangerie en ligne, avec plusieurs tables liées entre elles.
Contraintes : La base de données devra gérer :
Des utilisateurs (clients ou administrateurs)
Des produits
Des catégories de produits (pain, viennoiserie, pâtisserie…)
Des commandes passées par les utilisateurs
La liste des produits dans chaque commande (avec quantité)
Tables attendues :

utilisateur
Représente les clients ou administrateurs
Doit contenir :
un identifiant
un nom
un prénom
un mot de passe
un champ indiquant si l'utilisateur est un administrateur (is_admin)


categorie
Représente les types de produits
Doit contenir :
un identifiant
un nom (ex : "Pain", "Viennoiserie", etc.)

produit
Représente les articles vendus (ex : baguette, croissant…)
Doit contenir :
un identifiant
un nom
un prix
un lien vers une catégorie (via une clé étrangère)
un chemin vers une image

commande
Représente une commande effectuée par un utilisateur
Doit contenir :
un identifiant
un utilisateur associé (via une clé étrangère)
une date de commande

commande_produit
Table de liaison entre une commande et ses produits
Doit contenir :
l’identifiant de la commande
l’identifiant du produit
la quantité commandée



Relations attendues :


Un utilisateur peut passer plusieurs commandes
Une commande peut contenir plusieurs produits
Un produit appartient à une seule catégorie
Une catégorie peut contenir plusieurs produits
Résultat attendu : Une base de données bien structurée, permettant ensuite de :
Lister les produits avec leur catégorie
Afficher les commandes passées par un utilisateur
Voir le détail des produits commandés (nom, quantité, prix, etc.)
 