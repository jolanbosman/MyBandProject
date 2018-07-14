<?php
/* Smarty version 3.1.32, created on 2018-07-14 15:20:00
  from 'C:\Users\Jolan Bosman\Documents\ma\bewijzenmap\periode_1.4\proj\private\view\cms.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b49f8801e2aa8_95734757',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1bbfb950941307fe5c66ef02851830fa58247e7e' => 
    array (
      0 => 'C:\\Users\\Jolan Bosman\\Documents\\ma\\bewijzenmap\\periode_1.4\\proj\\private\\view\\cms.tpl',
      1 => 1531573570,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b49f8801e2aa8_95734757 (Smarty_Internal_Template $_smarty_tpl) {
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
