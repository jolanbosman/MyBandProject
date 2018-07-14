<?php
/* Smarty version 3.1.32, created on 2018-07-14 15:20:02
  from 'C:\Users\Jolan Bosman\Documents\ma\bewijzenmap\periode_1.4\proj\private\view\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b49f8821fe318_45142531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6227db1029c220ecd3df84e957e033b91cb7809e' => 
    array (
      0 => 'C:\\Users\\Jolan Bosman\\Documents\\ma\\bewijzenmap\\periode_1.4\\proj\\private\\view\\edit.tpl',
      1 => 1531571584,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b49f8821fe318_45142531 (Smarty_Internal_Template $_smarty_tpl) {
?><section>
<div class="container">
<form name="edit_article" action="" method="POST">
    <input hidden name="article_id" value="<?php echo $_smarty_tpl->tpl_vars['article']->value[0];?>
"
    <p>
        <label>Title: </label>
        <input name="title" value="<?php echo $_smarty_tpl->tpl_vars['article']->value[1];?>
"/>
    </p>
    <p>
        <label>Content: </label>
        <textarea name="content" value=""><?php echo $_smarty_tpl->tpl_vars['article']->value[2];?>
</textarea>
    </p>
    <p>
        <label>Image: </label>
        <input name="image" value="<?php echo $_smarty_tpl->tpl_vars['article']->value[3];?>
"/>
    </p>
    <input type="submit" name="submit" value="GO!" />
</form>
<p>
    <a href="index.php?page=cms">back to cms</a>
</p>
</div>
</section><?php }
}
