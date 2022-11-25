<?php
$word = $_GET['word'];
$phrase = $_GET['phrase'];
$phraseLength = strlen($phrase);
$phraseCensored = str_replace($word, '***', $phrase);
$phraseCensoredLength = strlen($phraseCensored);
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
    <title>PHP-Badwords</title>
</head>

<body>
    <div class="container text-center pt-5">
        <h2 class="text-uppercase text-success fw-bold">Number of characters in the entered text: <?php echo $phraseLength ?></h2>
        <p class="fs-3 pt-5 pb-5 text-center"><?php echo $phrase ?></p>
        <h2 class="text-uppercase text-danger fw-bold">Number of characters in the entered text censored: <?php echo $phraseCensoredLength ?></h2>
        <p class="fs-3 pt-5 pb-5 text-center"><?php echo $phraseCensored ?></p>
    </div>
</body>