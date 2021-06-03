<?php
    session_start();

    $zip = $_SESSION['zip'];

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

?>

<script src="https://cdn.jsdelivr.net/gh/gitbrent/pptxgenjs@3.6.0/dist/pptxgen.bundle.js"></script>

    <script type="text/javascript">
        var zip = <?php echo json_encode($zip); ?>;

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

        /*---- Placeholders ----*/
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

        /*------Fiches Techniques-------*/
        //if (fiche_technique == true){
          slide = pptx.addSlide();
          slide.addText(
          [
              { text:'Catalogues et fiches techniques : Evidence', options:{ fontSize:25, bold:true, paraSpaceAfter:25, breakLine:true } }
          ],
          { x:0.5, y:0.3, h:1, align:'left' }
          );


          /* Fiches Techniques Evidence*/
          if(produit=="e_cj"){
            slide.addText(
              [
                  { text:'Catalogue Technique Evidence', options:{ fontSize:18, hyperlink:{url:'https://www.mecanalu.com/_PDF_module/_Evidence/catalogue%20technique%20EVIDENCE.pdf'}, paraSpaceAfter:10, indentLevel:1, breakLine:true } },
                  { text:'CERFF Evidence', options:{ fontSize:18, hyperlink:{url:'https://www.mecanalu.com/_PDF_module/_Evidence/CERFF%20EVIDENCE.pdf'}, paraSpaceAfter:10, indentLevel:1, breakLine:true } },
                  { text:'FDES Mecanalu Evidence', options:{ fontSize:18, hyperlink:{url:'https://www.mecanalu.com/_PDF_module/_Evidence/FDES-MECANALU-EVIDENCE.pdf'}, paraSpaceAfter:10, indentLevel:1, breakLine:true } },
                  { text:'Fiche Technique Scapa 3204', options:{ fontSize:18, hyperlink:{url:'https://www.mecanalu.com/_PDF_module/_Evidence/Fiche-tech-joint-M2.pdf'}, paraSpaceAfter:10, indentLevel:1, breakLine:true } }
              ],
              { x:0.5, y:1.8, h:1, align:'left' }
              );
            /*if(remplissage=="plein"){
              slide.addText(
                console.log("e cj plein");
            }else if(remplissage=="vitre" || remplissage=="vitre_allege"){
                console.log("e cj vitre");
            }*/
          } else if(produit=="e_bb"){
              slide.addText(
              [
                  { text:'Catalogue Technique Evidence', options:{ fontSize:18, hyperlink:{url:'https://www.mecanalu.com/_PDF_module/_Evidence/catalogue%20technique%20EVIDENCE.pdf'}, paraSpaceAfter:10, indentLevel:1, breakLine:true } },
                  { text:'CERFF Evidence', options:{ fontSize:18, hyperlink:{url:'https://www.mecanalu.com/_PDF_module/_Evidence/CERFF%20EVIDENCE.pdf'}, paraSpaceAfter:10, indentLevel:1, breakLine:true } },
                  { text:'FDES Mecanalu Evidence', options:{ fontSize:18, hyperlink:{url:'https://www.mecanalu.com/_PDF_module/_Evidence/FDES-MECANALU-EVIDENCE.pdf'}, paraSpaceAfter:10, indentLevel:1, breakLine:true } },
                  { text:'Fiche Technique Scapa 3204', options:{ fontSize:18, hyperlink:{url:'https://www.mecanalu.com/_PDF_module/_Evidence/Fiche-tech-joint-M2.pdf'}, paraSpaceAfter:10, indentLevel:1, breakLine:true } },
                  { text:'Huisserie Bord à Bord C24', options:{ fontSize:18, hyperlink:{url:'https://www.mecanalu.com/_PDF_module/_Evidence/Cloison%20Evidence%20Bord%20%C3%A0%20bord/catalogue%20technique%20huisserie%20BAB%20et%20portes%20Bi%20affleurantes%20ep.73.pdf'}, paraSpaceAfter:10, indentLevel:1, breakLine:true } }
              ],
              { x:0.5, y:1.8, h:1, align:'left' }
              );

              /*if(remplissage=="plein"){
                console.log("e bb plein");
              }else if(remplissage=="vitre" || remplissage=="vitre_allege"){
                console.log("e bb vitre");
              }*/
          }

          slide.addImage({ path: "../ressources/mecanalu.png", x:'85%', y:'85%', w:1, h:0.5});


          /* Fiches Techniques Options*/
          slide = pptx.addSlide();
          slide.addText(
          [
              { text:'Catalogues et fiches techniques : Options et finitions', options:{ fontSize:22, bold:true, paraSpaceAfter:25, breakLine:true } }
          ],
          { x:0.5, y:0.3, h:1, align:'left' }
          );
          if(option == "option_store"){
            slide.addText(
            [
              { text:'Caractéristiques Store', options:{ fontSize:18, hyperlink:{url:'https://www.mecanalu.com/_PDF_module/_Options%20&%20Finitions/Stores/Caract%C3%A9ristique%20store.pdf'}, paraSpaceAfter:10, indentLevel:1, breakLine:true } },
              { text:'Fiche Technique Store', options:{ fontSize:18, hyperlink:{url:'https://www.mecanalu.com/_PDF_module/_Options%20&%20Finitions/Stores/Fiche%20Technique-store.pdf'}, paraSpaceAfter:10, indentLevel:1, breakLine:true } }   
            ],
            { x:0.5, y:1.2, h:1, align:'left' }
            );
          } else if(option == "option_ecrimur"){
            slide.addText(
            [
              { text:'Caractéristiques Ecrimur', options:{ fontSize:18, hyperlink:{url:'https://www.mecanalu.com/_PDF_module/_Options%20&%20Finitions/Ecrimur/Ecrimur%20Mecanalu/Caractéristiques%20ecrimur.pdf'}, paraSpaceAfter:10, indentLevel:1, breakLine:true } },
              { text:'Fiche Technique Ecrimur', options:{ fontSize:18, hyperlink:{url:'https://www.mecanalu.com/_PDF_module/_Options%20&%20Finitions/Ecrimur/Ecrimur%20Mecanalu/Fiche%20technique%20ecrimur.pdf'}, paraSpaceAfter:10, indentLevel:1, breakLine:true } }   
            ],
            { x:0.5, y:1.2, h:1, align:'left' }
            );
          }
            slide.addImage({ path: "../ressources/mecanalu.png", x:'85%', y:'85%', w:1, h:0.5});
          

          /* Fiches Techniques Portes*/
          slide = pptx.addSlide();
          slide.addText(
          [
              { text:'Catalogues et fiches techniques : Portes', options:{ fontSize:25, bold:true, paraSpaceAfter:25, breakLine:true } }
          ],
          { x:0.5, y:0.3, h:1, align:'left' }
          );
          slide.addText(
            [
                { text:'Butée 3737', options:{ fontSize:18, hyperlink:{url:'https://www.mecanalu.com/_PDF_module/_Portes/Butée%203737.pdf'}, paraSpaceAfter:10, indentLevel:1, breakLine:true } },
                { text:'CERFF Bloc-porte', options:{ fontSize:18, hyperlink:{url:'https://www.mecanalu.com/_PDF_module/_Portes/Cerff%20bloc-porte.pdf'}, paraSpaceAfter:10, indentLevel:1, breakLine:true } },
                { text:'Fiche Technique Cylindre de sûreté ALPHA', options:{ fontSize:18, hyperlink:{url:'https://www.mecanalu.com/_PDF_module/_Portes/Fiche%20technique%20Cylindre%20de%20sûreté%20ALPHA.pdf'}, paraSpaceAfter:10, indentLevel:1, breakLine:true } },
                { text:'Joint Huisserie', options:{ fontSize:18, hyperlink:{url:'https://www.mecanalu.com/_PDF_module/_Portes/Joint%20Huisserie.pdf'}, paraSpaceAfter:10, indentLevel:1, breakLine:true } }
            ],
            { x:0.5, y:1.8, h:1, align:'left' }
          );


          slide.addImage({ path: "../ressources/mecanalu.png", x:'85%', y:'85%', w:1, h:0.5});
        //}

        
        /*------Création du PPTX-------*/
        pptx.company = 'Mecanalu';
        pptx.writeFile({fileName: 'Projet-DOE-Mecanalu.pptx'});
        //pptx.writeFile('Projet-DOE-Mecanalu');
        //pptx.writeFile({fileName: 'Projet-DOE-Mecanalu.pptx', compression:true})

        /*var zip = new JSZip();
        //zip.file("hello.txt", "Hello World\n");
        zip.folder("nested").file("hello.txt", "Hello World\n");
        var promise = null;
        if (JSZip.support.uint8array) {
          promise = zip.generateAsync({type : "uint8array"});
        } else {
          promise = zip.generateAsync({type : "string"});
        }*/


    </script>

<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../mecanalu.css" />
        <title>Mecanalu - Création de l'archive</title>
    </head>

    <body id="page">
    <div class="header">
        <?php include('../includes/header_evidence.html'); ?>
    </div> 

    <div id="content" style="height:75%;">
      <h3> Création de l'archive </h3>
    </div>
    </body>

    <footer>
      <button onclick="window.location.href='../index.php'">Retour accueil</button>
    </footer>
</html>