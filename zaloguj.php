<?php

    require_once "polaczenie.php";
    session_start();
    //baza danych o uzytkowniku
    $polacz = @new mysqli($host, $db_user, $db_password, $db_name);
    //jezeli podczas logowania wystapi blad
    if($polacz->connect_errno!=0) {
        echo "Error: ".$polacz->connect_errno . " opis: ". $polacz->connect_error;
    }
    else {
        //logowanie
        $username=$_POST['username'];
        $password=$_POST['password'];
        //baza z uzytkownikiem
        $sql = "SELECT * FROM uzytkownicy WHERE uzytkownik='$username' AND haslo='$password'";

        if($rezul = @$polacz->query($sql)) {
            $ileUzytkownikow = $rezul->num_rows;
            if($ileUzytkownikow>0) {
                $wiersz = $rezul->fetch_assoc();
                $_SESSION['username'] = $wiersz['uzytkownik'];
                unset($_SESSION['Blad']);
                $rezul->free_result();
                header('location: stronaGlowna.php');
            } else {
                $_SESSION['Blad'] = '<a>Nieprawidlowy login</a>';
                header('location: stronaLogowania.php');
            }
        }

        $polacz->close();
    }

    //$username = $_POST['username'];
    //$password = $_POST['password'];

    //echo $username."<br/>";
    //echo $password;

?>

