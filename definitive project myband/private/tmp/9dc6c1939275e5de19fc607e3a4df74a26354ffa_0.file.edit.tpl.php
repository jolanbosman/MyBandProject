<?php
/* Smarty version 3.1.32, created on 2018-07-14 14:33:04
  from '/Users/nilsbosman/Sites/myband_v2/private/view/edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b49ed809b8b16_24733142',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9dc6c1939275e5de19fc607e3a4df74a26354ffa' => 
    array (
      0 => '/Users/nilsbosman/Sites/myband_v2/private/view/edit.tpl',
      1 => 1531571583,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b49ed809b8b16_24733142 (Smarty_Internal_Template $_smarty_tpl) {
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
