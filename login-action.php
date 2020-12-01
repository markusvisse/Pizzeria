<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="index.css" type="text/css" rel="stylesheet">
    <link href="nav.css" type="text/css" rel="stylesheet">
    <link href="login-action.css" type="text/css" rel="stylesheet">
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
            <div id="formularz">
                <form method="POST" action="login-mechanism.php">
                    Logowanie<br>
                    Login: <input type="text" name="login" required><br>
                    Hasło: <input type="password" name="password" required><br>
                    <input type="submit" value="Zaloguj">
                </form>
            </div>
        </div>
    </div>
</body>
</html>