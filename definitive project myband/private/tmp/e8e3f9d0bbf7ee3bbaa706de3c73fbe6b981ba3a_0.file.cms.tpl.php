<?php
/* Smarty version 3.1.32, created on 2018-07-13 16:49:29
  from 'C:\Users\Jolan Bosman\Documents\ma\bewijzenmap\periode_1.4\proj\myBand\private\view\cms.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b48bbf9613750_69410564',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8e3f9d0bbf7ee3bbaa706de3c73fbe6b981ba3a' => 
    array (
      0 => 'C:\\Users\\Jolan Bosman\\Documents\\ma\\bewijzenmap\\periode_1.4\\proj\\myBand\\private\\view\\cms.tpl',
      1 => 1531493270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b48bbf9613750_69410564 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1>CMS</h1>
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
    <td><a href="index.php?page=delete&article_id=<?php echo $_smarty_tpl->tpl_vars['article']->value[0];?>
">DELETE</a></td>
    </tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>


<?php }
}
