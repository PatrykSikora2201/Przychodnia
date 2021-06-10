<?php
session_start();
require_once '..\bezLogowania\connect.php';
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

    <title>MaxHealth - leczymy jako tako</title>
    <meta name="description">
    <meta name="keywords">
    <meta name="author" content="Patryk Sikora">
    <meta http-equiv="X-Ua-Compatible" content="IE=edge">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../main.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <![endif]-->

</head>

<body>

<header>

    <nav class="navbar navbar-dark bg-jumpers navbar-expand-lg">

        <a class="navbar-brand" href="#"><img src="../img/greek_cross.png" width="30" height="30" class="d-inline-block mr-1 align-bottom"> <a style="color:black">Max</a>Health.com</a></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Przełącznik nawigacji">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainmenu">

            <ul class="navbar-nav mr-auto">

                <li class="nav-item ">
                    <a class="nav-link" href="index2.php"> Start </a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link active" href="mojedane.php"> Moje dane </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="kontakt2.php"> Kontakt </a>
                </li>

            </ul>

            <form class="form-inline" action="logout_script.php">
                <p  style="margin-right: 10px; margin-bottom: 30px">Witaj </p>
                                <?php
                                    echo "<p>".$_SESSION['imie']." ".$_SESSION['nazwisko']."</p>";
                                ?>

                <button class="btn btn-light shadow bg-body rounded" type="submit">Wyloguj sie</button>

            </form>

        </div>

    </nav>

</header>

<main>

    <section class="jumpers">

        <div class="container">

            <header>

                <h1>Dane użytkownika</h1>
<!--                imie i nazwusko uzytkownika-->
                <p  style="margin-right: 10px; margin-bottom: 30px">Witaj </p>
                <?php
                echo "<h3>".$_SESSION['imie']." ".$_SESSION['nazwisko']."</h3>";
                ?>

            </header>

            <div class="row">

                <div class="col-sm-6 col-md-5" style="text-align: left">

                    <figure>
                        Imie:

                   </figure>

                </div>

                <div class="col-sm-6 col-md-5" style="text-align: left">

                    <figure>
                        <?php
                        $imie = $_SESSION['imie'];
                        echo $imie;
                        ?>

                    </figure>

                </div>

                <div class="col-sm-6 col-md-5" style="text-align: left">

                    <figure>
                        Nazwisko:

                   </figure>

                </div>

                <div class="col-sm-6 col-md-5" style="text-align: left">

                    <figure>
                        <?php
                        $nazw = $_SESSION['nazwisko'];
                        echo $nazw;
                        ?>

                    </figure>

                </div>


                <div class="col-sm-6 col-md-5" style="text-align: left">
                    <figure>
                        Dolegliwość:
                    </figure>
                </div>

                <div class="col-sm-6 col-md-5" style="text-align: left">

                    <figure>
                        <?php
                        $dol = $_SESSION['dolegliwosc'];
                        echo $dol;
                        ?>


                   </figure>

                </div>

                <div class="col-sm-6 col-md-5" style="text-align: left">
                    <figure>
                        E-Mail:
                    </figure>
                </div>

                <div class="col-sm-6 col-md-5" style="text-align: left">
                    <figure>
                        <?php
                        $mail = $_SESSION['mail'];
                        echo $mail;
                        ?>

                    </figure>
                </div>

                <div class="col-sm-6 col-md-5" style="text-align: left">

                    <figure>

                  </figure>

                </div>


            </div>

        </div>

    </section>

</main>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

<script src="../js/bootstrap.min.js"></script>

</body>
</html>