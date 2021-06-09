<?php
session_start();
require_once 'connect.php';
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
                    <a class="nav-link" href=""> Start </a>
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
                <h1>Kontakt</h1>

            </header>

            <div class="row">

                <div class="col-sm-6 col-md-5">

                    <h4>Mariusz Miras</h4>
                    <p><b>tel.</b>123 123 123</p>
                    <p><b>E-mail.</b>mariuszbud@wp.pl</p>
                    <hr>
                    <h4>Marta Sondej</h4>
                    <p><b>tel.</b>123 123 123</p>
                    <p><b>E-mail.</b>martasondej@wp.pl</p>
                    <hr>
                    <h4>Martyna Szalony</h4>
                    <p><b>tel.</b>123 123 123</p>
                    <p><b>E-mail.</b>martysia123@wp.pl</p>

                </div>

                <div class="col-sm-6 col-md-5">

                    <figure>

                    </figure>

                </div>

                <div class="col-sm-6 col-md-5">



                </div>

                <div class="col-sm-6 col-md-5">


                </div>


                <div class="col-sm-6 col-md-5">


                </div>

                <div class="col-sm-6 col-md-5">


                </div>

                <div class="col-sm-6 col-md-5">

                </div>

                <div class="col-sm-6 col-md-5">


                </div>

                <div class="col-sm-6 col-md-5">

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