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
    slide = pptx.addSlide();
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
    slide.addImage({ path: "ressources/CJ-Plein-1.jpg", x:'55%', y:'25%',w:'30%', h:'30%'});
    slide.addImage({ path: "ressources/CJ-Plein-2.jpg", x:'55%', y:'60%',w:'30%', h:'30%'});

    /*------TROISIEME PAGE-------*/
    slide = pptx.addSlide();
    slide.addText(
    [
        { text:'Caractéristiques :', options:{ fontSize:30, bold:true, paraSpaceAfter:20, breakLine:true } },
        { text:'Epaisseur : x mm', options:{ fontSize:25, paraSpaceAfter:12, indentLevel:1, breakLine:true } },
        { text:'Hauteur : x mm', options:{ fontSize:25, paraSpaceAfter:12, indentLevel:1, breakLine:true } },
        { text:'Performances accoustiques :', options:{ fontSize:30, bold:true, paraSpaceAfter:20, breakLine:true } },
        { text:'Rw(+c) x à y dB', options:{ fontSize:25, paraSpaceAfter:12, indentLevel:1, breakLine:true } }
    ],
    { x:0.5, y:2, h:1, align:'left' }
    );

    /*------QUATRIEME PAGE-------*/
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

    /*------Création du PPTX-------*/
    pptx.writeFile('PptxGenJs-Basic-Slide-Demo'); 

    </script>

</html>