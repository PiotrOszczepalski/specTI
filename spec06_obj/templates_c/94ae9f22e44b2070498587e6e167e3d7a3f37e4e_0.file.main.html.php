<?php
/* Smarty version 4.3.2, created on 2023-12-20 13:54:14
  from 'C:\xampp\htdocs\spec06_obj\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6582e3f6b33344_35194929',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94ae9f22e44b2070498587e6e167e3d7a3f37e4e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\spec06_obj\\templates\\main.html',
      1 => 1703076847,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6582e3f6b33344_35194929 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style.css">
</head>

<body>

    <header>

        <a href="#home"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/img/logo.png"></a>

        <nav>
            <a href="#home" class="active">Home</a>
            <a href="#kalkulator">Kalkulator</a>
            <a href="#kontakt">Kontakt</a>
        </nav>

    </header>

    <section id="home">

        <p> <?php echo (($tmp = $_smarty_tpl->tpl_vars['page_header']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
 
        <br> <br> <?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? "Opis domyślny" ?? null : $tmp);?>
 </p>

    </section>

    <section id="kalkulator">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4545808826582e3f6b31b98_75790753', 'content');
?>

    </section>

    <section id="kontakt">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15561891796582e3f6b32645_91015043', 'footer');
?>

    </section>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/index.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
/* {block 'content'} */
class Block_4545808826582e3f6b31b98_75790753 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4545808826582e3f6b31b98_75790753',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości.... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_15561891796582e3f6b32645_91015043 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_15561891796582e3f6b32645_91015043',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki.... <?php
}
}
/* {/block 'footer'} */
}
