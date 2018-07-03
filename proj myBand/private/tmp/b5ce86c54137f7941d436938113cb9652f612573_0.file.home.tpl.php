<?php
/* Smarty version 3.1.32, created on 2018-06-01 12:19:47
  from 'C:\Users\Jolan Bosman\Documents\ma\bewijzenmap\periode_1.4\proj\myBand\private\view\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b111dc37c35b1_66853649',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5ce86c54137f7941d436938113cb9652f612573' => 
    array (
      0 => 'C:\\Users\\Jolan Bosman\\Documents\\ma\\bewijzenmap\\periode_1.4\\proj\\myBand\\private\\view\\home.tpl',
      1 => 1527848332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b111dc37c35b1_66853649 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Hallo Smarty</h1>
<p>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'title');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['title']->value) {
?>
        <li><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</p>
<a href="index.php?page=contact">Contact</a><?php }
}
