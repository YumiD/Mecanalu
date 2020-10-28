<html>
    <script src="https://cdn.jsdelivr.net/npm/pptxgenjs@3.3.1/dist/pptxgen.bundle.js"></script>

    <script type="text/javascript">

    var pptx = new PptxGenJS();

    /*------PREMIERE PAGE-------*/
    var slide = pptx.addSlide();
    slide.addText( ' ', { x:5.0, y:0.5, w:'40%', h:'80%', align:'right', fontSize:24, color:'0088CC', fill:{ color:'F1F1F1', transparency:30 } } );
    slide.addImage({ path: "ressources/logo.png", x:0.5, y:0.5});
    slide.addText(
    [
        { text:'Mecanalu', options:{ fontSize:48, bold:true, breakLine:true } },
        { text:'Professional PowerPoint', options:{ fontSize:20 } }
    ],
    { x:0.5, y:1, h:3, align:'left' }
    );

    /*------SECONDE PAGE-------*/

    pptx.writeFile('PptxGenJs-Basic-Slide-Demo'); 

    </script>

</html>