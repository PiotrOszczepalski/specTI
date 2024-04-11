<?php

require_once 'config.php';

$smarty = new Smarty;

$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $guess = $_POST['guess'];
    $gameController = new GameController();
    $message = $gameController->checkGuess($guess);
}

if(isset($_GET['play_again'])){
    session_destroy();
    header("Location: index.php");
    exit();
}

$smarty->assign('message', $message);
$smarty->display('game.tpl');