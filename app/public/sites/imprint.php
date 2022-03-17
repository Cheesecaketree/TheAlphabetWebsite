<html lang="de">
    <head>
        <meta charset="utf-8">
        <title>Das Alphabet</title>
        <link rel="stylesheet" href="../css/style.css">    
        <script type='text/javascript' src='../js/main.js'></script>
        <script type='text/javascript' src='../js/randomHue.js'></script>
    </head>

    <body id="cBackground">
        
        <div class="centered">
            <div class="imprint_text">
                <p>
                    Site created and hosted by Felix Beermann. <br>
                    Contact me on Twitter! <a href="https://twitter.com/cheesecaketree" class="colored">@Cheesecaketree</a>
                    <br><br>
                    <a href="../index.php" class="colored">Back to start</a>
                </p>
                <p>Copyright © Felix Beermann <?php echo date("Y"); ?></p>
            </div>
        </div>
        
    </body>

    <? echo file_get_contents("./footer.html") ?> 

    <script type="text/javascript">
        window.onload = function() {
            setColors();
        }
        document.addEventListener('keydown', (event) => {
            var name = event.key;
            var code = event.code;
            if (name === 'Enter') {
                setColors();
            }
        }, false);
    </script>
</html>
