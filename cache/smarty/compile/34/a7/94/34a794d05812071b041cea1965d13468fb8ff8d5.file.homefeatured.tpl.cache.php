<?php /* Smarty version Smarty-3.1.19, created on 2018-04-27 23:06:03
         compiled from "C:\wamp64\www\buildafrica\themes\default-bootstrap\modules\homefeatured\homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2873340935ae39ecb5b9928-72872025%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34a794d05812071b041cea1965d13468fb8ff8d5' => 
    array (
      0 => 'C:\\wamp64\\www\\buildafrica\\themes\\default-bootstrap\\modules\\homefeatured\\homefeatured.tpl',
      1 => 1517239232,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2873340935ae39ecb5b9928-72872025',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ae39ecb5c6866_53452684',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae39ecb5c6866_53452684')) {function content_5ae39ecb5c6866_53452684($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?>
<?php }} ?>
