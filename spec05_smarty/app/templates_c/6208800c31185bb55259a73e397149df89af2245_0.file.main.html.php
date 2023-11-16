<?php
/* Smarty version 4.3.2, created on 2023-11-15 14:51:16
  from 'C:\xampp\htdocs\spec05_smarty\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6554ccd400f397_05616072',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6208800c31185bb55259a73e397149df89af2245' => 
    array (
      0 => 'C:\\xampp\\htdocs\\spec05_smarty\\templates\\main.html',
      1 => 1700055832,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6554ccd400f397_05616072 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="<?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? 'Opis domyślny' ?? null : $tmp);?>
">
    <title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/style.css">
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/js/index.js"><?php echo '</script'; ?>
>
</head>

<body>

    <header>

        <a href="#home"><img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/img/logo.png"></a>

        <nav>
            <a href="#home" class="active">Home</a>
            <a href="#kalkulator">Kalkulator</a>
            <a href="#kontakt">Kontakt</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/security/logout.php">Wyloguj</a>
        </nav>

    </header>

    <section id="home">

        <p> <?php echo (($tmp = $_smarty_tpl->tpl_vars['page_header']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
 
        <br> <br> <?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? "Opis domyślny" ?? null : $tmp);?>
 </p>

    </section>

    <section id="kalkulator">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2069986746554ccd400e485_09680963', 'content');
?>

    </section>

    <section id="kontakt">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5032178666554ccd400ecb6_19009955', 'footer');
?>

    </section>

</body>
</html><?php }
/* {block 'content'} */
class Block_2069986746554ccd400e485_09680963 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2069986746554ccd400e485_09680963',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości.... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_5032178666554ccd400ecb6_19009955 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_5032178666554ccd400ecb6_19009955',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki.... <?php
}
}
/* {/block 'footer'} */
}
