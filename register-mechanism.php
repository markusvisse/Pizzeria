$errors = [];
if(strlen($_POST['login'])<4)
{
    $errors[] = 'login ma mniej niz 4 znaki';
}
    if(strlen($_POST['login'])>15)
    {
        $errors[] = 'login jest za dlugi (l>15)';
    }
    //sprawdzam czy haslo posiada dużą litere, przynajmniej 1 cyfre oraz czy ma więcej niż 6 znaków
        if(!preg_match('/[A-Z]/', $_POST['password'])||!preg_match('/\d/', $_POST['password'])&&strlen($_POST['password'])>6)
        {
            $errors[] = 'haslo musi miec przynajmniej 1 liczbę oraz dużą literę oraz byc dluzsze niz 6 znakow';
        }
        
            if(strlen($_POST['password'])>25)
            {
                $errors[] = 'podano zbyt dlugie haslo';
            }
                if($_POST['password']!=$_POST['2_password'])
                {
                    $errors[] = 'hasla sie nie zgadzaja';
                }
                //sprawdzam czy nieprawdą jest, że: zmienna email ma w sobie znak "@"
                    if(!strpos($_POST['email'],"@"))
                    {
                        $errors[] = 'nieprawidlowa forma email (email bez @)';
                    }
                        if(strlen($_POST['email'])>25)
                        {
                            $errors[] = 'podano zbyt dlugi email';
                        }
                            if(strlen($_POST['email'])<5)
                            {
                                $errors[] = 'podano zbyt krotki email';
                            }
                                if(strlen($_POST['name'])>20)
                                {
                                    $errors[] = 'podano zbyt dlugie imie';
                                }
                                    if(strlen($_POST['name'])<2)
                                    {
                                        $errors[] = 'podano zbyt krotkie imie';
                                    }
                                        if(strlen($_POST['surname'])>25)
                                        {
                                            $errors[] = 'podano zbyt dlugie nazwisko';
                                        }
                                            if(strlen($_POST['surname'])<3)
                                            {
                                                $errors[] = 'podano zbyt krotkie nazwisko';
                                            }
                                                if(strlen($_POST['phone_number'])>9)
                                                {
                                                    $errors[] = zbyt dlugi numer telefonu';
                                                }
                                                    if(strlen($_POST['phone_number'])<7)
                                                    {
                                                        e$errors[] = cho'podano zbyt krotki numer telefonu';
                                                    }
                                                        if(strlen($_POST['city'])>20)
                                                        {
                                                            $errors[] = 'zbyt dluga nazwa miasta';
                                                        }
                                                            if(strlen($_POST['city'])<3)
                                                            {
                                                                $errors[] = 'zbyt krotka nazwa miasta';
                                                            }
                                                                if(!strpos($_POST['postcode'], "-"))
                                                                {
                                                                    $errors[] = 'nieprawidlowa forma kodu pocztowego';
                                                                }
                                                                    if(strlen($_POST['postcode'])!=6)
                                                                    {
                                                                        $errors[] = 'blad w kodzie pocztowym';
                                                                    }
                                                                        if(strlen($_POST['street'])>20)
                                                                        {
                                                                            $errors[] = dluga nazwa ulicy';
                                                                        }
                                                                            if(strlen($_POST['street'])<3)
                                                                            {
                                                                                $errors[] = krotka nazwa ulicy';
                                                                            }
                                                                                if(strlen($_POST['street_number'])>10)
                                                                                {
                                                                                    $errors[] = dluga nazwa domu';
                                                                                }
                                                                                    
if(count($errors)){
	foreach($errors as $error):
		echo "$error<br/>";
	endforeach;
} else {
echo 'all good';
}
