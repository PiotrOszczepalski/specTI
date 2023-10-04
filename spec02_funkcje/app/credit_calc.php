<?php
    require_once dirname(__FILE__).'/../config.php';

    function getParams (&$kwota, &$oprocentowanie, &$okres) {

        $kwota = isset($_REQUEST['kwota'])?$_REQUEST['kwota']:null;
        $oprocentowanie = isset($_REQUEST['oprocentowanie'])?$_REQUEST['oprocentowanie']:null;
        $okres = isset($_REQUEST['okres'])?$_REQUEST['okres']:null;

    }

    function validate(&$kwota, &$oprocentowanie, &$okres, &$messages) {

        if (!(isset($kwota) && isset($oprocentowanie) && isset($okres))) {
            return false;
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

        if (count($messages) != 0) {
            return false;
        }

        if (!is_numeric($kwota)) {
            $messages [] = 'Pierwsza wartość nie jest liczbą.';
        }
        
        if (!is_numeric($oprocentowanie)) {
            $messages [] = 'Druga wartość nie jest liczbą.';
        }
        
        if (!is_numeric($okres)) {
            $messages [] = 'Trzecia wartość nie jest liczbą.';
        }
    
        if (count($messages) != 0) {
            return false;
        }
        else {
            return true;
        }

    }

    function process(&$kwota, &$oprocentowanie, &$okres, &$rata) {
    
        $kwota = intval($kwota);
        $oprocentowanie = floatval($oprocentowanie);
        $okres = intval($okres);

        $procent = (($kwota*$oprocentowanie)/100)*$okres;
        $kwota2 = $kwota+$procent;

        $miesiac = $okres*12;
        $rata = $kwota2/$miesiac;

    }

    $kwota = null;
    $oprocentowanie = null;
    $okres = null;
    $rata = null;
    $messages = array();

    getParams($kwota, $oprocentowanie, $okres);

    if (validate($kwota, $oprocentowanie, $okres, $messages)) { 
	    process($kwota, $oprocentowanie, $okres, $rata);
    }

    include "credit_calc_view.php";
?>