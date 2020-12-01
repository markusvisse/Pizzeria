<?php

if(strlen($_POST['login'])<4)
{
    echo 'login ma mniej niz 4 znaki';
}
else
{
    if(strlen($_POST['login'])>15)
    {
        echo 'login jest za dlugi (l>15)';
    }
    else
    { //sprawdzam czy haslo posiada dużą litere, przynajmniej 1 cyfre oraz czy ma więcej niż 6 znaków
        if(!preg_match('/[A-Z]/', $_POST['password'])||!preg_match('/\d/', $_POST['password'])&&strlen($_POST['password'])>6)
        {
            echo 'haslo musi miec przynajmniej 1 liczbę oraz dużą literę oraz byc dluzsze niz 6 znakow';
        }
        else
        {
            if(strlen($_POST['password'])>25)
            {
                echo 'podano zbyt dlugie haslo';
            }
            else
            {
                if($_POST['password']!=$_POST['2_password'])
                {
                    echo 'hasla sie nie zgadzaja';
                }
                else
                {//sprawdzam czy nieprawdą jest, że: zmienna email ma w sobie znak "@"
                    if(!strpos($_POST['email'],"@"))
                    {
                        echo 'nieprawidlowa forma email (email bez @)';
                    }
                    else
                    {
                        if(strlen($_POST['email'])>25)
                        {
                            echo 'podano zbyt dlugi email';
                        }
                        else
                        {
                            if(strlen($_POST['email'])<5)
                            {
                                echo 'podano zbyt krotki email';
                            }
                            else
                            {
                                if(strlen($_POST['name'])>20)
                                {
                                    echo 'podano zbyt dlugie imie';
                                }
                                else
                                {
                                    if(strlen($_POST['name'])<2)
                                    {
                                        echo 'podano zbyt krotkie imie';
                                    }
                                    else
                                    {
                                        if(strlen($_POST['surname'])>25)
                                        {
                                            echo 'podano zbyt dlugie nazwisko';
                                        }
                                        else
                                        {
                                            if(strlen($_POST['surname'])<3)
                                            {
                                                echo 'podano zbyt krotkie nazwisko';
                                            }
                                            else
                                            {
                                                if(strlen($_POST['phone_number'])>9)
                                                {
                                                    echo'podano zbyt dlugi numer telefonu';
                                                }
                                                else
                                                {
                                                    if(strlen($_POST['phone_number'])<7)
                                                    {
                                                        echo'podano zbyt krotki numer telefonu';
                                                    }
                                                    else
                                                    {
                                                        if(strlen($_POST['city'])>20)
                                                        {
                                                            echo 'zbyt dluga nazwa miasta';
                                                        }
                                                        else
                                                        {
                                                            if(strlen($_POST['city'])<3)
                                                            {
                                                                echo 'zbyt krotka nazwa miasta';
                                                            }
                                                            else
                                                            {
                                                                if(!strpos($_POST['postcode'], "-"))
                                                                {
                                                                    echo 'nieprawidlowa forma kodu pocztowego';
                                                                }
                                                                else
                                                                {
                                                                    if(strlen($_POST['postcode'])!=6)
                                                                    {
                                                                        echo 'blad w kodzie pocztowym';
                                                                    }
                                                                    else
                                                                    {
                                                                        if(strlen($_POST['street'])>20)
                                                                        {
                                                                            echo'zbyt dluga nazwa ulicy';
                                                                        }
                                                                        else
                                                                        {
                                                                            if(strlen($_POST['street'])<3)
                                                                            {
                                                                                echo'zbyt krotka nazwa ulicy';
                                                                            }
                                                                            else
                                                                            {
                                                                                if(strlen($_POST['street_number'])>10)
                                                                                {
                                                                                    echo'zbyt dluga nazwa domu';
                                                                                }
                                                                                else
                                                                                {
                                                                                    echo 'all good';
                                                                                }
                                                                            }
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}