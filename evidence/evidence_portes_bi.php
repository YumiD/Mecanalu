<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../mecanalu.css" />
        <title>Récapitulatif</title>

        <style>
            .image1{ /* Le premier bouton */
                border:none;
                background-image:url('../ressources/porte_bi_cadreAluminium.png');
                background-repeat:no-repeat;
                background-position:center;
                background-size:contain;
                background-color:#ffffff;
                font-size:0.0001em;
                width: 28%;
                height: 100%;
				cursor: pointer;}
            /*.image2{
                border:none;
                background-image:url('../ressources/porte_bi_aluminiumCollee.png');
                background-repeat:no-repeat;
                background-position:center;
                background-size:contain;
                background-color:#ffffff;
                font-size:0.0001em;
                width: 28%;
                height: 100%;
				cursor: pointer;}*/
            .image3{
                border:none;
                background-image:url('../ressources/porte_bi_bois.png');
                background-repeat:no-repeat;
                background-position:center;
                background-size:contain;
                background-color:#ffffff;
                font-size:0.0001em;
                width: 28%;
                height: 100%;
				cursor: pointer;}
        </style>
    </head>
    
    <body id="page">

	<div class="header">
        <?php include('../includes/header_evidence.html'); ?>
	</div>  
        
        <div id="content">
            <h3> EVIDENCE - PORTE Bi-affleurante</h3>

            <h4> Choisissez entre <h4>

            <div id="horizontal"> 
            
			<span class="legend3"> Cadre alluminium </span>
			<span class="legend3"> Bois </span>

            <form action="evidence_portes_formulaire.php" method="post">
                <input type="submit" id="horizontal_item" name="porte" value="porte_bi_cadreAluminium" alt="Submit Form" class="image1"/>
                <!--<input type="submit" id="horizontal_item" name="porte" value="porte_bi_aluminiumCollee" alt="Submit Form"  class="image2"/>-->
                <input type="submit" id="horizontal_item" name="porte" value="porte_bi_bois" alt="Submit Form"  class="image3"/>
            </form></div>
			
	<footer>
        <button onclick="window.location.href='evidence_portes.php'">Précédent</button>
    </footer>
        </div>

    </body>


</html>