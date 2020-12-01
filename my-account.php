<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="index.css" type="text/css" rel="stylesheet">
    <link href="nav.css" type="text/css" rel="stylesheet">
    <link href="my-account.css" type="text/css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">
    <title>Pizzeria Soprano</title>
</head>
<body onload=clock()>
    <div id="container">
        <?php
            session_start();
            include_once("nav.php");

        ?>
        <div class="therest">
            <?php 
                if(!isset($_SESSION['user']))
                {
                    ?>
                    <div>Przed wejściem do zakładki 'Moje konto', musisz się zalogować.</div>
                    <a class="button" href="login-action.php">Zaloguj się</a>
                    <a class="button" href="register-action.php">Zarejestruj się</a>
                    <?php
                }
                else
                {
                    echo 'moje konto';
                }
            ?>
        </div>
    </div>
</body>
</html>
