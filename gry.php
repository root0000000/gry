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
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'gry';

    $connection = mysqli_connect($server, $user, $password, $database);

    ?>
    <header id="header_1">
        <h1>
            Ranking gier komputerowych
        </h1>
    </header>
    <section id="left">
        <h3>Top 5 gier w tym miesiącu</h3>
        <?php
        $query = 'SELECT gry.nazwa, gry.punkty FROM gry ORDER BY gry.punkty DESC LIMIT 5;';

        $result = mysqli_query($connection, $query);

        while ($row = mysqli_fetch_row($result)) {
            echo "<ul>
            <li>$row[0] $row[1]</li>
        </ul>";
        }

        mysqli_close($connection);
        ?>
        <h3>Nasz sklep</h3>
        <a src="https://sklep.gry.pl">Tu kupisz gry</a>
        <h3>Stronę wykonał</h3>
        <p>00000000</p>
    </section>
    <section id="middle"></section>
    <section id="right">
        <h3>Dodaj nowe grę</h3>
        <form method="post">
            <label for="nazwa"></label>
            <input id="nazwa" name="nazwa" type="text">
            <label for="opis"></label>
            <input id="opis" name="opis" type="text">
            <label for="cena"></label>
            <input id="cena" name="cena" type="text">
            <label for="zdjęcie"></label>
            <input id="zdjęcie" name="zdjęcie" type="text">
            <button type="submit">DODAJ</button>
        </form>
    </section>
    <footer id="footer_1">
        <form method="post">
            <label for="skrypt_3"></label>
            <input id="skrypt_3" name="skrypt_3" type="text">
            <button type="submit">Pokaż opis</button>
        </form>
    </footer>
</body>

</html>