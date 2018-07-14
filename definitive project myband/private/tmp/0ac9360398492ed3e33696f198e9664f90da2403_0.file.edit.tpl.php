<?php
/* Smarty version 3.1.32, created on 2018-07-14 00:25:16
  from 'C:\Users\Jolan Bosman\Documents\ma\bewijzenmap\periode_1.4\proj\myBand\private\view\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b4926cc1d4065_17338241',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ac9360398492ed3e33696f198e9664f90da2403' => 
    array (
      0 => 'C:\\Users\\Jolan Bosman\\Documents\\ma\\bewijzenmap\\periode_1.4\\proj\\myBand\\private\\view\\edit.tpl',
      1 => 1531520714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b4926cc1d4065_17338241 (Smarty_Internal_Template $_smarty_tpl) {
?><section>
<div class="container">
<form name="edit_article" action="index.php" method="POST">
    <input hidden name="article_id" value="<?php echo $_smarty_tpl->tpl_vars['article']->value[0];?>
"
    <p>
        <label>Title: </label>
        <input name="title" value="<?php echo $_smarty_tpl->tpl_vars['article']->value[1];?>
"/>
    </p>
    <p>
        <label>Content: </label>
        <textarea name="content" value="">
            <?php echo $_smarty_tpl->tpl_vars['article']->value[2];?>

        </textarea>
    </p>
    <p>
        <label>Image: </label>
        <input name="image" value="<?php echo $_smarty_tpl->tpl_vars['article']->value[3];?>
"/>
    </p>
    <input type="submit" name="submit" value="GO!" />
</form>
</div>
</section><?php }
}
