<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../mecanalu.css" />
        <title>Mecanalu - Choix Porte</title>
    </head>
    
    <body id="page">

	<div class="header">
        <?php include('includes/header.html'); ?>
	</div>  
        
        <div id="content">
            <h3> EVIDENCE - PORTE Bi-affleurante</h3>

            <h4> Choisissez entre <h4>

            <div id="horizontal"> 
            
                <span class="legend3"> Cadre alluminium </span>
                <span class="legend3"> Bois </span>

                <form action="buffer/buffer_portes.php" method="post">
                <div id="checkboxPortes">
                    <input type="checkbox" id="porte_bi_cadreAluminium"  name="porte_bi_cadreAluminium" class="porte"/>
                    <label for="porte_bi_cadreAluminium"><img src="ressources/porte_bi_cadreAluminium.png" /></label>
                    <input type="checkbox" id="porte_bi_bois" name="porte_bi_bois" class="porte"/>
                    <label for="porte_bi_bois"><img src="ressources/porte_bi_bois.png" /></label>
                </div>
			</div>

            <div id="form">
            <input type="submit" value="Continuer" style="background-color: #a4bd0a;color: #ffffff;font-family: 'Montserrat';">
            </div>
			
	<footer>
        <button onclick="window.location.href='portes.php'">Précédent</button>
    </footer>
        </div>

    </body>


</html>