<!DOCTYPE HTML>
<html lang="pl">

<head>
	<meta charset="utf-8"/>
	<title>Logowanie</title>
	<link rel="stylesheet" href="<?php print(_APP_URL);?>/css/style_login.css">
</head>

<body>

<div class="wrapper">

<form action="<?php print(_APP_ROOT); ?>/app/security/login.php" method="post">

	<h1>Logowanie</h1>

	<div class="input-box">
	<input type="text" name="login" value="<?php print isset($_REQUEST['login'])?$_REQUEST['login']:null; ?>" placeholder="Login"/>
	</div>

	<div class="input-box">
	<input type="password" name="pass" placeholder="Hasło"/>
	</div>

	<button type="submit" class="btn">Zaloguj się</button>

</form>	

<?php

if (isset($messages)) {

	if (count ( $messages ) > 0) {
		
		foreach ( $messages as $key => $msg ) {
			echo '<p>'.$msg.'</p>';
		}
		
	}
}

?>

</div>

</body>
</html>