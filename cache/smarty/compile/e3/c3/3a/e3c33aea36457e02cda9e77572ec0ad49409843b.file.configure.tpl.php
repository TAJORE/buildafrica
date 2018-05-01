<?php /* Smarty version Smarty-3.1.19, created on 2018-05-01 02:56:50
         compiled from "C:\wamp64\www\buildafrica\modules\Dohone\views\templates\admin\configure.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8250952515ae7c962181868-72816297%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3c33aea36457e02cda9e77572ec0ad49409843b' => 
    array (
      0 => 'C:\\wamp64\\www\\buildafrica\\modules\\Dohone\\views\\templates\\admin\\configure.tpl',
      1 => 1525135610,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8250952515ae7c962181868-72816297',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ae7c962338b28_28676572',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae7c962338b28_28676572')) {function content_5ae7c962338b28_28676572($_smarty_tpl) {?>

<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
	<li class="active"><a href="#template_1" role="tab" data-toggle="tab">Template 1</a></li>
	<li><a href="#template_2" role="tab" data-toggle="tab">Template 2</a></li>
	<li><a href="#template_3" role="tab" data-toggle="tab">Template 3</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
	<div class="tab-pane active" id="template_1"><?php echo $_smarty_tpl->getSubTemplate ('./template_1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
	<div class="tab-pane" id="template_2"><?php echo $_smarty_tpl->getSubTemplate ('./template_2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
	<div class="tab-pane" id="template_3"><?php echo $_smarty_tpl->getSubTemplate ('./template_3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
</div>
<?php }} ?>
