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

    <title>MaxHealth</title>
    <meta name="description">
    <meta name="keywords">
    <meta name="author" content="Patryk Sikora">
    <meta http-equiv="X-Ua-Compatible" content="IE=edge">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../main.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&amp;subset=latin-ext" rel="stylesheet">

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

        <div class="collapse navbar-collapse" id="mainmenu">

            <ul class="navbar-nav mr-auto">

                <li class="nav-item active">
                    <a class="nav-link" href="index.php"> Start </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false" id="submenu" aria-haspopup="true"> Lekarze </a>

                    <div class="dropdown-menu" aria-labelledby="submenu">

                        <a class="dropdown-item" href="mariusz.php"> Mariusz Miras </a>
                        <a class="dropdown-item" href="marta.php"> Marta Sondej </a>
                        <a class="dropdown-item" href="martyna.php"> Martyna Szalony </a>

                    </div>

                </li>

                <li class="nav-item">
                    <a class="nav-link" href="register.php"> Zarejestruj się </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#"> Kontakt </a>
                </li>

            </ul>

            <form class="form-inline" method="post" action="login.php">

                <input id="login" class="form-control mr-1" type="text" placeholder="Login" aria-label="Login">
                <input id="password" class="form-control mr-1" type="password" placeholder="Hasło" aria-label="Hasło">
                <button class="btn btn-light shadow bg-body rounded" type="submit">Zaloguj się</button>

            </form>

        </div>

    </nav>

</header>

<main>

    <article>

        <div class="container">

            <div class="row">

                <aside class="col-12 text-center my-5">
                    <h1>Martyna Szalony</h1>
                    </a>
                </aside>

                <div class="col-lg-8 bg-white text-body wpis">

                    <header>

                        <h1 class="h2 font-weight-bold text-uppercase ml-0 mb-4 text-center text-md-left">Martyna Szalony</h1>

                    </header>

                    <p></p>

                    <blockquote class="blockquote">

                        <p class="mb-1">Psycholog (w odniesieniu do kobiet stosuje się formę psycholożka[1])– osoba posiadająca właściwe kwalifikacje, potwierdzone wymaganymi dokumentami, do udzielania świadczeń psychologicznych polegających w szczególności na: diagnozie psychologicznej, opiniowaniu, orzekaniu, psychoterapii (po ukończeniu studiów podyplomowych w tym zakresie) oraz na udzielaniu pomocy psychologicznej.</p>
                        <footer class="blockquote-footer">Martyna Szalony</footer>

                    </blockquote>

                </div>

                <aside class="col-lg-4">

                    <img class="img-thumbnail" src="../img/doc3.jpg" alt="Martyna Szalony">

                    <h3 class="h4 my-4">Lekarze</h3>
                    <ul class="list-group">
                        <a href="mariusz.php" class="list-group-item list-group-item-dark list-group-item-action">Mariusz Miras</a>
                        <a href="marta.php" class="list-group-item list-group-item-dark list-group-item-action">Marta Sondej</a>
                        <a href="martyna.php" class="list-group-item list-group-item-dark list-group-item-action active">Martyna Szalony</a>
                    </ul>

                </aside>

            </div>

        </div>

    </article>

</main>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

<script src="../js/bootstrap.min.js"></script>

</body>
</html>