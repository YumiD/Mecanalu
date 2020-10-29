<?php
//php -S localhost:8000
    //echo 'Ceci est un test'; // Ceci est un commentaire sur une seule ligne, style c++
    /*echo htmlspecialchars($_POST['nom']);
    echo (int)$_POST['age'];*/
 /*<p>Votre nom : <input type="text" name="nom" /></p>
 <p>Votre âge : <input type="text" name="age" /></p>*/
?>
<form action="creation.php" method="post">

<p> Vous cherchez cloison : </p>

<p> Produit : <select name="produit">
 <option value="evidence">Evidence</option>
 </select></p>

 <p> Type de cloison : <select name="type_cloison">
    <option value="pleine">Pleine</option>
    <option value="vitree">Vitrée</option>
    </select></p>
    
 <input type="checkbox" id="photos" name="photos" checked>
    <label for="photos">Photos</label>

 <p> Epaisseur : <input type="text" name="epaisseur" /> mm </p>

 <p> Hauteur maximale : <input type="text" name="hauteur" /> mm </p>

 <p> Performances acoustiques : Rw(+c) <input type="text" name="DBmin" /> à <input type="text" name="DBmax" /> dB</p>

 <p><input type="submit" value="OK"></p>
</form>