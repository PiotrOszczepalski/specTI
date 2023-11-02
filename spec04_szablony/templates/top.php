<!DOCTYPE html>
<html lang="pl">
<link rel="stylesheet" href="<?php print(_APP_URL);?>/css/style.css">

<head>
    <meta charset="UTF-8">
    <title> <?php out($page_title); if (!isset($page_title)) {  ?> Tytuł domyślny... <?php } ?> </title>
</head>

<body>

    <header>

        <a href="#" class="logo"></a>

        <nav>
            <a href="#home" class="active">Home</a>
            <a href="#kalkulator">Kalkulator</a>
            <a href="#kontakt">Kontakt</a>
            <a href="<?php print(_APP_ROOT); ?>/app/security/logout.php">Wyloguj</a>
        </nav>

    </header>

    <section id="home">

        <p> <?php out($page_header); if (!isset($page_header)) {  ?> Tytuł domyślny... <?php } ?> 
        <br> <br> <?php out($page_description); if (!isset($page_description)) {  ?> Opis domyślny... <?php } ?> </p>

    </section>