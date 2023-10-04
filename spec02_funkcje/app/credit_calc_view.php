<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE html>
<html lang="pl">
<link rel="stylesheet" href="<?php print(_APP_URL);?>/app/style.css">

<head>
    <meta charset="UTF-8">
    <title>Kalkulator kredytowy</title>
</head>

<body>
    <form action="<?php print(_APP_URL);?>/app/credit_calc.php" method="post">

        <label for="kwota">Kwota (zł)</label>
        <input type="text" id="kwota" name="kwota" value="<?php out($kwota) ?>">

        <br>

        <label for="oprocentowanie">Oprocentowanie (%)</label>
        <input type="text" id="oprocentowanie" name="oprocentowanie" value="<?php out($oprocentowanie) ?>">

        <br>

        <label for="okres">Okres (lata)</label>
        <input type="text" id="okres" name="okres" value="<?php out($okres) ?>">

        <br>

        <input type="submit" value="Oblicz" id="przycisk">

    </form>

    <?php
        if (isset($messages)) {
            if (count($messages) > 0) {
                
                echo "<ol id='lista'>";

                foreach ( $messages as $key => $msg ) {
                    echo "<li>" . $msg . "</li>";
                }

                echo "</ol>";

            }
        }

        if (isset($rata)) {
            echo "<span id='ok'>" . "Miesięczna rata kredytu wyniesie: " . round($rata, 2) . " zł" . "</span>";
        }
    ?>
      
</body>

</html>