
<!DOCTYPE html>
<?php //php -S localhost:8000 ?>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="mecanalu.css" />
        <title>Formulaire</title>
    </head>
<body>

<div class="header">
    <img src="ressources/mecanalu.png">
</div> 

<p> Vous cherchez une cloison : </p>

<form action="creation.php" method="post">

<p> Produit : <select name="produit">
 <option value="evidence">Evidence</option>
 </select></p>

 <p> Type de cloison : <select name="type_cloison">
    <option value="pleine">Pleine</option>
    <option value="vitree">Vitrée</option>
    <input type="checkbox" id="photos" name="photos" checked>
    <label for="photos">Photos</label>
    </select></p>

 <p> Epaisseur : <input type="text" name="epaisseur" /> mm </p>

 <p> Hauteur maximale : <input type="text" name="hauteur" /> mm </p>

 <p> Performances acoustiques : Rw(+c) <input type="text" name="DBmin" /> à <input type="text" name="DBmax" /> dB</p>

 <p><input type="submit" value="OK"></p>
</form>
</body>
</html>