<?php 
$paragrafo = $_GET['paragrafo'];
$censura = $_GET['badword'];
$lunghezzastringa = strlen($paragrafo);
$censored = str_ireplace( $censura, "***", $paragrafo);




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Php Badwords</h1>
    <h2> La stringa originale è lunga: <?php echo strlen($paragrafo); ?>  caratteri</h2>
    <p> <?php echo $paragrafo ?> </p>

    <br>
    <h2> La stringa  è lunga: <?php echo strlen($censored); ?>  caratteri</h2>
    <p> <?php echo $censored?> </p>


    
</body>
</html>