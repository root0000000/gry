<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gry komputerowe</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <?php
    require("functions.php");
    $connection = connection();
    ?>
    <header id="header_1">
        <h1>
            Ranking gier komputerowych
        </h1>
    </header>
    <section id="left">
        <h3>Top 5 gier w tym miesiącu</h3>
        <?php
        echo script_1($connection);
        ?>
        <h3>Nasz sklep</h3>
        <a href="https://sklep.gry.pl">Tu kupisz gry</a>
        <h3>Stronę wykonał</h3>
        <p>00000000</p>
    </section>
    <section id="middle">
        <?php
        echo script_2($connection);
        ?>
    </section>
    <section id="right">
        <h3>Dodaj nowe grę</h3>
        <form method="post">
            <div><label for="nazwa">nazwa</label></div>
            <div><input id="nazwa" name="nazwa" type="text"></div>
            <div><label for="opis">opis</label></div>
            <div><input id="opis" name="opis" type="text"></div>
            <div><label for="cena">cena</label></div>
            <div><input id="cena" name="cena" type="text"></div>
            <div><label for="zdjęcie">zdjęcie</label></div>
            <div><input id="zdjęcie" name="zdjęcie" type="text"></div>
            <div><button type="submit">DODAJ</button></div>
            <?php
            echo script_4($connection);
            ?>
        </form>
    </section>
    <footer id="footer_1">
        <form method="post">
            <label for="skrypt_3"></label>
            <input id="skrypt_3" name="skrypt_3" type="text">
            <button type="submit">Pokaż opis</button>
            <?php
            echo script_3($connection);

            mysqli_close($connection);
            ?>
        </form>

    </footer>
</body>

</html>