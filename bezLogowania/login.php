<?php
session_start();
//require_once 'connect.php';
//$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
//
//if ($polaczenie->connect_errno!=0)
//{
//exit();
//}
//$polaczenie -> query("SET NAMES 'utf8'");
//
//$login=$_POST['login'];
//$haslo=$_POST['haslo'];
//
//echo $login;
//echo $haslo;
//
//$compareCredentials = $polaczenie -> mysqli_query('SELECT ID_PACJENTA FROM pacjenci WHERE LOGIN=.$login AND HASLO='.md5($haslo));
//
//echo $compareCredentials;

//if($results > 0){
//    $_SESSION['id'] = $compareCredentials.getRow(0).get('ID_PACJENTA');
//}else
//    echo '<script>alert("Niepoprawne dane")';


require_once "connect.php";
$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

if ($polaczenie->connect_errno != 0) {
    echo "Błąd połączenia numer: " . $polaczenie->connect_errno . ' <br/> W celu otrzymania pomocy skontaktuj się z administratorem: ';
    exit();
}
$polaczenie->query("SET NAMES 'utf8'");


$login = $_POST['login'];
$haslo = $_POST['haslo'];

$login = htmlentities($login, ENT_QUOTES, "UTF-8");
$haslo = htmlentities($haslo, ENT_QUOTES, "UTF-8");
$haslo=sha1($haslo);
echo $haslo;
if ($rezultat = @$polaczenie->query("SELECT * FROM pacjenci WHERE LOGIN='$login' and HASLO='$haslo'")){
    $user_num = $rezultat->num_rows;
    if ($user_num > 0) {
        session_start();
        $_SESSION['zalogowany'] = true;

        $wiersz = $rezultat->fetch_assoc();
        $_SESSION['id'] = $wiersz['ID_PACJENTA'];
        $_SESSION['imie'] = $wiersz['IMIE'];
        $_SESSION['nazwisko'] = $wiersz['NAZWISKO'];
        $_SESSION['dolegliwosc'] = $wiersz['DOLEGLIWOSC'];
        $_SESSION['mail'] = $wiersz['EMAIL'];

        unset($_SESSION['blad']);
        $rezultat->free_result();
        header('Location: ..\Logowaniu\index2.php');
        echo $_SESSION['zalogowany'];
    }
    else{

        $_SESSION['blad'] = '<script>alert(Nieprawidlowe dane)</script>';
        header('Location: ..\bezLogowania\index.php');
    }

}

$polaczenie->close();


?>