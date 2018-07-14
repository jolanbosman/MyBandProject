<?php
/* Smarty version 3.1.32, created on 2018-07-14 15:06:33
  from '/Users/nilsbosman/Sites/myband_v2/private/view/cms.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b49f5593fc478_17472319',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b449d0d87351d5b03294b0dc8f57532f1525f00' => 
    array (
      0 => '/Users/nilsbosman/Sites/myband_v2/private/view/cms.tpl',
      1 => 1531573569,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b49f5593fc478_17472319 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1>CMS</h1>

<p>
    <a href="index.php?page=new">Create new article</a>
</p>
<table>
    <tr>
        <td>ID</td><td>Title</td><td>Content</td><td>Control Panel</td>
    </tr>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
    <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['article']->value[0];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['article']->value[1];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['article']->value[2];?>
</td>
    <td><a href="index.php?page=edit&article_id=<?php echo $_smarty_tpl->tpl_vars['article']->value[0];?>
">EDIT</a></td>
    <td><a href="index.php?page=cms&delete_id=<?php echo $_smarty_tpl->tpl_vars['article']->value[0];?>
">DELETE</a></td>
    </tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>


<?php }
}
