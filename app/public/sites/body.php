<html>
    <head>
        <meta charset="utf-8">
        <title>Das Alphabet</title>
        <link rel="stylesheet" href="../css/style.css">    
    </head>

<body>
    <div class="main">
    <p>
        <?php
        $string = 'ABCDEFGHIJKLMNOPQRSTUVWXYZÄÖÜ';
        $stringLength = strlen($string);
        $randomIndex = mt_rand(0, $stringLength - 1);

        echo $string[$randomIndex];
        ?>
        .
    </p>
    </div>
    
</body>

</html>