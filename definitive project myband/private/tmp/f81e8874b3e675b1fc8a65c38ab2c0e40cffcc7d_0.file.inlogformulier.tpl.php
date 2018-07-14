<?php
/* Smarty version 3.1.32, created on 2018-07-14 14:39:16
  from '/Users/nilsbosman/Sites/myband_v2/private/view/inlogformulier.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b49eef4e2ed28_97172780',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f81e8874b3e675b1fc8a65c38ab2c0e40cffcc7d' => 
    array (
      0 => '/Users/nilsbosman/Sites/myband_v2/private/view/inlogformulier.tpl',
      1 => 1531571955,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b49eef4e2ed28_97172780 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="inlogform" method="post" action="index.php">
    <input class="username" name="username" placeholder="username">
    <input type="password" name="password" placeholder="password">
    <input type="submit" name="submit_login">
</form><?php }
}
