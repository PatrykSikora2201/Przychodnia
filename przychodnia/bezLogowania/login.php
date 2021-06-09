<?php
session_start();
require_once 'connect.php';
$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

if ($polaczenie->connect_errno!=0)
{
echo "Błąd połączenia numer: ".$polaczenie->connect_errno.' <br/> W celu otrzymania pomocy skontaktuj się z administratorem: <a href="mailto:m.mytych@o2.pl">m.mytych@o2.pl</a>';
exit();
}
$polaczenie -> query("SET NAMES 'utf8'");

$login=$_POST['login'];
$haslo=$_POST['haslo'];

echo $login;
echo $haslo;

// konto Patryk: login: patryk, hasło patryk1

//podaje login patryk, hasło marcin1

$compareCredentials = $polaczenie -> query('SELECT ID_PACJENTA FROM pacjenci WHERE LOGIN=.$login AND HASLO='.md5($haslo));
//wyciagnac dlugosc

if($compareCredentials.getLength() > 0){
    $_SESSION['id'] = $compareCredentials.getRow(0).get('ID_PACJENTA');
}else
    echo '<script>alert("Niepoprawne dane")';
?>