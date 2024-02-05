<?php
//Prendo il paragrafo e la parola da censurare dai parametri GET
$paragraph = $_GET['paragraph'];
$badWord = $_GET['badWord'];

//Stampo il paragrafo e la sua lunghezza
//echo "<h2>Paragrafo:</h2>";
//echo "<p>$paragraph</p>";
//echo "<p>Lunghezza del paragrafo: " . strlen($paragraph) . " caratteri</p>";

//Sostituisco la parola da censurare con ***
$censuredParagraph = str_replace($badWord, '***', $paragraph);

//Stampo il paragrafo censurato e la sua lunghezza
//echo "<h2>Paragrafo Censurato:</h2>";
//echo "<p>$censuredParagraph</p>";
//echo "<p>Lunghezza del paragrafo censurato: " . strlen($censuredParagraph) . " caratteri</p>";
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>PHP Badwords</title>
</head>

    <body class="bg-success">

        <div class="container p-5">

            <h1 class="text-danger text-center">Risultato</h1>

            <div>
                <h2 class="text-danger mb-3">Paragrafo senza censura:</h2>
                <p class="text-warning"><?php echo $paragraph ?></p>
                <p class="text-warning">Lungezza del paragrafo senza censura: <span class="text-warning fs-1 px-2 fw-bold"><?php echo strlen($paragraph)?></span></p>
                
            </div>

            <div>
                <h2 class="text-danger mb-3">Paragrafo censurato:</h2>
                <p class="text-warning"><?php echo $censuredParagraph ?></p>
                <p class="text-warning">Lungezza del paragrafo censurato: <span class="text-warning fs-1 px-2 fw-bold"><?php echo strlen($censuredParagraph)?></span></p>
            </div>

        </div>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>

</html>

