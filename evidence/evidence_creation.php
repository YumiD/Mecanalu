<html>
    <!--<script src="https://cdn.jsdelivr.net/npm/pptxgenjs@3.3.1/dist/pptxgen.bundle.js"></script>-->
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/pptxgenjs@3.4.0/dist/pptxgen.bundle.js"></script>
    <!--<script src="FileSaver.js"></script> INUTILE -->
    
    <?php
    session_start();

    $nom_entreprise = $_SESSION['nom_entreprise'];
    $nom_projet = $_SESSION['nom_projet'];
    $presentation = $_SESSION['presentation'];
    $fiche_technique = $_SESSION['fiche_technique'];
    $gamme = $_SESSION['gamme'];
    $produit_evidence = $_SESSION['produit_evidence'];
      ?>

    <script type="text/javascript">

    var nom_entreprise = <?php echo json_encode($nom_entreprise); ?>;
    var nom_projet = <?php echo json_encode($nom_projet); ?>;
    var presentation = <?php echo json_encode($presentation); ?>;
    var fiche_technique = <?php echo json_encode($fiche_technique); ?>;
    var produit_evidence = <?php echo json_encode($produit_evidence); ?>;


    var pptx = new PptxGenJS();

    /*------PREMIERE PAGE-------*/
    var slide = pptx.addSlide();
    slide.addText( ' ', { x:5.0, y:0.5, w:'40%', h:'80%', align:'right', fontSize:24, color:'0088CC', fill:{ color:'F1F1F1', transparency:30 } } );
    slide.addImage({ path: "../ressources/icon/icon_mecanalu.png", x:0.5, y:0.5});
    slide.addText(
    [
        { text: nom_entreprise , options:{ fontSize:48, bold:true, breakLine:true } },
        { text: nom_projet , options:{ fontSize:20 } }
    ],
    { x:0.5, y:1, h:3, align:'left' }
    );

    /*------SECONDE PAGE-------*/
    slide = pptx.addSlide();
    switch(produit_evidence){
      case "E_CJ_plein" : 
        slide.addText(
        [
            { text:'Evidence', options:{ fontSize:25, bold:true, paraSpaceAfter:20, breakLine:true } },
            { text:'L’Evidence couvre-joints est la réponse à toutes les exigences qu’elles soient esthétiques ou acoustiques.',
            options:{ fontSize:18, paraSpaceAfter:5, breakLine:true } },
            { text:'Modulable et personnalisable en fonction de vos projets, elle se marie avec des panneaux pleins ou vitrés.',
            options:{ fontSize:18, paraSpaceAfter:5, breakLine:true } },
            { text:'La finition couvre-joint apporte aux projets une démontabilité et une souplesse d’utilisation garantie par la certification CERFF.',
            options:{ fontSize:18, paraSpaceAfter:5, breakLine:true } }
        ],
        { x:0.5, y:"20%", h:3, w:'45%', align:'left' }
        );
        slide.addImage({ path: "../ressources/e_cj_p.png", x:'55%', y:'40%',w:'35%', h:'35%'});
        break;
      case "E_CJ_vitre" : 
        slide.addText(
        [
            { text:'Evidence', options:{ fontSize:25, bold:true, paraSpaceAfter:20, breakLine:true } },
            { text:'L’Evidence couvre-joints est la réponse à toutes les exigences qu’elles soient esthétiques ou acoustiques.',
            options:{ fontSize:18, paraSpaceAfter:5, breakLine:true } },
            { text:'Modulable et personnalisable en fonction de vos projets, elle se marie avec des panneaux pleins ou vitrés.',
            options:{ fontSize:18, paraSpaceAfter:5, breakLine:true } },
            { text:'La finition couvre-joint apporte aux projets une démontabilité et une souplesse d’utilisation garantie par la certification CERFF.',
            options:{ fontSize:18, paraSpaceAfter:5, breakLine:true } }
        ],
        { x:0.5, y:"20%", h:3, w:'45%', align:'left' }
        );
        slide.addImage({ path: "../ressources/e_cj_v.png", x:'55%', y:'35%',w:'35%', h:'35%'});
        break;
      case "E_BB_plein" : 
        slide.addText(
        [
            { text:'Evidence', options:{ fontSize:25, bold:true, paraSpaceAfter:20, breakLine:true } },
            { text:'Transparence et fluidité sont les atouts premiers de l’Evidence Bord à bord.',
            options:{ fontSize:18, paraSpaceAfter:5, breakLine:true } },
            { text:'En finition pleine, l’absence de couvre-joints apporte une ligne épurée à l’ensemble.',
            options:{ fontSize:18, paraSpaceAfter:5, breakLine:true } },
            { text:'La version vitrée joue sur la transparence des espaces sans pour autant négliger son rôle acoustique.',
            options:{ fontSize:18, paraSpaceAfter:5, breakLine:true } },
            { text:'Il est tout à fait possible de mixer la finition pleine et vitrée sur un même projet.',
            options:{ fontSize:18, paraSpaceAfter:5, breakLine:true } }
        ],
        { x:0.5, y:"20%", h:3, w:'45%', align:'left' }
        );
        slide.addImage({ path: "../ressources/e_bb_p.png", x:'55%', y:'35%',w:'35%', h:'35%'});
        break;
      case "E_BB_vitre" : 
        slide.addText(
        [
            { text:'Evidence', options:{ fontSize:25, bold:true, paraSpaceAfter:20, breakLine:true } },
            { text:'Transparence et fluidité sont les atouts premiers de l’Evidence Bord à bord.',
            options:{ fontSize:18, paraSpaceAfter:5, breakLine:true } },
            { text:'En finition pleine, l’absence de couvre-joints apporte une ligne épurée à l’ensemble.',
            options:{ fontSize:18, paraSpaceAfter:5, breakLine:true } },
            { text:'La version vitrée joue sur la transparence des espaces sans pour autant négliger son rôle acoustique.',
            options:{ fontSize:18, paraSpaceAfter:5, breakLine:true } },
            { text:'Il est tout à fait possible de mixer la finition pleine et vitrée sur un même projet.',
            options:{ fontSize:18, paraSpaceAfter:5, breakLine:true } }
        ],
        { x:0.5, y:"20%", h:3, w:'45%', align:'left' }
        );
        slide.addImage({ path: "../ressources/e_bb_v.png", x:'55%', y:'35%',w:'35%', h:'35%'});
        break;
    }

    /*------TROISIEME PAGE-------*/
    /*slide = pptx.addSlide();
    slide.addText(
    [
        { text:'Caractéristiques :', options:{ fontSize:30, bold:true, paraSpaceAfter:20, breakLine:true } },
        { text:'Epaisseur : '+epaisseur+' mm', options:{ fontSize:25, paraSpaceAfter:12, indentLevel:1, breakLine:true } },
        { text:'Hauteur : '+hauteur+' mm', options:{ fontSize:25, paraSpaceAfter:12, indentLevel:1, breakLine:true } },
        { text:'Performances accoustiques :', options:{ fontSize:30, bold:true, paraSpaceAfter:20, breakLine:true } },
        { text:'Rw(+c) '+DBmin+' à '+DBmax+' dB', options:{ fontSize:25, paraSpaceAfter:12, indentLevel:1, breakLine:true } }
    ],
    { x:0.5, y:2, h:1, align:'left' }
    );*/

    /*------QUATRIEME PAGE-------*/
    if (fiche_technique == "true"){
      slide = pptx.addSlide();
      slide.addText(
      [
          { text:'Catalogues et fiches techniques', options:{ fontSize:40, bold:true, paraSpaceAfter:30, breakLine:true } },
          { text:'Catalogue Evidence', options:{ fontSize:25, hyperlink:{url:'https://www.mecanalu.com/media/attachments/2020/07/08/evidence-2020.pdf'}, paraSpaceAfter:12, indentLevel:1, breakLine:true } },
          { text:'Catalogue Boréale', options:{ fontSize:25, hyperlink:{url:'https://www.mecanalu.com/media/attachments/2020/07/16/borale-20201.pdf'}, paraSpaceAfter:12, indentLevel:1, breakLine:true } },
          { text:'Portfolio', options:{ fontSize:25, hyperlink:{url:'https://www.mecanalu.com/images/PDF/Doc_Flyer_Photos.pdf'}, indentLevel:1, paraSpaceAfter:12, breakLine:true } }
      ],
      { x:0.5, y:1.5, h:1, align:'left' }
      );
      slide.addImage({ path: "../ressources/mecanalu.png", x:'70%', y:'75%', w:2});
    }
    /*------Création du PPTX-------*/
    pptx.writeFile('PptxGenJs-Basic-Slide-Demo');
    //pptx.writeFile({ fileName: 'PptxGenJs-Basic-Slide-Demo', compresion: true });
    
    </script>
  <head>
      <meta charset="utf-8" />
      <link rel="stylesheet" href="../mecanalu.css" />
      <title>Création de l'archive</title>
  </head>

  <body>
  <div class="header">
    <a href="../index.php"> <img src="../ressources/mecanalu.png"> </a>
  </div>
  <div id="content">
      <h3> Création de l'archive </h3>
  </div>
  </body>

  <footer>
    <button onclick="window.location.href='../index.php'">Retour accueil</button>
  </footer>

</html>