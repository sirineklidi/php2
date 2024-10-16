<?php

class TravelOffer {
    
    public $id;
    public $titre;
    public $destination;
    public $date_retour;
    public $date_depart;
    public $prix;
    public $disponible;
    public $categorie;

    
    public function __construct($id, $titre, $destination, $date_depart, $date_retour, $prix, $disponible, $categorie) {
        $this->id = $id;
        $this->titre = $titre;
        $this->destination = $destination;
        $this->date_depart = $date_depart;
        $this->date_retour = $date_retour;
        $this->prix = $prix;
        $this->disponible = $disponible;
        $this->categorie = $categorie;
    }

    
    public function show() {
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Titre</th><th>Destination</th><th>Date de départ</th><th>Date de retour</th><th>Prix</th><th>Disponibilité</th><th>Catégorie</th></tr>";
        echo "<tr>";
        echo "<td>" . $this->id . "</td>";
        echo "<td>" . $this->titre . "</td>";
        echo "<td>" . $this->destination . "</td>";
        echo "<td>" . $this->date_depart . "</td>";
        echo "<td>" . $this->date_retour . "</td>";
        echo "<td>" . $this->prix . "</td>";
        echo "<td>" . ($this->disponible ? 'Disponible' : 'Non disponible') . "</td>";
        echo "<td>" . $this->categorie . "</td>";
        echo "</tr>";
        echo "</table>";
    }
}
