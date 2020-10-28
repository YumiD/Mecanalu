<html>
    <script src="https://cdn.jsdelivr.net/npm/pptxgenjs@3.3.1/dist/pptxgen.bundle.js"></script>
    
    <?php
    $produit = $_POST['produit'];
    $type_cloison = $_POST['type_cloison'];
    $photos = $_POST['photos'];
    $epaisseur = $_POST['epaisseur'];
    $hauteur = $_POST['hauteur'];
    $DBmin = $_POST['DBmin'];
    $DBmax = $_POST['DBmax'];
      ?>

    <script type="text/javascript">

    var produit = <?php echo json_encode($produit); ?>;
    var type_cloison = <?php echo json_encode($type_cloison); ?>;
    var photos = <?php echo json_encode($photos); ?>;
    var epaisseur = <?php echo json_encode($epaisseur); ?>;
    var hauteur = <?php echo json_encode($hauteur); ?>;
    var DBmin = <?php echo json_encode($DBmin); ?>;
    var DBmax = <?php echo json_encode($DBmax); ?>;


    var pptx = new PptxGenJS();
    var slide = pptx.addSlide();

    slide.addText(
      epaisseur+' '+hauteur, 
    { x:0.0, y:0.25, w:'100%', h:1.5, align:'center', fontSize:24, color:'0088CC', fill:{ color:'F1F1F1' } }
    );

    
    var slide2 = pptx.addSlide();
    slide2.addText(
      produit+' '+type_cloison, 
    { x:0.0, y:0.25, w:'100%', h:1.5, align:'center', fontSize:24, color:'0088CC', fill:{ color:'F1F1F1' } }
    );


    pptx.writeFile('PptxGenJs-Basic-Slide-Demo'); 

    </script>
</html>