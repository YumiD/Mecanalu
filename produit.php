<?php
    session_start();
     $gamme = $_POST['gamme'];
     $_SESSION["gamme"] = $gamme;
?>

<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="mecanalu.css" />
        <title>Choix du produit</title>
    </head>
    
    <body>
    <div class="header">
        <img src="ressources/mecanalu.png">
    </div> 

    <div id="content">
        <h3> Choix du produit: </h3>
        
        <div id="form"><form action="creation.php" method="post">
        <select name="produit">

            <option class="Produit_Evidence" value="E_CJ_plein">Couvre-joint Plein</option>
            <option class="Produit_Evidence" value="E_CJ_vitre">Couvre-joint Vitré</option>
            <option class="Produit_Evidence" value="E_BB_plein">Bord à bord Plein</option>
            <option class="Produit_Evidence" value="E_BB_vitre">Bord à bord Vitré</option>

            <option class="Produit_Boreale" value="B_CJ">Couvre-joint Vitré</option>
            <option class="Produit_Boreale" value="B_BB">Bord à bord Vitré</option>

            <option class="Produit_Evidence_Box" value="Alta">Alta</option>
            <option class="Produit_Evidence_Box" value="Duo">Duo</option>
            <option class="Produit_Evidence_Box" value="Grande">Grande</option>
            <option class="Produit_Evidence_Box" value="Little">Little</option>
            <option class="Produit_Evidence_Box" value="Media">Media</option>

        </select>
        <script>
        var gamme = <?php echo json_encode($gamme); ?>;
            if(gamme=="evidence"){
                var elements = document.getElementsByClassName("Produit_Boreale");
                for(var i=0; i<elements.length; i++) {
                    elements[i].style.display = "none";
                }
                var elements = document.getElementsByClassName("Produit_Evidence_Box");
                for(var i=0; i<elements.length; i++) {
                    elements[i].style.display = "none";
                }
            }
            else if(gamme=="boreale"){
                var elements = document.getElementsByClassName("Produit_Evidence");
                for(var i=0; i<elements.length; i++) {
                    elements[i].style.display = "none";
                }
                var elements = document.getElementsByClassName("Produit_Evidence_Box");
                for(var i=0; i<elements.length; i++) {
                    elements[i].style.display = "none";
                }
            }
            else if(gamme=="evidence_box"){
                var elements = document.getElementsByClassName("Produit_Evidence");
                for(var i=0; i<elements.length; i++) {
                    elements[i].style.display = "none";
                }
                var elements = document.getElementsByClassName("Produit_Boreale");
                for(var i=0; i<elements.length; i++) {
                    elements[i].style.display = "none";
                }
            }
        </script>

        <p><input type="submit" value="Suivant"></p>
        </form> </div>
    </div>
    </body>
</html>