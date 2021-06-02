    
<?php
  session_start();

  if(!empty($_POST['pptx'])) {    
    $zip = false;
  }
  else if(!empty($_POST['zip'])){  
    $zip = true;
  }
  else{  
    $zip = false;
  }
  $_SESSION['zip'] = $zip;

//echo "<script type='text/javascript'> document.location = 'evidence/evidence_creation.php'; </script>";

  $zip_bool = $_SESSION['zip'];

  $nom_entreprise = $_SESSION['nom_entreprise'];
  $nom_projet = $_SESSION['nom_projet'];
  $presentation = $_SESSION['presentation'];
  $fiche_technique = $_SESSION['fiche_technique'];

  $gamme = $_SESSION['gamme'];
  $nom_gamme = $_SESSION['nom_gamme'];
  $porte=$_SESSION["porte"];
  $nom_porte = $_SESSION['nom_porte'];
  $option= $_SESSION["option"];
  $nom_option = $_SESSION['nom_option'];
  $accessoire = $_SESSION["accessoire"];
  $nom_accessoire = $_SESSION['nom_accessoire'];
  $ferme_porte = $_SESSION["ferme_porte"];

  $remplissage = $_SESSION['remplissage'];
  $produit = $_SESSION['produit'];
  $nom_produit = $_SESSION['nom_produit'];  
  $produit_evidence = $_SESSION['produit_evidence'];

  $nom_entreprise = $_SESSION['nom_entreprise'];

  /*--- Code pour créer un zip ---*/
  /*$files = array('readme.txt', 'test.html', 'image.gif');
  $zipname = 'file.zip';
  $zip = new ZipArchive;
  $zip->open($zipname, ZipArchive::CREATE);
  foreach ($files as $file) {
    $zip->addFile($file);
  }
  $zip->close();
  header('Content-Type: application/zip');
  header('Content-disposition: attachment; filename='.$zipname);
  header('Content-Length: ' . filesize($zipname));
  readfile($zipname);*/

  ?>
  
  <script src="https://cdn.jsdelivr.net/gh/gitbrent/pptxgenjs@3.6.0/dist/pptxgen.bundle.js"></script>

  <script type="text/javascript">
    var zip_bool = <?php echo json_encode($zip_bool); ?>;

    var nom_entreprise = <?php echo json_encode($nom_entreprise); ?>;
    console.log(nom_entreprise);
    var nom_projet = <?php echo json_encode($nom_projet); ?>;
    var presentation = <?php echo json_encode($presentation); ?>;
    var fiche_technique = <?php echo json_encode($fiche_technique); ?>;

    var gamme = <?php echo json_encode($gamme); ?>;
    console.log(gamme);
    var porte = <?php echo json_encode($porte); ?>;
    console.log(porte);
    var option = <?php echo json_encode($option); ?>;
    console.log(option);
    var accessoire = <?php echo json_encode($accessoire); ?>;
    var ferme_porte = <?php echo json_encode($ferme_porte); ?>;
    console.log(ferme_porte);
    
    var remplissage = <?php echo json_encode($remplissage); ?>;
    var produit = <?php echo json_encode($produit); ?>;
    var produit_evidence = <?php echo json_encode($produit_evidence); ?>;

    var pptx = new PptxGenJS();

    /*------PREMIERE PAGE-------*/

    /*------PLACEHOLDERS-------*/
    if(produit=="e_cj"){
      var slide = pptx.addSlide();
      slide.addImage({ path: "../ressources/pptx_placeholder/e_cj.png", x:0, y:0, w:'100%', h:'100%' });
      if(remplissage=="plein"){
        var slide = pptx.addSlide();
        slide.addImage({ path: "../ressources/pptx_placeholder/e_cj_p.png", x:0, y:0, w:'100%', h:'100%' });
      }else if(remplissage=="vitre" || remplissage=="vitre_allege"){
        var slide = pptx.addSlide();
        slide.addImage({ path: "../ressources/pptx_placeholder/e_cj_v.png", x:0, y:0, w:'100%', h:'100%' });
      }
    } else if(produit=="e_bb"){
      var slide = pptx.addSlide();
      slide.addImage({ path: "../ressources/pptx_placeholder/e_bb.png", x:0, y:0, w:'100%', h:'100%' });
      if(remplissage=="plein"){
        var slide = pptx.addSlide();
        slide.addImage({ path: "../ressources/pptx_placeholder/e_bb_p.png", x:0, y:0, w:'100%', h:'100%' });
      }else if(remplissage=="vitre" || remplissage=="vitre_allege"){
        var slide = pptx.addSlide();
        slide.addImage({ path: "../ressources/pptx_placeholder/e_bb_v.png", x:0, y:0, w:'100%', h:'100%' });
      }
    }
    /*let textboxText = "Hello World from PptxGenJS!";
    let textboxOpts = { x: 1, y: 2, color: "363636", fill: "F1F1F1" };
    slide.addText(textboxText, textboxOpts);*/

    if(porte == "porte_bi_bois"){
      var slide = pptx.addSlide();
      slide.addImage({ path: "../ressources/pptx_placeholder/porte_bi_bois.png", x:0, y:0, w:'100%', h:'100%' });
      var isPorteBi = true;
    } else if(porte == "porte_bi_cadreAluminium"){
      var slide = pptx.addSlide();
      slide.addImage({ path: "../ressources/pptx_placeholder/porte_bi_cadreAlu.png", x:0, y:0, w:'100%', h:'100%' });
      var isPorteBi = true;
    } else if(porte == "porte_pleine"){
      var slide = pptx.addSlide();
      slide.addImage({ path: "../ressources/pptx_placeholder/porte_pleine.png", x:0, y:0, w:'100%', h:'100%' });
      var isPorteBi = false;    
    } else if(porte == "porte_vitre"){
      var slide = pptx.addSlide();
      slide.addImage({ path: "../ressources/pptx_placeholder/porte_clarit.png", x:0, y:0, w:'100%', h:'100%' });
      var isPorteBi = false;    
    } else if(porte == "porte_coulissante"){
      var slide = pptx.addSlide();
      slide.addImage({ path: "../ressources/pptx_placeholder/porte_coulissante.png", x:0, y:0, w:'100%', h:'100%' });
      var isPorteBi = false;    
    }

    if(accessoire == "accessoire_bequillage" && isPorteBi==true){
      var slide = pptx.addSlide();
      slide.addImage({ path: "../ressources/pptx_placeholder/accessoire_bequillage_bi.png", x:0, y:0, w:'100%', h:'100%' });
    } else if(accessoire == "accessoire_bequillage" && isPorteBi==false){
      var slide = pptx.addSlide();
      slide.addImage({ path: "../ressources/pptx_placeholder/accessoire_bequillage.png", x:0, y:0, w:'100%', h:'100%' });
    } else if(accessoire == "accessoire_paumelle"){
      var slide = pptx.addSlide();
      slide.addImage({ path: "../ressources/pptx_placeholder/accessoire_paumelles_invisible.png", x:0, y:0, w:'100%', h:'100%' });
    }
    
    if(ferme_porte == "visible"){
      var slide = pptx.addSlide();
      slide.addImage({ path: "../ressources/pptx_placeholder/accessoire_fermeporte_visible.png", x:0, y:0, w:'100%', h:'100%' });
    } else if(ferme_porte == "invisible"){
      var slide = pptx.addSlide();
      slide.addImage({ path: "../ressources/pptx_placeholder/accessoire_fermeporte_invisible.png", x:0, y:0, w:'100%', h:'100%' });
    }

    if(option == "option_store"){
      var slide = pptx.addSlide();
      slide.addImage({ path: "../ressources/pptx_placeholder/option_store.png", x:0, y:0, w:'100%', h:'100%' });
    } else if(option == "option_ecrimur"){
      var slide = pptx.addSlide();
      slide.addImage({ path: "../ressources/pptx_placeholder/option_ecrimur.png", x:0, y:0, w:'100%', h:'100%' });
    } else if(option == "option_cintrage"){
      var slide = pptx.addSlide();
      slide.addImage({ path: "../ressources/pptx_placeholder/option_cintrage.png", x:0, y:0, w:'100%', h:'100%' });
    }

    /*------FICHES TECHNIQUES-------*/
    if (fiche_technique == true){
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
      slide.addImage({ path: "ressources/mecanalu.png", x:'70%', y:'75%', w:2});
    }
    /*------Création du PPTX-------*/
    if(zip_bool == true){
      console.log("zip");
    }
    pptx.company = 'Mecanalu';
    pptx.writeFile({fileName: 'Projet-DOE-Mecanalu.pptx'});

    </script>

<html>
  <head>
      <meta charset="utf-8" />
      <link rel="stylesheet" href="mecanalu.css" />
      <title>Création de l'archive</title>
  </head>

  <body id="page">
  <div class="header">
      <?php include('includes/header.html'); ?>
  </div> 

  <div id="content" style="height:75%;">
      <h3> Création de l'archive </h3>
      <!--<button>Télécharger PPTX</button>
      <button>Télécharger Zip</button>-->
  </div>
  </body>

  <footer>
    <button onclick="window.location.href='index.php'">Retour accueil</button>
  </footer>
</html>