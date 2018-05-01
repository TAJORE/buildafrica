<?php /* Smarty version Smarty-3.1.19, created on 2018-04-27 23:11:07
         compiled from "C:\wamp64\www\buildafrica\admin84539stih\themes\default\template\controllers\modules\warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20523747935ae39ffbe949f3-73030058%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc9de695d9d8175ab1aa106d0de2f5596acb6840' => 
    array (
      0 => 'C:\\wamp64\\www\\buildafrica\\admin84539stih\\themes\\default\\template\\controllers\\modules\\warning_module.tpl',
      1 => 1517239232,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20523747935ae39ffbe949f3-73030058',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ae39ffbe9e213_91148461',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae39ffbe9e213_91148461')) {function content_5ae39ffbe9e213_91148461($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a>
<?php }} ?>
