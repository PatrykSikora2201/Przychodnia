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
                    <a class="nav-link" href="index2.php"> Moje dane </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#"> Kontakt </a>
                </li>

            </ul>

            <form class="form-inline" action="login_script.php">
                <p>Witaj </p>

                <?php
                echo $_SESSION['id'];
                    $result = $polaczenie -> query("SELECT IMIE, NAZWISKO FROM pacjenci WHERE ID_PACJENTA=".$_SESSION['id']);
                    while ($row= mysqli_fetch_assoc($result)):echo "<p>".$row['IMIE']." ".$row['NAZWISKO']."</p>";
                endwhile
                ?>

            </form>

        </div>

    </nav>

</header>

<main>

    <section class="jumpers">

        <div class="container">

            <header>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">

                            <img class="d-block w-100" src="../img/slider1.jpg" alt="Szczepienia na COVID-19 w naszej placówce">
                            <h4>Szczepienia na COVID-19 w naszej placówce</h4>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../img/slider2.jpg" alt="Jesteśmy dostępni całą dobe">
                            <h4>Jesteśmy dostępni całą dobe</h4>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../img/slider3.jpg" alt="Mamy wyspecjalizowany i komunikatywny personel">
                            <h4>Mamy wyspecjalizowany i komunikatywny personel</h4>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <h1>Nasi specjaliści</h1>
                <p>Poniżej przedstawiono naszych specjalistów</p>

            </header>

            <div class="row">

                <div class="col-sm-6 col-md-5">

                    <figure>
                        <h1>Mariusz Miras</h1>
                        <a href="#"><img src="../img/doc2.jpg" alt="Mariusz Miras"></a>
                    </figure>

                </div>

                <div class="col-sm-6 col-md-5">

                    <figure>

                    </figure>

                </div>

                <div class="col-sm-6 col-md-5">

                    <figure>
                        <figcaption><b>Mariusz Miras</b> jest bardzo dobrym kardiologiem znanym w całej Polsce, także za granicą. Żadne serce nie jest dla niego problemem. W weekendy dorabia jako weterynarz, a jego miłość do suporeksu pozwolił mu na rozwinięcie skrzydeł w branży budowlano-remontowej</figcaption>
                    </figure>

                </div>

                <div class="col-sm-6 col-md-5">

                    <figure>
                        <h1>Marta Sondej</h1>
                        <a href="#"><img src="../img/doc1.jpg" alt="Marta Sondej"></a>

                    </figure>

                </div>


                <div class="col-sm-6 col-md-5">


                </div>

                <div class="col-sm-6 col-md-5">

                    <figure>
                        <figcaption><b>Marta Sondej</b> to jest świeżo upieczonym ortopedą, lecz z wielką wiedzą i ambicjami. W weekendy lubi cyklicznie wymachiwać kablem od żelazka</figcaption>
                    </figure>

                </div>

                <div class="col-sm-6 col-md-5">

                    <h1>Martyna Szalony</h1>
                    <a href="#"><img src="../img/doc3.jpg" alt="Martyna Szalony"></a>


                </div>

                <div class="col-sm-6 col-md-5">


                </div>

                <div class="col-sm-6 col-md-5">

                    <figure>
                        <figcaption><b>Martyna Szalony</b> co prawda nie ma tytułu lekarza, a tym bradziej specjalizacji w dzeidzinie psychologii, ale nie raz pomogła psychicznie swoim znajomym</figcaption>
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