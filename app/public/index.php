<html lang="de">
    <head>
        <meta charset="utf-8">
        <title>Das Alphabet</title>
        <script type='text/javascript' src='js/main.js'></script>
        <script type='text/javascript' src='js/randomHue.js'></script>
        <link rel="stylesheet" href="../css/style.css">   
  
    </head>

    <body id="cBackground">
        <div class="centered">
            <p class="colored letter" id="let">A</p>
        </div>

    </body>
    
    <? echo file_get_contents("sites/footer.html") ?>
    
    <script type="text/javascript">
        window.onload = function() {
            setLetter();
            setColors();
        }
        document.addEventListener('keydown', (event) => {
            var name = event.key;
            var code = event.code;
            if (name === 'Enter') {
                setLetter();
                setColors();
            }
        }, false);
    </script>
</html>
