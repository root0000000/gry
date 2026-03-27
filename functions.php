<?php

function connection()
{
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'gry';

    return mysqli_connect($server, $user, $password, $database);
}

function script_1($connection)
{
    $query = 'SELECT gry.nazwa, gry.punkty FROM gry ORDER BY gry.punkty DESC LIMIT 5;';
    $result = mysqli_query($connection, $query);
    $temp = "<ul>";
    while ($row = mysqli_fetch_row($result)) {
        $temp = $temp . "<li><div class='div'>$row[0] <div id='punkty'>$row[1]</div></div></li>";
    }
    $temp = $temp . "</ul>";

    return $temp;
}

function script_2($connection)
{
    $query = "SELECT gry.id, gry.nazwa, gry.zdjecie FROM gry;";
    $result = mysqli_query($connection, $query);
    $temp = "";

    while ($row = mysqli_fetch_row($result)) {
        $temp = $temp . "<div class = 'image'><img src = '{$row[2]}' alt = '{$row[1]}' title = '{$row[0]}'><p>$row[1]</p></div>";
    }

    return $temp;
}

function script_3($connection)
{
    if (isset($_POST["skrypt_3"])) {
        $id = $_POST["skrypt_3"];
        $query = "SELECT gry.nazwa, LEFT(gry.opis, 100), gry.punkty, gry.cena FROM gry WHERE id='{$id}';";
        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_row($result);
        $temp = "<h2>$row[0] $row[2] $row[3] zł</h2><p>$row[1]</p>";

        return $temp;
    }
}

function script_4($connection)
{
    if (isset($_POST["nazwa"])) {
        $nazwa = $_POST["nazwa"];
        $opis = $_POST["opis"];
        $cena = $_POST["cena"];
        $zdjęcie = $_POST["zdjęcie"];

        $query = "INSERT INTO `gry`(`nazwa`, `opis`, `punkty`, `cena`, `zdjecie`) VALUES ('{$nazwa}', '{$opis}', 0, '{$cena}', '{$zdjęcie}');";
        $result = mysqli_query($connection, $query);
    }
}
?>