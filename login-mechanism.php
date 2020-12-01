<?php

session_start();

$users = array
(
    array("Maciek","koks29"),
    array("kuba12","megawonsz111"),
    array("kaczor","donald")
);
foreach($users as $user)
{
    if($user[0]==$_POST['login']&&$user[1]==$_POST['password'])
    {
        $_SESSION['user']=$_POST['login'];
    }
}
if(isset($_SESSION['user']))
{
    header("location: index.php");
}
else
{
    echo 'Podano błędne dane';
}
