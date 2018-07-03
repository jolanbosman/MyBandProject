<?php
/* Smarty version 3.1.32, created on 2018-06-21 11:03:17
  from 'C:\Users\Jolan Bosman\Documents\ma\bewijzenmap\periode_1.4\proj\myBand\private\view\news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b2b69d54423b1_67109112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b51da7f50666cbbe3b5db5608eb2546db87801b' => 
    array (
      0 => 'C:\\Users\\Jolan Bosman\\Documents\\ma\\bewijzenmap\\periode_1.4\\proj\\myBand\\private\\view\\news.tpl',
      1 => 1529571795,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b2b69d54423b1_67109112 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>NEWS</h1>
<a href="index.php?page=home">HOME</a>
<h3>Currecnt Page: <?php echo $_smarty_tpl->tpl_vars['current_page']->value;?>
</h3>
<?php if ($_smarty_tpl->tpl_vars['current_page']->value > 1) {?>
    <a href="index.php?page=news&pageno=<?php echo $_smarty_tpl->tpl_vars['current_page']->value-1;?>
">PREVIOUS</a>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['current_page']->value < $_smarty_tpl->tpl_vars['number_of_pages']->value) {?>
    <a href="index.php?page=news&pageno=<?php echo $_smarty_tpl->tpl_vars['current_page']->value+1;?>
">NEXT</a>
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
