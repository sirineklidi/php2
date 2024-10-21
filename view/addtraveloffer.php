<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une Offre de Voyage</title>
</head>
<body>
   <h1> Ajouter une Offre de Voyage</h1> 
   <form action="Verification.php" method="POST">
       <label for="title">Titre :</label>
       <input type="text" name="title" id="title" required>
       <br>
       <label for="destination">Destination :</label>
       <input type="text" name="destination" id="destination" required>
       <br>
       <label for="depd">Date de départ :</label>
       <input type="date" name="depd" id="depd" required>
       <br>
       <label for="ret">Date de retour :</label>
       <input type="date" name="ret" id="ret" required>
       <br>
       <label for="price">Prix :</label>
       <input type="text" name="price" id="price" required>
       <br>
       <label for="av">Disponibilité :</label>
       <input type="checkbox" name="av" id="av">
       <br>
       <label for="cat">Catégorie :</label>
       <select name="cat" id="cat">
           <option value="1">Aventure</option>
       </select>
       <br>
       <input type="submit" value="Ajouter l'offre">
   </form>
</body>
</html>
