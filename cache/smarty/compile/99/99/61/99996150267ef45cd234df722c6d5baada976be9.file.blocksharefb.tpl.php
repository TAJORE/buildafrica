<?php /* Smarty version Smarty-3.1.19, created on 2018-04-27 23:33:07
         compiled from "C:\wamp64\www\buildafrica\modules\blocksharefb\blocksharefb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3625659935ae3a523481f34-22654962%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99996150267ef45cd234df722c6d5baada976be9' => 
    array (
      0 => 'C:\\wamp64\\www\\buildafrica\\modules\\blocksharefb\\blocksharefb.tpl',
      1 => 1517239234,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3625659935ae3a523481f34-22654962',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_link' => 0,
    'product_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ae3a523490df9_85214954',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae3a523490df9_85214954')) {function content_5ae3a523490df9_85214954($_smarty_tpl) {?>

<li id="left_share_fb">
	<a href="http://www.facebook.com/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['product_link']->value;?>
&amp;t=<?php echo $_smarty_tpl->tpl_vars['product_title']->value;?>
" class="_blank"><?php echo smartyTranslate(array('s'=>'Share on Facebook!','mod'=>'blocksharefb'),$_smarty_tpl);?>
</a>
</li><?php }} ?>
