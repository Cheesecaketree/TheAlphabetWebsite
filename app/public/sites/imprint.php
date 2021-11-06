<html lang="de">
    <head>
        <meta charset="utf-8">
        <title>Das Alphabet</title>
        <link rel="stylesheet" href="../css/style.css">    
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

    <script type='text/javascript' src='../js/TinyColor-master/tinycolor.js'></script> <!-- https://github.com/bgrins/TinyColor -->
    <script type='text/javascript'>
        var background = document.getElementById('cBackground'); 
        var colored = document.getElementsByClassName('colored');

        var colors = ["#77dd77", "#89cff0", "#ff6961", "#ff694f", "#ca9bf7", "#ffb7ce", "#fdfd96", "#cb99c9", "#bee7a5", "#befd73", "#bdb0d0", "#b2fba5"];
        var rand_index = Math.floor(Math.random() * colors.length);

        var char_color = colors[rand_index];
        var backg_color = tinycolor(char_color).spin(180).toString();

        background.style.backgroundColor = backg_color;

        for(var i = 0; i < colored.length; i++) {
            colored[i].style.color = char_color;
        }

        
    </script>

</html>
