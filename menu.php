<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="index.css" type="text/css" rel="stylesheet">
    <link href="nav.css" type="text/css" rel="stylesheet">
    <link href="menu.css" type="text/css" rel="stylesheet">
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
        <div style="height:3010px;" class="therest">

            <div id="header-menu">Menu</div>

                <div id="menu">

                    <div class="rectangle">
                        <div class="photo"><img class="photo-jpg"src="images/margherita.png">
                    </div>
                        <div class="decription">
                            <div class="name">Margharita</div>
                            <div class="specs">
                                <div class="components">
                                    <div class="name-components">Składniki:</div>
                                    <div class="name-of-components">sos pomidorowy, ser mozzarella, oregano</div>  
                                </div>
                                <div class="size">
                                    <div class="size1">Średnia: 30cm</div>
                                    <div class="size2">Duża: 40cm</div>
                                </div> <!-- Dodanie do każdej pizzy 2 rozmiarów, formularza big small, polaczenia ceny etc -->
                            </div>
                        </div>
                        <div class="square">
                            <div class="price">Cena: 18,90zł</div>
                            <div class="add-to-cart"><a class="cart-text" href="index.php">Dodaj do koszyka</a></div>
                        </div>
                    </div>

                    <br>

                    <div class="rectangle">
                        <div class="photo"><img class="photo-jpg"src="images/podlaska.png">
                    </div>
                        <div class="decription">
                            <div class="name">Podlaska</div>
                            <div class="specs">
                                <div class="components">
                                    <div class="name-components">Składniki:</div>
                                    <div class="name-of-components">sos pomidorowy, ser mozzarella, szynka, cebula mieszana, pomidor, oregano</div>  
                                </div>
                                <div class="size">Średnica pizzy: 30cm</div>
                            </div>
                        </div>
                        <div class="square">
                            <div class="price">Cena: 22,90zł</div>
                            <div class="add-to-cart"><a class="cart-text" href="index.php">Dodaj do koszyka</a></div>
                        </div>
                    </div>

                    <br>

                    <div class="rectangle">
                        <div class="photo"><img class="photo-jpg"src="images/vege_brokul.png">
                    </div>
                        <div class="decription">
                            <div class="name">Vege Brokuł</div>
                            <div class="specs">
                                <div class="components">
                                    <div class="name-components">Składniki:</div>
                                    <div class="name-of-components">sos pomidorowy, ser mozzarella, brokuł, kukurydza, pomidorki koktajlowe, oregano</div>  
                                </div>
                                <div class="size">Średnica pizzy: 30cm</div>
                            </div>
                        </div>
                        <div class="square">
                            <div class="price">Cena: 23,90zł</div>
                            <div class="add-to-cart"><a class="cart-text" href="index.php">Dodaj do koszyka</a></div>
                        </div>
                    </div>

                    <br>

                    <div class="rectangle">
                        <div class="photo"><img class="photo-jpg"src="images/salami.png">
                    </div>
                        <div class="decription">
                            <div class="name">Salami</div>
                            <div class="specs">
                                <div class="components">
                                    <div class="name-components">Składniki:</div>
                                    <div class="name-of-components">sos pomidorowy, ser mozzarella, salami, oregano</div>  
                                </div>
                                <div class="size">Średnica pizzy: 30cm</div>
                            </div>
                        </div>
                        <div class="square">
                            <div class="price">Cena: 22,90zł</div>
                            <div class="add-to-cart"><a class="cart-text" href="index.php">Dodaj do koszyka</a></div>
                        </div>
                    </div>

                    <br>

                    <div class="rectangle">
                        <div class="photo"><img class="photo-jpg"src="images/vesuvio.png">
                    </div>
                        <div class="decription">
                            <div class="name">Vesuvio</div>
                            <div class="specs">
                                <div class="components">
                                    <div class="name-components">Składniki:</div>
                                    <div class="name-of-components">sos pomidorowy, ser mozzarella, szynka, oregano</div>  
                                </div>
                                <div class="size">Średnica pizzy: 30cm</div>
                            </div>
                        </div>
                        <div class="square">
                            <div class="price">Cena: 22,90zł</div>
                            <div class="add-to-cart"><a class="cart-text" href="index.php">Dodaj do koszyka</a></div>
                        </div>
                    </div>

                    <br>

                    <div class="rectangle">
                        <div class="photo"><img class="photo-jpg"src="images/kurczak_curry.png">
                    </div>
                        <div class="decription">
                            <div class="name">Kurczak curry</div>
                            <div class="specs">
                                <div class="components">
                                    <div class="name-components">Składniki:</div>
                                    <div class="name-of-components">sos curry, ser mozzarella, curry, grillowany kurczak, ananas, cebula biała</div>  
                                </div>
                                <div class="size">Średnica pizzy: 30cm</div>
                            </div>
                        </div>
                        <div class="square">
                            <div class="price">Cena: 25,50zł</div>
                            <div class="add-to-cart"><a class="cart-text" href="index.php">Dodaj do koszyka</a></div>
                        </div>
                    </div>

                    <br>

                    <div class="rectangle">
                        <div class="photo"><img class="photo-jpg"src="images/grecka.png">
                    </div>
                        <div class="decription">
                            <div class="name">Grecka</div>
                            <div class="specs">
                                <div class="components">
                                    <div class="name-components">Składniki:</div>
                                    <div class="name-of-components">sos pomidorowy, ser mozzarella, ser typu feta, pomidor, oliwki zielone, czosnek, oregano</div>  
                                </div>
                                <div class="size">Średnica pizzy: 30cm</div>
                            </div>
                        </div>
                        <div class="square">
                            <div class="price">Cena: 22,90zł</div>
                            <div class="add-to-cart"><a class="cart-text" href="index.php">Dodaj do koszyka</a></div>
                        </div>
                    </div>

                    <br>

                    <div class="rectangle">
                        <div class="photo"><img class="photo-jpg"src="images/broccoli.png">
                    </div>
                        <div class="decription">
                            <div class="name">Broccoli</div>
                            <div class="specs">
                                <div class="components">
                                    <div class="name-components">Składniki:</div>
                                    <div class="name-of-components">sos czosnkowo-serowy, ser mozzarella, brokuły, kurczak grill, oregano</div>  
                                </div>
                                <div class="size">Średnica pizzy: 30cm</div>
                            </div>
                        </div>
                        <div class="square">
                            <div class="price">Cena: 25,50zł</div>
                            <div class="add-to-cart"><a class="cart-text" href="index.php">Dodaj do koszyka</a></div>
                        </div>
                    </div>

                    <br>

                    <div class="rectangle">
                        <div class="photo"><img class="photo-jpg"src="images/capriciosa.png">
                    </div>
                        <div class="decription">
                            <div class="name">Capriciosa</div>
                            <div class="specs">
                                <div class="components">
                                    <div class="name-components">Składniki:</div>
                                    <div class="name-of-components">sos pomidorowy, ser mozzarella, szynka, pieczarki, oregano</div>  
                                </div>
                                <div class="size">Średnica pizzy: 30cm</div>
                            </div>
                        </div>
                        <div class="square">
                            <div class="price">Cena: 23,90zł</div>
                            <div class="add-to-cart"><a class="cart-text" href="index.php">Dodaj do koszyka</a></div>
                        </div>
                    </div>

                    <br>

                    <div class="rectangle">
                        <div class="photo"><img class="photo-jpg"src="images/bbq.jpg">
                    </div>
                        <div class="decription">
                            <div class="name">BBQ Chicken</div>
                            <div class="specs">
                                <div class="components">
                                    <div class="name-components">Składniki:</div>
                                    <div class="name-of-components">sos barbecue, ser mozzarella, kurczak, cebula czerwona, oregano</div>  
                                </div>
                                <div class="size">Średnica pizzy: 30cm</div>
                            </div>
                        </div>
                        <div class="square">
                            <div class="price">Cena: 23,90zł</div>
                            <div class="add-to-cart"><a class="cart-text" href="index.php">Dodaj do koszyka</a></div>
                        </div>
                    </div>

                    <br>

                    <div class="rectangle">
                        <div class="photo"><img class="photo-jpg"src="images/swojska.jpg">
                    </div>
                        <div class="decription">
                            <div class="name">Swojska</div>
                            <div class="specs">
                                <div class="components">
                                    <div class="name-components">Składniki:</div>
                                    <div class="name-of-components">sos pomidorowy, ser mozzarella, kiełbasa żywiecka, ogórek kiszony, oregano</div>  
                                </div>
                                <div class="size">Średnica pizzy: 30cm</div>
                            </div>
                        </div>
                        <div class="square">
                            <div class="price">Cena: 22,90zł</div>
                            <div class="add-to-cart"><a class="cart-text" href="index.php">Dodaj do koszyka</a></div>
                        </div>
                    </div>

            </div>

        </div>
    </div>
</body>
</html>
