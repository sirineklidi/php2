<?php
// Inclure les fichiers nécessaires
require_once 'TravelOffer.php'; 
require_once 'Controller/TravelOfferController.php';

// Récupérer les données du formulaire
$title = $_POST['title'];
$destination = $_POST['destination'];
$date_depart = $_POST['depd'];
$date_retour = $_POST['ret'];
$prix = $_POST['price'];
$disponible = isset($_POST['av']) ? true : false; 
$categorie = $_POST['cat'];


$offre1 = new TravelOffer(1, $title, $destination, $date_depart, $date_retour, $prix, $disponible, $categorie);


var_dump($offre1);


$controller = new TravelOfferController();


$controller->showTravelOffer($offre1);
?>
