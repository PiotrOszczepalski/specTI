<?php
/* Smarty version 4.3.2, created on 2023-11-16 23:44:00
  from 'C:\xampp\htdocs\spec05_smarty\app\credit_calc_view.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65569b305af568_34785601',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a5bce07164e8c83cc8726e9b1c4a9a9317df89b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\spec05_smarty\\app\\credit_calc_view.html',
      1 => 1700171491,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65569b305af568_34785601 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9320565965569b3059f076_28657044', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_48544613165569b305aee27_57261260', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'content'} */
class Block_9320565965569b3059f076_28657044 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9320565965569b3059f076_28657044',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<br> <br> <br> <br>

<form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/credit_calc.php" method="post">

    <input type="text" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['kwota'];?>
" placeholder="Kwota (zł)">

    <br>
    <br>

    <input type="text" name="oprocentowanie" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['oprocentowanie'];?>
" placeholder="Oprocentowanie (%)">

    <br>
    <br>

    <input type="text" name="okres" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['okres'];?>
" placeholder="Okres (lata)">

    <br>
    <br>

    <input type="submit" value="Oblicz">

</form>

<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
            <ol>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
            
			<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
            
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ol>
	<?php }
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['infos']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['infos']->value) > 0) {?> 
            <ul>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infos']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
		    
            <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
	<?php }
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['rata']->value))) {?>
	<span>Miesięczna rata kredytu wyniesie: <?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['rata']->value);?>
 zł.</span>
<?php }?>
    
<?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_48544613165569b305aee27_57261260 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_48544613165569b305aee27_57261260',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<p>Kontakt: credit@calc.pl</p>
<img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/img/baner-kontakt.jpg">

<?php
}
}
/* {/block 'footer'} */
}
