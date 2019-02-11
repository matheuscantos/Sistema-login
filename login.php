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
            <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid>
                <form class="uk-form-stacked js-login">

                    <h2> Login </h2>

                    <fieldset class="uk-fieldset">

                        <legend class="uk-legend">Email</legend>

                        <div class="uk-margin">
                            <input class="uk-input" type="email" required='required' placeholder="Email@email.com">
                        </div>

                        <legend class="uk-legend">Senha</legend>

                        <div class="uk-margin">
                            <input class="uk-input" type="password" required='required' placeholder="Sua Senha">
                        </div>

                        <div class="uk-margin">
                            <button class="uk-button uk-button-default" type="submit">Login</button>
                        </div>

                        
                    </fieldset>
                </form>
            </div>

        </div>

        <?php require_once "inc/footer.php"; ?>
    
    </body>
    