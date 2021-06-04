    
<?php
  session_start();

  if(!empty($_POST['pptx'])) {    
    $_SESSION['zip_bool'] = false;
  }
  else if(!empty($_POST['zip'])){  
    $_SESSION['zip_bool'] = true;
  }
  else{
    $_SESSION['zip_bool'] = true;
  }
  $zip_bool=$_SESSION['zip_bool'];

  $nom_entreprise = $_SESSION['nom_entreprise'];
  $nom_projet = $_SESSION['nom_projet'];
  $presentation = $_SESSION['presentation'];
  $fiche_technique = $_SESSION['fiche_technique'];

  //Gamme
  $evidence = $_SESSION["evidence"];
  $boreale = $_SESSION["boreale"];
  $evidence_box = $_SESSION["evidence_box"];
  //Evidence
  $e_cj = $_SESSION["e_cj"];
  $e_bb = $_SESSION["e_bb"];
  $e_plein = $_SESSION["e_plein"];
  $e_vitre = $_SESSION["e_vitre"];
  $e_vitre_allege = $_SESSION["e_vitre_allege"];
  $e_cj_p = $_SESSION["e_cj_p"];
  $e_bb_p = $_SESSION["e_bb_p"];
  $e_cj_v = $_SESSION["e_cj_v"];
  $e_bb_v = $_SESSION["e_bb_v"];
  $e_cj_va = $_SESSION["e_cj_va"];
  $e_bb_va = $_SESSION["e_bb_va"];
  //Boreale
  $boreale_bb = $_SESSION["boreale_bb"];
  $boreale_verriere = $_SESSION["boreale_verriere"];
  //Evidence Box
  $box_little = $_SESSION["box_little"];
  $box_duo = $_SESSION["box_duo"];
  $box_media = $_SESSION["box_media"];
  $box_alta = $_SESSION["box_alta"];
  $box_grande = $_SESSION["box_grande"];
  //Porte
  $porte_pleine=$_SESSION["porte_pleine"];
  $porte_vitre=$_SESSION["porte_vitre"];
  $porte_coulissante=$_SESSION["porte_coulissante"];
  $porte_bi_cadreAluminium=$_SESSION["porte_bi_cadreAluminium"];
  $porte_bi_bois=$_SESSION["porte_bi_bois"];
  $accessoire_bequillage = $_SESSION["accessoire_bequillage"];
  $accessoire_paumelle_visibles = $_SESSION["accessoire_paumelle_visibles"];
  $accessoire_paumelle_invisibles = $_SESSION["accessoire_paumelle_invisibles"];
  $accessoire_serrure_standard = $_SESSION["accessoire_serrure_standard"];
  $accessoire_serrure_magnetique = $_SESSION["accessoire_serrure_magnetique"];
  $accessoire_oculus = $_SESSION["accessoire_oculus"];
  $ferme_porte_visible = $_SESSION["ferme_porte_visible"];
  $ferme_porte_invisible = $_SESSION["ferme_porte_invisible"];
  //$accessoire = $_SESSION["accessoire"];
  $nom_accessoire = $_SESSION['nom_accessoire'];
  $ferme_porte = $_SESSION["ferme_porte"];
  //Option
  $option= $_SESSION["option"];
  $nom_option = $_SESSION['nom_option'];

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
    header('Content-Length: '.filesize($zipname));
    readfile($zipname);*/

  /*if($_SESSION['zip_bool']){
    $zip = new ZipArchive();
    $filename = "./Mecanalu_fiches_techniques.zip";
  
    if ($zip->open($filename, ZipArchive::CREATE)!==TRUE) {
      exit("cannot open <$filename>\n");
    }
  
    $dir = 'includes/';
  
    // Create zip
    createZip($zip,$dir);
    
    $zip->close();
  }

  function createZip($zip,$dir){
    if (is_dir($dir)){
      if ($dh = opendir($dir)){
         while (($file = readdir($dh)) !== false){
           // If file
           if (is_file($dir.$file)) {
              if($file != '' && $file != '.' && $file != '..'){
                 $zip->addFile($dir.$file);
              }
           }else{
              // If directory
              if(is_dir($dir.$file) ){
                if($file != '' && $file != '.' && $file != '..'){
                  // Add empty directory
                  $zip->addEmptyDir($dir.$file);
                  $folder = $dir.$file.'/';
                  // Read data of the folder
                  createZip($zip,$folder);
                }
              }
           }
         }
         closedir($dh);
       }
    }
  }

  // Download Created Zip file
  if(isset($_POST['download'])){
 
    $filename = "Mecanalu_fiches_techniques.zip";

    if (file_exists($filename)) {
      header('Content-Type: application/zip');
      header('Content-Disposition: attachment; filename="'.basename($filename).'"');
      header('Content-Length: ' . filesize($filename));

      flush();
      readfile($filename);
      // delete file
      unlink($filename);
  
    }
  }*/

  ?>
  
<script src="https://cdn.jsdelivr.net/gh/gitbrent/pptxgenjs@3.6.0/dist/pptxgen.bundle.js"></script>

<html>
  <head>
      <meta charset="utf-8" />
      <link rel="stylesheet" href="mecanalu.css" />
      <title>Mecanalu - Création de l'archive</title>
  </head>

  <body id="page">
  <div class="header">
      <?php include('includes/header.html'); ?>
  </div> 

  <div id="content" style="height:75%;">
      <h3> Création de l'archive </h3>
      <!--<button>Télécharger PPTX</button>
      <button>Télécharger Zip</button>-->
      <button id="buttonPPTX" onclick="PPTX()">Télécharger PPTX</button>
      <form method='post' action=''>
        <!--<input type='submit' name='create' value='Create Zip' />&nbsp;-->
        <input button id="buttonZIP" type='submit' name='download' value='Télécharger Zip' />
      </form>
  </div>
  </body>

  
  <script type="text/javascript">

    function PPTX(){
      var nom_entreprise = <?php echo json_encode($nom_entreprise); ?>;
      console.log(nom_entreprise);
      var nom_projet = <?php echo json_encode($nom_projet); ?>;
      var presentation = <?php echo json_encode($presentation); ?>;
      var fiche_technique = <?php echo json_encode($fiche_technique); ?>;

      //Gamme
      var evidence = <?php echo json_encode($evidence); ?>;
      console.log(evidence);
      var boreale = <?php echo json_encode($boreale); ?>;
      console.log(boreale);
      var evidence_box = <?php echo json_encode($evidence_box); ?>;
      //Evidence
      var e_cj = <?php echo json_encode($e_cj); ?>;
      var e_bb = <?php echo json_encode($e_bb); ?>;
      var e_plein = <?php echo json_encode($e_plein); ?>;
      var e_vitre = <?php echo json_encode($e_vitre); ?>;
      var e_vitre_allege = <?php echo json_encode($e_vitre_allege); ?>;
      var e_cj_p = <?php echo json_encode($e_cj_p); ?>;
      var e_bb_p = <?php echo json_encode($e_bb_p); ?>;
      var e_cj_v = <?php echo json_encode($e_cj_v); ?>;
      var e_bb_v = <?php echo json_encode($e_bb_v); ?>;
      var e_cj_va = <?php echo json_encode($e_cj_va); ?>;
      var e_bb_va = <?php echo json_encode($e_bb_va); ?>;
      //Boreale
      var boreale_bb = <?php echo json_encode($boreale_bb); ?>;
      var boreale_verriere = <?php echo json_encode($boreale_verriere); ?>;
      //Evidence Box
      var box_little = <?php echo json_encode($box_little); ?>;
      var box_duo = <?php echo json_encode($box_duo); ?>;
      var box_media = <?php echo json_encode($box_media); ?>;
      var box_alta = <?php echo json_encode($box_alta); ?>;
      var box_grande = <?php echo json_encode($box_grande); ?>;
      //Porte
      var porte_pleine = <?php echo json_encode($porte_pleine); ?>;
      var porte_vitre = <?php echo json_encode($porte_vitre); ?>;
      var porte_coulissante = <?php echo json_encode($porte_coulissante); ?>;
      var porte_bi_cadreAluminium = <?php echo json_encode($porte_bi_cadreAluminium); ?>;
      var porte_bi_bois = <?php echo json_encode($porte_bi_bois); ?>;
      var accessoire_bequillage = <?php echo json_encode($accessoire_bequillage); ?>;
      var accessoire_paumelle_visibles = <?php echo json_encode($accessoire_paumelle_visibles); ?>;
      var accessoire_paumelle_invisibles = <?php echo json_encode($accessoire_paumelle_invisibles); ?>;
      var accessoire_serrure_standard = <?php echo json_encode($accessoire_serrure_standard); ?>;
      var accessoire_serrure_magnetique = <?php echo json_encode($accessoire_serrure_magnetique); ?>;
      var accessoire_oculus = <?php echo json_encode($accessoire_oculus); ?>;
      var ferme_porte_visible = <?php echo json_encode($ferme_porte_visible); ?>;
      var ferme_porte_invisible = <?php echo json_encode($ferme_porte_invisible); ?>;
      //Option
      var option = <?php echo json_encode($option); ?>;
      console.log(option);

      var pptx = new PptxGenJS();

      /*------PREMIERE PAGE-------*/

      /*------PLACEHOLDERS-------*/
      if(evidence){
        if(e_cj){
          var slide = pptx.addSlide();
          slide.addImage({ path: "../ressources/pptx_placeholder/e_cj.png", x:0, y:0, w:'100%', h:'100%' });
          if(e_cj_p){
            var slide = pptx.addSlide();
            slide.addImage({ path: "../ressources/pptx_placeholder/e_cj_p.png", x:0, y:0, w:'100%', h:'100%' });
          }if(e_cj_v || e_cj_va){
            var slide = pptx.addSlide();
            slide.addImage({ path: "../ressources/pptx_placeholder/e_cj_v.png", x:0, y:0, w:'100%', h:'100%' });
          }
        }if(e_bb){
          var slide = pptx.addSlide();
          slide.addImage({ path: "../ressources/pptx_placeholder/e_bb.png", x:0, y:0, w:'100%', h:'100%' });
          if(e_bb_p){
            var slide = pptx.addSlide();
            slide.addImage({ path: "../ressources/pptx_placeholder/e_bb_p.png", x:0, y:0, w:'100%', h:'100%' });
          }if(e_bb_v || e_bb_va){
            var slide = pptx.addSlide();
            slide.addImage({ path: "../ressources/pptx_placeholder/e_bb_v.png", x:0, y:0, w:'100%', h:'100%' });
          }
        }
      }
      /*let textboxText = "Hello World from PptxGenJS!";
      let textboxOpts = { x: 1, y: 2, color: "363636", fill: "F1F1F1" };
      slide.addText(textboxText, textboxOpts);*/
      if(boreale){
        if(boreale_bb){
          var slide = pptx.addSlide();
          slide.addImage({ path: "../ressources/pptx_placeholder/boreale.png", x:0, y:0, w:'100%', h:'100%' });
        }if(boreale_verriere){
          var slide = pptx.addSlide();
          slide.addImage({ path: "../ressources/pptx_placeholder/boreale_verriere.png", x:0, y:0, w:'100%', h:'100%' });
        }
      }

      if(evidence_box){
        if(box_little){
          var slide = pptx.addSlide();
          slide.addImage({ path: "../ressources/pptx_placeholder/e_box_little.png", x:0, y:0, w:'100%', h:'100%' });
        }if(box_duo){
          var slide = pptx.addSlide();
          slide.addImage({ path: "../ressources/pptx_placeholder/e_box_duo.png", x:0, y:0, w:'100%', h:'100%' });
        }if(box_media){
          var slide = pptx.addSlide();
          slide.addImage({ path: "../ressources/pptx_placeholder/e_box_media.png", x:0, y:0, w:'100%', h:'100%' });
        }if(box_alta){
          var slide = pptx.addSlide();
          slide.addImage({ path: "../ressources/pptx_placeholder/e_box_alta.png", x:0, y:0, w:'100%', h:'100%' });
        }if(box_grande){
          var slide = pptx.addSlide();
          slide.addImage({ path: "../ressources/pptx_placeholder/e_box_grande.png", x:0, y:0, w:'100%', h:'100%' });
        }
      }

      if(porte_bi_bois){
        var slide = pptx.addSlide();
        slide.addImage({ path: "../ressources/pptx_placeholder/porte_bi_bois.png", x:0, y:0, w:'100%', h:'100%' });
        var isPorteBi = true;
      } if(porte_bi_cadreAluminium){
        var slide = pptx.addSlide();
        slide.addImage({ path: "../ressources/pptx_placeholder/porte_bi_cadreAlu.png", x:0, y:0, w:'100%', h:'100%' });
        var isPorteBi = true;
      } if(porte_pleine){
        var slide = pptx.addSlide();
        slide.addImage({ path: "../ressources/pptx_placeholder/porte_pleine.png", x:0, y:0, w:'100%', h:'100%' });
        var isPorteBi = false;    
      } if(porte_vitre){
        var slide = pptx.addSlide();
        slide.addImage({ path: "../ressources/pptx_placeholder/porte_clarit.png", x:0, y:0, w:'100%', h:'100%' });
        var isPorteBi = false;    
      } if(porte_coulissante){
        var slide = pptx.addSlide();
        slide.addImage({ path: "../ressources/pptx_placeholder/porte_coulissante.png", x:0, y:0, w:'100%', h:'100%' });
        var isPorteBi = false;    
      }

      if(accessoire_bequillage && isPorteBi){
        var slide = pptx.addSlide();
        slide.addImage({ path: "../ressources/pptx_placeholder/accessoire_bequillage_bi.png", x:0, y:0, w:'100%', h:'100%' });
      }if(accessoire_bequillage && !isPorteBi){
        var slide = pptx.addSlide();
        slide.addImage({ path: "../ressources/pptx_placeholder/accessoire_bequillage.png", x:0, y:0, w:'100%', h:'100%' });
      } if(accessoire_paumelle_invisibles){
        var slide = pptx.addSlide();
        slide.addImage({ path: "../ressources/pptx_placeholder/accessoire_paumelles_invisible.png", x:0, y:0, w:'100%', h:'100%' });
      }

      if(ferme_porte_visible){
        var slide = pptx.addSlide();
        slide.addImage({ path: "../ressources/pptx_placeholder/accessoire_fermeporte_visible.png", x:0, y:0, w:'100%', h:'100%' });
      } if(ferme_porte_invisible){
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

      /*------Création du PPTX-------*/
      pptx.company = 'Mecanalu';
      pptx.writeFile({fileName: 'Projet-DOE-Mecanalu.pptx'});

    }
    
    function SetInvisible(id){
        var element = document.getElementById(id);
        element.hidden = true;
    }
    
    var zip_bool = <?php echo json_encode($zip_bool); ?>;
    if(!zip_bool){
      SetInvisible("buttonZIP");
    }
    
  </script>

  <footer>
    <button onclick="window.location.href='index.php'">Retour accueil</button>
  </footer>
</html>