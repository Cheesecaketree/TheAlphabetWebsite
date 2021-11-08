<html lang="de">
    <head>
        <meta charset="utf-8">
        <title>Das Alphabet</title>
        <link rel="stylesheet" href="../css/style.css">   
        <script type='text/javascript' src='js/colors.js'></script>
    </head>

    <body id="cBackground">
        <script type="text/javascript">
            window.onload = function() {
                main();
            }
        </script>

        <?php
            $string = utf8_decode("ABCDEFGHIJKLMNOPQRSTUVWXYZÄÖÜ");
            $stringLength = strlen($string);
            $randomIndex = mt_rand(0, $stringLength - 1);
            $randomLetter = $string[$randomIndex]
        ?>
        <div class="centered">
            <p class="colored letter" >
                <?php echo utf8_encode($randomLetter); ?>
            </p>
        </div>
        
    </body>

    <? echo file_get_contents("sites/footer.html") ?> 
</html>
