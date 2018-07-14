<?php
/* Smarty version 3.1.32, created on 2018-07-14 14:17:24
  from '/Users/nilsbosman/Sites/myband_v2/private/view/menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b49e9d4c22ec2_26415470',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9fa8d3e524ac7c86a0cc10c2fe4c563ed9d030eb' => 
    array (
      0 => '/Users/nilsbosman/Sites/myband_v2/private/view/menu.tpl',
      1 => 1531493342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b49e9d4c22ec2_26415470 (Smarty_Internal_Template $_smarty_tpl) {
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
