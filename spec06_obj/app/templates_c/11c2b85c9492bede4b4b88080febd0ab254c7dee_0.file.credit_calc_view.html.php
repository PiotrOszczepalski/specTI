<?php
/* Smarty version 4.3.2, created on 2023-12-08 10:23:04
  from 'C:\xampp\htdocs\spec06_obj\app\credit_calc_view.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6572e078576771_12910790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11c2b85c9492bede4b4b88080febd0ab254c7dee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\spec06_obj\\app\\credit_calc_view.html',
      1 => 1702027310,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6572e078576771_12910790 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16312874326572e0785631e1_25711256', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10579198076572e078575b68_63303766', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'content'} */
class Block_16312874326572e0785631e1_25711256 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_16312874326572e0785631e1_25711256',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<br> <br> <br> <br>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/credit_calc.php" method="post">

    <input type="text" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kwota;?>
" placeholder="Kwota (zł)">

    <br>
    <br>

    <input type="text" name="oprocentowanie" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->oprocentowanie;?>
" placeholder="Oprocentowanie (%)">

    <br>
    <br>

    <input type="text" name="okres" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->okres;?>
" placeholder="Okres (lata)">

    <br>
    <br>

    <input type="submit" value="Oblicz">

</form>

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
      <ol>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
	
	<ul>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
	
      <span>Miesięczna rata kredytu wyniesie: <?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['res']->value->result);?>
 zł.</span>
	
<?php }?>
    
<?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_10579198076572e078575b68_63303766 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_10579198076572e078575b68_63303766',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<p>Kontakt: credit@calc.pl</p>
<img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/img/baner-kontakt.jpg">

<?php
}
}
/* {/block 'footer'} */
}
