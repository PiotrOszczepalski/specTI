<?php
    require_once dirname(__FILE__).'/../config.php';

    $kwota = $_REQUEST['kwota'];
    $oprocentowanie = $_REQUEST['oprocentowanie'];
    $okres = $_REQUEST['okres'];

    if (! isset($kwota) && isset($oprocentowanie) && isset($okres)) {
        $messages[] = "Błędne wywołanie aplikacji, brak jednego z parametrów";
    }

    if ($kwota == "") {
        $messages[] = "Nie podano kwoty kredytu.";
    }

    if ($oprocentowanie == "") {
        $messages[] = "Nie podano oprocentowania kredytu.";
    }

    if ($okres == "") {
        $messages[] = "Nie podano czasu trwania kredytu.";
    }

    if (empty($messages)) {
	
        if (!is_numeric($kwota)) {
            $messages [] = 'Pierwsza wartość nie jest liczbą.';
        }
        
        if (!is_numeric($oprocentowanie)) {
            $messages [] = 'Druga wartość nie jest liczbą.';
        }
        
        if (!is_numeric($okres)) {
            $messages [] = 'Trzecia wartość nie jest liczbą.';
        }
    
    }

    if (empty($messages)) {

        $kwota = intval($kwota);
        $oprocentowanie = floatval($oprocentowanie);
        $okres = intval($okres);

        $procent = (($kwota*$oprocentowanie)/100)*$okres;
        $kwota2 = $kwota+$procent;

        $miesiac = $okres*12;
        $rata = $kwota2/$miesiac;

    }

    include "widok.php";
?>