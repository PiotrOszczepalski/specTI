<?php
    require_once dirname(__FILE__).'/../config.php';
    require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';
    include _ROOT_PATH.'/app/security/check.php';

    function getParams (&$form) {

        $form['kwota'] = isset($_REQUEST['kwota'])?$_REQUEST['kwota']:null;
        $form['oprocentowanie'] = isset($_REQUEST['oprocentowanie'])?$_REQUEST['oprocentowanie']:null;
        $form['okres'] = isset($_REQUEST['okres'])?$_REQUEST['okres']:null;

    }

    function validate(&$form, &$infos, &$messages) {

        if (!(isset($form['kwota']) && isset($form['oprocentowanie']) && isset($form['okres']))) {
            return false;
        }

        $infos [] = 'Przekazano parametry.';

        if ($form['kwota'] == "") {
            $messages[] = "Nie podano kwoty kredytu.";
        }

        if ($form['oprocentowanie'] == "") {
            $messages[] = "Nie podano oprocentowania kredytu.";
        }

        if ($form['okres'] == "") {
            $messages[] = "Nie podano czasu trwania kredytu.";
        }

        if (count($messages) == 0) {
            if (!is_numeric($form['kwota'])) {
                $messages [] = 'Podana kwota nie jest liczbą.';
            }
            if (!is_numeric($form['oprocentowanie'])) {
                $messages [] = 'Podane oprocentowanie nie jest liczbą.';
            }
            if (!is_numeric($form['okres'])) {
                $messages [] = 'Podano nieprawidłowy czas trwania kredytu.';
            }
        }
    
        if (count($messages)>0) {
            return false;
        }
	    else { 
            return true;
        }

    }

    function process(&$form, &$infos, &$messages, &$rata) {

        $infos [] = 'Parametry poprawne. <br> Wykonuję obliczenia.';

        global $role;
    
        $form['kwota'] = intval($form['kwota']);
        $form['oprocentowanie'] = floatval($form['oprocentowanie']);
        $form['okres'] = intval($form['okres']);

        if ($form['kwota'] > 10000) {
            if ($role == 'admin') {

				$procent = (($form['kwota']*$form['oprocentowanie'])/100)*$form['okres'];
                $kwota2 = $form['kwota']+$procent;

                $miesiac = $form['okres']*12;
                $rata = $kwota2/$miesiac;

			} 
            else {
				$messages [] = 'Tylko administrator może obliczyć ratę <br> kredytu dla kwoty wyższej niż 10 000 zł!';
			}
        }
        else {

            $procent = (($form['kwota']*$form['oprocentowanie'])/100)*$form['okres'];
            $kwota2 = $form['kwota']+$procent;

            $miesiac = $form['okres']*12;
            $rata = $kwota2/$miesiac;

        }

    }

    $form = null;
    $infos = array();
    $messages = array();
    $rata = null;
    
    getParams($form);

    if (validate($form,$infos,$messages)) {
	    process($form,$infos,$messages,$rata);
    }

    $smarty = new Smarty();

    $smarty->assign('app_url',_APP_URL);
    $smarty->assign('root_path',_ROOT_PATH);
    $smarty->assign('page_title','Kalkulator kredytowy');
    $smarty->assign('page_description','Dzięki temu kalkulatorowi możesz obliczyć ratę swojego kredytu!');
    $smarty->assign('page_header','Kalkulator kredytowy');

    $smarty->assign('form',$form);
    $smarty->assign('rata',$rata);
    $smarty->assign('messages',$messages);
    $smarty->assign('infos',$infos);

    $smarty->display(_ROOT_PATH.'/app/credit_calc_view.html');
?>