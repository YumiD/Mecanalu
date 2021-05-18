<?php
    session_start();

    if(!empty($_POST['option'])) {    
        $option = $_POST['option'];
        $_SESSION["option"] = $option;
    }
    else $option=$_SESSION["option"];

    if($option=="option_ecrimur"){
        $nom_option="Ecrimur";
    }
    $_SESSION["nom_option"] = $nom_option;

?>

<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../mecanalu.css" />
        <title>Création du dossier</title>

        <style>
            #wrapper {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                grid-gap: 10px;
                grid-auto-rows: minmax(100px, auto);
            }
            #left{
                float:left;
                width:40%;
	            height: 50%;
                padding:2%;
            }
            #right{
                float:right;
                width:55%;
	            height: 50%;
            }
        </style>
    </head>

    <body id="page">
    <div class="header">
        <?php include('../includes/header_evidence.html'); ?>
    </div> 

    <div id="content" style="height:75%;">
        <h3> EVIDENCE - OPTIONS - <?php echo $nom_option; ?> </h3>
            <div id="left">
                <img id="image_produit" src="../ressources/<?php echo $option; ?>.png">
            </div>
            
            <div id="right">
            <h4 style="text-align:left !important;"> Veuillez renseigner </h4>
            <form action="../ajout.php" method="post">
                <!-- DIMENSION -->
                <div id="dimension">
                    <label  class="label" for="dimension">Dimension :</label>
                    <input type="text" id="dimension" name="dimension">
                </div>
                <!-- FINITION -->
                <div id="finition" style="display: flex;flex-wrap: wrap;">
                    <label  class="label" for="finition">Finition :</label>
                    <div id="finition">
                    </div>
                    <div>
                        <ul style="list-style-type: none;"> 
                            <li class="vitre">
                                <input class="check" type="checkbox" id="vitre" name="finition">
                                <label  class="label" for="vitre">Vitré</label>
                            </li>
                            <li class="stratifie">
                                <input class="check" type="checkbox" id="stratifie" name="finition">
                                <label  class="label" for="stratifie">Stratifié</label>
                            </li>
                            <li class="vinylique">
                                <input class="check" type="checkbox" id="vinylique" name="finition">
                                <label  class="label" for="vinylique">Vinylique</label>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- FOURNISSEUR -->
                <!--<div id="fournisseur" style="display: flex;flex-wrap: wrap;">
                    <label for="fournisseur">Fournisseur :</label>
                    <div id="fournisseur">
                    </div>
                    <div>
                        <ul style="list-style-type: none;">        
                            <li class="mecanalu">
                                <input type="checkbox" id="mecanalu" name="fournisseur" checked>
                                <label for="mecanalu">Mecanalu</label>
                            </li>
                            <li class="pannex">
                                <input type="checkbox" id="pannex" name="fournisseur">
                                <label for="pannex">Pannex</label>
                            </li>
                        </ul>
                    </div>
                </div>-->
                <!-- DOCUMENT TECHNIQUE -->
                <div id="doc_technique" style="display: flex;flex-wrap: wrap;">
                    <label for="doc_technique">Document Technique :</label>
                    <div id="doc_technique">
                    </div>
                    <div>
                        <ul style="list-style-type: none;">        
                            <li class="oui">
                                <input class="check" type="checkbox" id="oui" name="doc_technique" checked>
                                <label class="label" for="oui">Oui</label>
                            </li>
                            <li class="non">
                                <input class="check" type="checkbox" id="non" name="doc_technique">
                                <label class="label" for="non">Non</label>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div style="margin-top:30px"></div>
                <div id="submitButton"> <input type="submit" value="Suivant"> </div>
            </form>
            </div>

            <script type="text/javascript">
                function DeleteByClass(id) {
                    var elements = document.getElementsByClassName(id);
                    for(var i=0; i<elements.length; i++) {
                        elements[i].style.display = "none";
                    }
                }

                var option = <?php echo json_encode($option); ?>;
            </script>
    </div>
    </body>
    <footer>
        <button onclick="window.location.href='evidence_box_options.php'">Précédent</button>
    </footer>
</html>