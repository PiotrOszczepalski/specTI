<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zgadnij liczbę!</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Zgadnij liczbę!</h1>
    <form action="index.php" method="post">
        <label for="guess">Wpisz liczbę (1-10):</label>
        <input type="text" id="guess" name="guess">
        <button type="submit">Sprawdź!</button>
    </form>
    <div class="message">
        {if $message}
            <p>{$message}</p>
        {/if}
    </div>
    <form action="index.php" method="get">
        <button type="submit" name="play_again">Spróbuj ponownie!</button>
    </form>
</body>
</html>