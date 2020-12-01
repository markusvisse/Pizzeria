<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="index.css" type="text/css" rel="stylesheet">
    <link href="nav.css" type="text/css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">
    <title>Pizzeria Soprano</title>
</head>
<body onload=clock()>
    <div id="container">
        <?php
            session_start();
            include_once("nav.php");
            include_once("db-connect.php");
        ?>
        <div class="therest">
            <?php
            if(!isset($_SESSION['user']))
            {
            ?>
                <div class="welcome">Witaj: nieznajomy</div>
                <div class="info">Aby zamówić pizze online proszę się zalogować lub zarejestrować konto.</div>
                <a href="login-action.php" class="but1">Zaloguj się</a>
                <a href="register-action.php" class="but1">Zarejestruj się</a>
            <?php
            }
            else
            {
            ?>
                <div class="welcome">Witaj: <?php echo $_SESSION['user']; ?></div>
            <?php
            }
            ?>
        </div>
    </div>
</body>
</html>
