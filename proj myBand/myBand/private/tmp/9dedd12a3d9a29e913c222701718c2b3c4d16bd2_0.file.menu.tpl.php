<?php
/* Smarty version 3.1.32, created on 2018-07-02 11:36:16
  from 'C:\Users\Jolan Bosman\Documents\ma\bewijzenmap\periode_1.4\proj\myBand\private\view\menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b39f210408d44_19265046',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9dedd12a3d9a29e913c222701718c2b3c4d16bd2' => 
    array (
      0 => 'C:\\Users\\Jolan Bosman\\Documents\\ma\\bewijzenmap\\periode_1.4\\proj\\myBand\\private\\view\\menu.tpl',
      1 => 1530524037,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b39f210408d44_19265046 (Smarty_Internal_Template $_smarty_tpl) {
?><h2><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>

<div>
<a href="index.php?page=home">HOME</a>
<a href="index.php?page=news">NEWS</a>
<a href="index.php?page=contact">CONTACT</a>
<a href="index.php?page=beheren">BEHEREN</a>
</div>

<form method="get" action="index.php">
    <input type="hidden" name="page" value="news">
    <input name="searchterm">
    <input type="submit" name="submit" value="ZOEK">
</form><?php }
}
