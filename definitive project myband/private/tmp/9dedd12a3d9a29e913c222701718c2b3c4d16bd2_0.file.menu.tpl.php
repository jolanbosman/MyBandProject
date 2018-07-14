<?php
/* Smarty version 3.1.32, created on 2018-07-13 16:49:01
  from 'C:\Users\Jolan Bosman\Documents\ma\bewijzenmap\periode_1.4\proj\myBand\private\view\menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b48bbdd833d77_05162481',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9dedd12a3d9a29e913c222701718c2b3c4d16bd2' => 
    array (
      0 => 'C:\\Users\\Jolan Bosman\\Documents\\ma\\bewijzenmap\\periode_1.4\\proj\\myBand\\private\\view\\menu.tpl',
      1 => 1531493340,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b48bbdd833d77_05162481 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="navbar">
    <img src="images/logo.png" alt="LOGO">
    <a href="index.php?page=home">HOME</a>
    <a href="index.php?page=news">NEWS</a>
    <a href="index.php?page=contact">CONTACT</a>
    <a href="index.php?page=admin">BEHEREN</a>


    <form method="get" action="index.php">
        <input type="hidden" name="page" value="news">
        <input name="searchterm" placeholder="Search Here">
        <input type="submit" name="submit" value="Search">
    </form>

</nav>
<div class="site-content"><?php }
}
