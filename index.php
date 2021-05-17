<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>
    
    <?php
    // My String
    $myString = 'Caspiterina mi è caduto il Talisker';
    
    // String Length
    $myStringLenght = strlen($myString);

    // Word to censore
    $wordToCensore = 'badword';

    // Badword
    $badword = $_GET[$wordToCensore];

    // Censore Badword
    $censored = str_replace($badword, '***', $myString);
    ?>

     <p> <?php echo $censored ?> </p>
     <p> La lunghezza della frase è: <?php echo $myString ?> </p>
</body>
</html>