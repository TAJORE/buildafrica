<?php /* Smarty version Smarty-3.1.19, created on 2018-04-27 23:27:57
         compiled from "C:\wamp64\www\buildafrica\modules\blockreinsurance\blockreinsurance.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2590990265ae3a3ed930eb1-69119130%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91f567eb597b2a5bc8249517b27d75aa012b153d' => 
    array (
      0 => 'C:\\wamp64\\www\\buildafrica\\modules\\blockreinsurance\\blockreinsurance.tpl',
      1 => 1517239234,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2590990265ae3a3ed930eb1-69119130',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'infos' => 0,
    'nbblocks' => 0,
    'module_dir' => 0,
    'info' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ae3a3ed9d45a4_16490833',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae3a3ed9d45a4_16490833')) {function content_5ae3a3ed9d45a4_16490833($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['infos']->value)>0) {?>
<!-- MODULE Block reinsurance -->
<div id="reinsurance_block" class="clearfix">
	<ul class="width<?php echo $_smarty_tpl->tpl_vars['nbblocks']->value;?>
">	
		<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['infos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
			<li><img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)$_smarty_tpl->tpl_vars['module_dir']->value)."img/".((string)mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['info']->value['file_name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8')));?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['info']->value['text'], ENT_QUOTES, 'UTF-8', true);?>
" /> <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['info']->value['text'], ENT_QUOTES, 'UTF-8', true);?>
</span></li>                        
		<?php } ?>
	</ul>
</div>
<!-- /MODULE Block reinsurance -->
<?php }?><?php }} ?>