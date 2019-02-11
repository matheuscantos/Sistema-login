<?php 

    // permite o config
    define('__CONFIG__', true);
    //exige o config  
    require_once "inc/config.php"; 
    
?>

<!DOCTYPE html>
<html lang="pt">

    <head> 
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="ID=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="robots" content="follow">

        <title> Titulo da pagina </title>

        <base href="/" />

        <!-- UIkit CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/css/uikit.min.css" />
    </head>

    <body>
        <div class="uk-section uk-container">
        <?php 
  
        echo "Hello world " ;
        echo date ("Y m d");
        ?>

        <p> 
            <a href="curso/login.php">Login </a>
            <a href="curso/register.php">Cadastro </a>

        </div>

        <?php require_once "inc/footer.php"; ?>
    
    </body>
    