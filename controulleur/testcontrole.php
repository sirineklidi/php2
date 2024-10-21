<?php
// Inclure les fichiers nécessaires
require_once 'TravelOffer.php'; 
require_once 'Controuller/TravelOfferController.php';

// Créer une instance de TravelOffer
$offre1 = new TravelOffer(1, "Offre de rêve", "Bali", "2024-01-01", "2024-01-15", 1500, true, "Aventure");

// Créer une instance de TravelOfferController
$controller = new TravelOfferController();

// Appeler la méthode showTravelOffer
$controller->showTravelOffer($offre1);
?>
