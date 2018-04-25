<?php /* Smarty version Smarty-3.1.19, created on 2018-04-25 00:09:50
         compiled from "C:\wamp64\www\buildafrica\admin\themes\default\template\error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14865789805adfc74ebc6537-74609038%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbeaa6ca37747ccfc55d2bdf38d3e98381680101' => 
    array (
      0 => 'C:\\wamp64\\www\\buildafrica\\admin\\themes\\default\\template\\error.tpl',
      1 => 1517239232,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14865789805adfc74ebc6537-74609038',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'php_errors' => 0,
    'php_error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5adfc74ec0ddf0_69414390',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5adfc74ec0ddf0_69414390')) {function content_5adfc74ec0ddf0_69414390($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['php_errors']->value)&&count($_smarty_tpl->tpl_vars['php_errors']->value)) {?>
<div class="bootstrap">
	<div id="error-modal" class="modal fade">
		<div class="modal-dialog">
			<div class="alert alert-danger clearfix">
				<?php  $_smarty_tpl->tpl_vars['php_error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['php_error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['php_errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['php_error']->key => $_smarty_tpl->tpl_vars['php_error']->value) {
$_smarty_tpl->tpl_vars['php_error']->_loop = true;
?>
					<?php echo smartyTranslate(array('s'=>'%1$s on line %2$s in file %3$s','sprintf'=>array(htmlspecialchars($_smarty_tpl->tpl_vars['php_error']->value['type'], ENT_QUOTES, 'UTF-8', true),htmlspecialchars($_smarty_tpl->tpl_vars['php_error']->value['errline'], ENT_QUOTES, 'UTF-8', true),htmlspecialchars($_smarty_tpl->tpl_vars['php_error']->value['errfile'], ENT_QUOTES, 'UTF-8', true))),$_smarty_tpl);?>
<br />
					[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['php_error']->value['errno'], ENT_QUOTES, 'UTF-8', true);?>
] <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['php_error']->value['errstr'], ENT_QUOTES, 'UTF-8', true);?>
<br /><br />
				<?php } ?>
				<button type="button" class="btn btn-default pull-right" data-dismiss="modal"><i class="icon-remove"></i> Close</button>
			</div>
		</div>
	</div>
</div>
<?php }?><?php }} ?>
