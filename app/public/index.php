<html lang="de">
    <head>
        <meta charset="utf-8">
        <title>Das Alphabet</title>
        <link rel="stylesheet" href="../css/style.css">    
    </head>

    <body id="cBackground">
        <div class="main">
        <p class="big_text" id="character">
            <?php
            $string = utf8_decode("ABCDEFGHIJKLMNOPQRSTUVWXYZÄÖÜ");
            $stringLength = strlen($string);
            $randomIndex = mt_rand(0, $stringLength - 1);

            echo utf8_encode($string[$randomIndex]);
            ?>
        </p>
        </div>
        
    </body>

    <footer>
        <p>Contact me on Twitter: <a href="https://twitter.com/cheesecaketree">@Cheesecaketree</a></p>
        <p><a href="sites/imprint.html">Imprint</a></p>       
    </footer>

    <script type='text/javascript' src='js/TinyColor-master/tinycolor.js'></script>
    <script type='text/javascript'>
        var background = document.getElementById('cBackground');
        var symbol = document.getElementById('character');

        var colors = ["#77dd77", "#89cff0", "#ff6961", "#ff694f", "#ca9bf7", "#ffb7ce", "#fdfd96", "#cb99c9", "#bee7a5", "#befd73", "#bdb0d0", "#b2fba5"];
        var rand_index = Math.floor(Math.random() * colors.length);

        var char_color = colors[rand_index];
        var backg_color = tinycolor(char_color).spin(180).toString();

        symbol.style.color = char_color;
        background.style.backgroundColor = backg_color;
        
    </script>
</html>
