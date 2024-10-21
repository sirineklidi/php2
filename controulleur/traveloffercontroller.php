<?php

class TravelOfferController {

    
    public function showTravelOffer($offer) {
        
        if ($offer instanceof TravelOffer) {
            echo "<h2>Détails de l'Offre de Voyage</h2>";
            $offer->show(); 
        } else {
            echo "L'objet passé n'est pas une instance de TravelOffer.";
        }
    }
}
?>
