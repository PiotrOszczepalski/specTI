<?php 
include _ROOT_PATH.'/templates/top.php';
?>

<section id="kalkulator">

    <form action="<?php print(_APP_URL);?>/app/credit_calc.php" method="post">

        <input type="text" name="kwota" value="<?php out($kwota) ?>" placeholder="Kwota">

        <br>
        <br>

        <input type="text" name="oprocentowanie" value="<?php out($oprocentowanie) ?>" placeholder="Oprocentowanie">

        <br>
        <br>

        <input type="text" name="okres" value="<?php out($okres) ?>" placeholder="Okres">

        <br>
        <br>

        <input type="submit" value="Oblicz">

    </form>

    <?php
        if (isset($messages)) {
            if (count($messages) > 0) {
                
                echo "<table>";

                foreach ( $messages as $key => $msg ) {
                    echo "<tr><td>" . $msg . "</td></tr>";
                }

                echo "</table>";

             }
        }

        if (isset($rata)) {
            echo "<span>" . "Miesięczna rata kredytu wyniesie: " . round($rata, 2) . " zł" . "</span>";
        }
    ?>
     
</section>

<?php 
include _ROOT_PATH.'/templates/bottom.php';
?>