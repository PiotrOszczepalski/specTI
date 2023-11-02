<?php
    require_once dirname(__FILE__).'/../config.php';
    include _ROOT_PATH.'/app/security/check.php';

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
            $messages [] = 'Kwota nie jest liczbą.';
        }
        
        if (!is_numeric($oprocentowanie)) {
            $messages [] = 'Oprocentowanie nie jest liczbą.';
        }
        
        if (!is_numeric($okres)) {
            $messages [] = 'Okres nie jest liczbą.';
        }
    
        if (count($messages) != 0) {
            return false;
        }
        else {
            return true;
        }

    }

    function process(&$kwota, &$oprocentowanie, &$okres, &$messages, &$rata) {

        global $role;
    
        $kwota = intval($kwota);
        $oprocentowanie = floatval($oprocentowanie);
        $okres = intval($okres);

        if ($kwota > 10000) {
            if ($role == 'admin') {

				$procent = (($kwota*$oprocentowanie)/100)*$okres;
                $kwota2 = $kwota+$procent;

                $miesiac = $okres*12;
                $rata = $kwota2/$miesiac;

			} 
            else {
				$messages [] = 'Tylko administrator może obliczyć ratę <br> kredytu dla kwoty wyższej niż 10 000 zł!';
			}
        }
        else {
            $procent = (($kwota*$oprocentowanie)/100)*$okres;
            $kwota2 = $kwota+$procent;

            $miesiac = $okres*12;
            $rata = $kwota2/$miesiac;
        }

    }

    $kwota = null;
    $oprocentowanie = null;
    $okres = null;
    $rata = null;
    $messages = array();

    getParams($kwota, $oprocentowanie, $okres);

    if (validate($kwota, $oprocentowanie, $okres, $messages)) { 
	    process($kwota, $oprocentowanie, $okres, $messages, $rata);
    }

    $page_title = 'Kalkulator kredytowy';
    $page_description = 'Dzięki temu kalkulatorowi możesz obliczyć ratę swojego kredytu!';
    $page_header = 'Kalkulator kredytowy';
    $page_footer = 'Kontakt: credit@calc.pl';

    include "credit_calc_view.php";
?>