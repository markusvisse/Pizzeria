<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="index.css" type="text/css" rel="stylesheet">
    <link href="nav.css" type="text/css" rel="stylesheet">
    <link href="register-action.css" type="text/css" rel="stylesheet">
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
            <div>
                <div id="header-register">Rejestracja konta</div>
                <div id="register">
                    <div id="side-left">
                        <div id="middle-left">
                            <div id="names">
                                Login:
                                <br>Hasło:
                                <br>Powtórz hasło:
                                <br>Email:
                                <br>Imie:
                                <br>Nazwisko:
                                <br>Numer Telefonu:
                                <br>Miasto:
                                <br>Kod pocztowy:
                                <br>Ulica:
                                <br>Numer domu:
                            </div>
                        </div>
                    </div>
                    <div id="side-right">
                        <div id="middle-right">
                            <div id="form">
                                <form id="register-form" method="POST" action="register-mechanism.php">
                                    <input class="field" type="text" placeholder="Podaj login:" name="login" >
                                    <input class="field" type="password" placeholder="Podaj hasło:" name="password" >
                                    <input class="field" type="password" placeholder="Powtórz hasło:" name="2_password" >
                                    <input class="field" type="text" placeholder="Podaj email:" name="email" >
                                    <input class="field" type="text" placeholder="Podaj imię:" name="name" >
                                    <input class="field" type="text" placeholder="Podaj nazwisko:" name="surname" >
                                    <input class="field" type="text" placeholder="Podaj numer telefonu:" name="phone_number" >
                                    <input class="field" type="text" placeholder="Podaj miasto:" name="city" >
                                    <input class="field" type="text" placeholder="Podaj kod pocztowy:" name="postcode" >
                                    <input class="field" type="text" placeholder="Podaj ulice:" name="street" >
                                    <input class="field" type="text" placeholder="Podaj numer domu:" name="street_number" >
                                </form>
                            </div>
                        </div>
                    </div>
                    <div style="clear:both;"></div>
                    <div id="button-triangle">
                        <div id="but-padding"><input id="but-submit" value="Zarejestruj się" type="submit" form="register-form"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>
