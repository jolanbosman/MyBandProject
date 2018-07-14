<?php
/* Smarty version 3.1.32, created on 2018-07-04 08:54:54
  from 'C:\Users\Jolan Bosman\Documents\ma\bewijzenmap\periode_1.4\proj\myBand\private\view\news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b3c6f3eead003_41542774',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b51da7f50666cbbe3b5db5608eb2546db87801b' => 
    array (
      0 => 'C:\\Users\\Jolan Bosman\\Documents\\ma\\bewijzenmap\\periode_1.4\\proj\\myBand\\private\\view\\news.tpl',
      1 => 1530687293,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b3c6f3eead003_41542774 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>NEWS</h1>
<a href="index.php?page=home">HOME</a>
<h3>Current Page: <?php echo $_smarty_tpl->tpl_vars['current_page']->value;?>
</h3>
<?php if ($_smarty_tpl->tpl_vars['current_page']->value > 1) {?>
    <a href="index.php?page=news&pageno=<?php echo $_smarty_tpl->tpl_vars['current_page']->value-1;?>
">Previous Page</a>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['current_page']->value < $_smarty_tpl->tpl_vars['number_of_pages']->value) {?>
    <a href="index.php?page=news&pageno=<?php echo $_smarty_tpl->tpl_vars['current_page']->value+1;?>
">Next Page</a>
<?php }?>


<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
    <h2><?php echo $_smarty_tpl->tpl_vars['article']->value[0];?>
</h2>
    <p><?php echo $_smarty_tpl->tpl_vars['article']->value[1];?>
</p>
    <img src="<?php echo $_smarty_tpl->tpl_vars['article']->value[2];?>
" alt="foobar" />
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php }
}
