<?php
    session_start();
    
    
    if(!empty($_POST['nom_entreprise'])) {    
        $nom_entreprise = $_POST['nom_entreprise'];
        $_SESSION["nom_entreprise"] = $nom_entreprise;
    }
    else $nom_entreprise=$_SESSION["nom_entreprise"];
    if(!empty($_POST['nom_projet'])) {    
        $nom_projet = $_POST['nom_projet'];
        $_SESSION["nom_projet"] = $nom_projet;
    }
    else $nom_projet=$_SESSION["nom_projet"];
    if(!empty($_POST['presentation'])) {    
        $presentation = $_POST['presentation'];
        $_SESSION["presentation"] = $presentation;
    }
    else $presentation=$_SESSION["presentation"];

    if(isset($_POST['fiche_technique']))
        $_SESSION["fiche_technique"] = "true";
    else
        $_SESSION["fiche_technique"] = "false";
    if(isset($_POST['PV']))
        $_SESSION["PV"] = "true";
    else
        $_SESSION["PV"] = "false";

    $_SESSION["gamme"]=""; 
    if(isset($_POST['evidence']))
        $_SESSION["gamme"] = "evidence";
    else if(isset($_POST['boreale']))
        $_SESSION["gamme"] = "boreale";
    else if(isset($_POST['evidence_box']))
        $_SESSION["gamme"] = "evidence_box";

    $gamme = $_SESSION["gamme"];

     if($gamme == "evidence"){
        $_SESSION["nom_gamme"] = "Evidence";
        //header('Location: evidence/evidence_produit.php');
        echo "<script type='text/javascript'> document.location = 'evidence/evidence_produit.php'; </script>";
     }else if ($gamme == "boreale"){
        $_SESSION["nom_gamme"] = "Boréale";
     }else if ($gamme == "evidence_box"){
        $_SESSION["nom_gamme"] = "Evidence Box";
     }
?>

<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="mecanalu.css" />
        <title>Choix du produit</title>
    </head>
    
    <body>
    <div class="header">
      <?php include('includes/header.html'); ?>
    </div> 

    <div id="content">
        <h3> Choix du produit</h3>
        
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

    <footer>
        <button onclick="window.location.href='index.php'">Précédent</button>
    </footer>
</html>