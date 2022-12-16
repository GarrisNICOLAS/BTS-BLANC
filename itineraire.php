<?php
require_once('data.php');

$depart = $_POST['depart'] ? $_POST['depart'] : '';
$arrivee = $_POST['arrivee'] ? $_POST['arrivee'] : '';
$resultat = []; // représentez l'itinéraire sous la forme d'un tableau de noeuds et de distance
$erreur = NULL; // Au cas où...

session_start();

//En gros il faudrait partir de ville de départ, 
//regarder dans le tableau links à sa valeur si la ville d'arrivée y est, si oui, distance =
//si non, parcourir dans le tableau links pour toutes les villes connectées à celle de départ
//si la ville d'arrivée s'y trouve. et on fait ça en boucle jusqu'à avoir parcouru tout le tableau
//puis on stock chaque trajet trouvé en parcourant l'arbre qui amène à l'arrivée
//on fait la somme des distances de chaque trajet et $résultat = min(différents_trajet)
//Je trouve juste pas comment appeler le tableau links en php depuis le $data punaise...
//Pierre si tu lis ça j'suis en train de rager de pas trouver ce truc tout bête punaise
//Celà dit gros regret qu'on ait jamais eu a faire de trucs commme ça en cours pcq j'adore
//ce genre de projet, à refaire pitié pitié :D 

$_SESSION['resultat'] = $resultat;
$_SESSION['erreur'] = $erreur;

header("Location: index.php");
