<?php
/* Smarty version 3.1.32, created on 2018-06-01 10:06:58
  from 'C:\Users\Jolan Bosman\Documents\ma\bewijzenmap\periode_1.4\proj\myBand\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b10fea29ad579_23761187',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dfc2345f601a59683f94ebeecee65248bc97b931' => 
    array (
      0 => 'C:\\Users\\Jolan Bosman\\Documents\\ma\\bewijzenmap\\periode_1.4\\proj\\myBand\\home.tpl',
      1 => 1527758668,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b10fea29ad579_23761187 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Hallo Smarty</h1>
<p>De mailadressen zijn:
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mailadresses']->value, 'mail');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['mail']->value) {
?>
        <li><?php echo $_smarty_tpl->tpl_vars['mail']->value;?>
</li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</p><?php }
}
