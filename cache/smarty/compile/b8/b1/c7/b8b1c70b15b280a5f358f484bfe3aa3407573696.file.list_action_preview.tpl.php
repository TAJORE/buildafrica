<?php /* Smarty version Smarty-3.1.19, created on 2018-04-28 23:34:52
         compiled from "C:\wamp64\www\buildafrica\theme2\themes\default\template\helpers\list\list_action_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17547136345ae4f70c4628b0-47105723%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8b1c70b15b280a5f358f484bfe3aa3407573696' => 
    array (
      0 => 'C:\\wamp64\\www\\buildafrica\\theme2\\themes\\default\\template\\helpers\\list\\list_action_preview.tpl',
      1 => 1517239232,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17547136345ae4f70c4628b0-47105723',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ae4f70c4b0701_83145472',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae4f70c4b0701_83145472')) {function content_5ae4f70c4b0701_83145472($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
