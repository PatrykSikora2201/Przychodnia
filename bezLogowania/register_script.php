<?php
require_once 'connect.php';
$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

if ($polaczenie->connect_errno!=0)
{
    echo "Błąd połączenia numer: ".$polaczenie->connect_errno.' <br/> W celu otrzymania pomocy skontaktuj się z administratorem: <a href="mailto:m.mytych@o2.pl">m.mytych@o2.pl</a>';
    exit();
}
$polaczenie -> query("SET NAMES 'utf8'");

$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$dolegliwosc = $_POST['doleglowsc'];
$mail = $_POST['mail'];
$login = $_POST['login'];
$haslo = $_POST['haslo'];
$haslo = sha1($haslo);
echo $haslo;
    $add = $polaczenie -> query("INSERT INTO pacjenci (IMIE, NAZWISKO, DOLEGLIWOSC, EMAIL, LOGIN, HASLO) VALUES ('$imie.','$nazwisko.','$dolegliwosc','$mail','$login','$haslo')");
    echo '<script>alert("Zarejestrowano")</script>';
    $adres = $_SESSION['mail'];
    $tytul = "Zarejestrowano użytkownika";
    $wiadomosc = "Witamy nowego użytkownika na stronie MaxHealth.pl ";

    mail($adres, $tytul, $wiadomosc);
    header('Location: ..\bezLogowania\index.php');

?>

//$add = $polaczenie -> query('INSERT INTO pacjenci (IMIE, NAZWISKO, DOLEGLIWOSC, EMAIL, LOGIN, HASLO) VALUES ("'.$imie.'","'.$nazwisko.'","'.$dolegliwosc.'","'.$mail.'","'.$login.'","'.$haslo.'")');
