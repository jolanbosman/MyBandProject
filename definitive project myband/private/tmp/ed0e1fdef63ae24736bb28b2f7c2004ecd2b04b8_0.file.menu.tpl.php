<?php
/* Smarty version 3.1.32, created on 2018-07-14 15:19:50
  from 'C:\Users\Jolan Bosman\Documents\ma\bewijzenmap\periode_1.4\proj\private\view\menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b49f8768e6622_40109945',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed0e1fdef63ae24736bb28b2f7c2004ecd2b04b8' => 
    array (
      0 => 'C:\\Users\\Jolan Bosman\\Documents\\ma\\bewijzenmap\\periode_1.4\\proj\\private\\view\\menu.tpl',
      1 => 1531493342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b49f8768e6622_40109945 (Smarty_Internal_Template $_smarty_tpl) {
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
