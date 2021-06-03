<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" href="../mecanalu.css" />
        <title>Mecanalu - Choix Porte</title>

        <style>
            .image1{
                border:none;
                background-image:url('../ressources/porte_pleine.png');
                background-repeat:no-repeat;
                background-position:center;
                background-size:contain;
                background-color:#ffffff;
                font-size:0.0001em;
                width: 52%;
				max-width: 347px;
                height: 100%;
				max-height: 259px;
				cursor: pointer;}
            .image2{
                border:none;
                background-image:url('../ressources/porte_vitre.png');
                background-repeat:no-repeat;
                background-position:center;
                background-size:contain;
                background-color:#ffffff;
                font-size:0.0001em;
                width: 37%;
				max-width: 202px;
                height: 100%;
				max-height: 259px;
				cursor: pointer;}
            .image3{
                border:none;
                background-image:url('../ressources/porte_coulissante.png');
                background-repeat:no-repeat;
                background-position:center;
                background-size:contain;
                background-color:#ffffff;
                font-size:0.0001em;
                width: 53%;
				max-width: 311px;
                height: 100%;
				max-height: 259px;
				cursor: pointer;}
        </style>
    </head>
    
<body id="page">

	<div class="header">
        <?php include('../includes/header_evidence.html'); ?>
	</div> 
        
        <div id="content">
            <h3>BOREALE - CHOIX PORTE</h3>

            <h4> Choisissez entre <h4>

            <div id="horizontal"> 
			<span class="legend3"> Pleine </span>
			<span class="legend3"> Vitré </span>
			<span class="legend3"> Coulissante </span>
			
			<form action="boreale_portes_formulaire.php" method="post">
                <input type="submit" id="horizontal_item" name="porte" value="porte_pleine" alt="Submit Form"  class="image1"/>
                <input type="submit" id="horizontal_item" name="porte" value="porte_vitre" alt="Submit Form"  class="image2"/>
                <input type="submit" id="horizontal_item" name="porte" value="porte_coulissante" alt="Submit Form"  class="image3"/>
            </form>
			</div>
        </div>

    </body>

    <footer>
        <button onclick="window.location.href='boreale_finition.php'">Précédent</button>
    </footer>
</html>