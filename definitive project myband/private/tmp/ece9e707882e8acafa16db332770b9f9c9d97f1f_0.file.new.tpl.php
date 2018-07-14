<?php
/* Smarty version 3.1.32, created on 2018-07-14 15:45:03
  from 'C:\Users\Jolan Bosman\Documents\ma\bewijzenmap\periode_1.4\proj\private\view\new.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b49fe5fe93044_07998139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ece9e707882e8acafa16db332770b9f9c9d97f1f' => 
    array (
      0 => 'C:\\Users\\Jolan Bosman\\Documents\\ma\\bewijzenmap\\periode_1.4\\proj\\private\\view\\new.tpl',
      1 => 1531575821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b49fe5fe93044_07998139 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Create a new article</h1>
<section>
<div class="container">
<form name="new_article" action="" method="POST">
    <input hidden name="article_id" value=""
    <p>
        <label>Title: </label>
        <input name="title" value=""/>
    </p>
    <p>
        <label>Content: </label>
        <textarea name="content" value=""></textarea>
    </p>
    <p>
        <label>Image: </label>
        <input name="image" value=""/>
    </p>
    <input type="submit" name="submit" value="Create post" />
</form>
<p>
    <a href="index.php?page=cms">back to cms</a>
</p>
</div>
</section><?php }
}
