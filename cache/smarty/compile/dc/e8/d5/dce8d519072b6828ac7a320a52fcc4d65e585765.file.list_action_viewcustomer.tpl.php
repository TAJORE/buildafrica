<?php /* Smarty version Smarty-3.1.19, created on 2018-04-28 02:03:49
         compiled from "C:\wamp64\www\buildafrica\modules\blocknewsletter\views\templates\admin\list_action_viewcustomer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7682707705ae3c8756e3715-84420476%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dce8d519072b6828ac7a320a52fcc4d65e585765' => 
    array (
      0 => 'C:\\wamp64\\www\\buildafrica\\modules\\blocknewsletter\\views\\templates\\admin\\list_action_viewcustomer.tpl',
      1 => 1517239234,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7682707705ae3c8756e3715-84420476',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'disable' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ae3c875754b02_69180948',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae3c875754b02_69180948')) {function content_5ae3c875754b02_69180948($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit btn btn-default <?php if ($_smarty_tpl->tpl_vars['disable']->value) {?>disabled<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" >
	<i class="icon-search-plus"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
