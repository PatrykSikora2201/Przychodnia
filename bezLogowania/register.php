<?php
session_start();
$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "przychodnia";
$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

if ($polaczenie->connect_errno!=0)
{
    echo "Błąd połączenia numer: ".$polaczenie->connect_errno.' <br/> W celu otrzymania pomocy skontaktuj się z administratorem: <a href="mailto:patryksikora@o2.pl">patryksikora@o2.pl</a>';
    exit();
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Rejestracje - MaxHealth</title>
  <meta name="description">
  <meta name="keywords">
  <meta name="author" content="Patryk Sikora">
  <meta http-equiv="X-Ua-Compatible" content="IE=edge">

  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../main.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">

  <!--[if lt IE 9]>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
  <![endif]-->

</head>

<body>

<header>

  <nav class="navbar navbar-dark bg-jumpers navbar-expand-lg">

    <a class="navbar-brand" href="#"><img src="../img/greek_cross.png" width="30" height="30" class="d-inline-block mr-1 align-bottom" alt=""> <a style="color:black">Max</a>Health.com</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Przełącznik nawigacji">
      <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="navbar-nav mr-auto">

      <li class="nav-item">
        <a class="nav-link" href="index.php"> Start </a>
      </li>
    </ul>

    </div>

  </nav>

</header>

<main>

  <section class="jumpers">

    <div class="container">

      <header>

        <h1>Zarejestruj się</h1>

      </header>

      <div class="row">

        <div class="col-sm-8 col-md-12">



        </div>

        <div class="col-sm-6 col-md-12">
          <form method="post" action="register_script.php">
            <div class="form-group">
              <label for="registerImie">Podaj imie</label>
              <input name="imie" type="text" class="form-control" id="registerImie" aria-describedby="emailHelp" placeholder="Imie">
            </div>
            <div class="form-group">
              <label for="registerNazwisko">Podaj Nazwisko</label>
              <input name="nazwisko" type="text" class="form-control" id="registerNazwisko" aria-describedby="emailHelp" placeholder="Nazwisko">
            </div>
            <div class="form-group">
              <label for="registerDolegliwosc">Podaj Dolegliwość</label>
              <input name="doleglowsc" type="text" class="form-control" id="registerDolegliwosc" aria-describedby="emailHelp" placeholder="Dolegliwość">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Podaj E-Mail</label>
              <input name="mail" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-Mail">
            </div>
            <div class="form-group">
              <label for="registerLogin">Podaj Login</label>
              <input name="login" type="text" class="form-control" id="registerLogin" aria-describedby="emailHelp" placeholder="Login">
            </div>
            <div class="form-group">
              <label for="registerPassword">Podaj E-Mail</label>
              <input name="haslo" type="password" class="form-control" id="registerPassword" aria-describedby="emailHelp" placeholder="Hasło">
            </div>
            <button type="submit" class="btn btn-primary">Zarejestruj</button>
          </form>
        </div>


    </div>

  </section>

</main>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

<script src="../js/bootstrap.min.js"></script>

</body>
</html>