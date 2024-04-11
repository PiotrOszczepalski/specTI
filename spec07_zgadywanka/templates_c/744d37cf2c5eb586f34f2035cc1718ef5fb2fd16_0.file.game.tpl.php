<?php
/* Smarty version 4.3.2, created on 2024-04-11 23:53:13
  from 'C:\xampp\htdocs\spec07_zgadywanka\game.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66185bc97caed9_96990709',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '744d37cf2c5eb586f34f2035cc1718ef5fb2fd16' => 
    array (
      0 => 'C:\\xampp\\htdocs\\spec07_zgadywanka\\game.tpl',
      1 => 1712872389,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66185bc97caed9_96990709 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
        <?php if ($_smarty_tpl->tpl_vars['message']->value) {?>
            <p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
        <?php }?>
    </div>
    <form action="index.php" method="get">
        <button type="submit" name="play_again">Spróbuj ponownie!</button>
    </form>
</body>
</html><?php }
}
